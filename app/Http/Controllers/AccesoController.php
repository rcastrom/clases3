<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AccesoController extends Controller
{
    /*
     * Formulario para acceder
     *
     * @param void;
     * @return view;
     */
    public function login(): view
    {
        return view('auth.login');
    }

    /*
     * Formulario para alta usuario
     *
     * @param void;
     * @return view;
     */
    public function register(): view
    {
        return view('auth.register');
    }

    /*
     * Alta de usuario
     *
     * @param request;
     * @return redirect;
     */
    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre'=>'required',
            'appat'=>'required',
            'correo'=>'required|email|unique:usuarios',
            'tel'=>'required',
            'contra'=>'required|min:5'
        ],[
            'nombre.required'=>'Por favor, indique su nombre',
            'appat.required'=>'Por favor, indique su primer apellido',
            'correo.required'=>'Debe indicar un correo electrónico',
            'correo.email'=>'Ingrese un correo electrónico válido',
            'correo.unique'=>'Ya existe una cuenta registrada con ese correo',
            'tel.required'=>'Debe indicar un teléfono celular de contacto',
            'contra.required'=>'Escriba una contraseña',
            'contra.min'=>'La longitud de la contraseña es de mínimo 5 caracteres'
        ]);
        $registro = new Usuario;
        $registro->nombre = $request->nombre;
        $registro->apellido_paterno = $request->appat;
        $registro->apellido_materno = $request->apmat;
        $registro->correo = $request->correo;
        $registro->telcel = $request->tel;
        $registro->password = Hash::make($request->contra);
        $registrado = $registro->save();
        if($registrado){
            return back()->with('success','La cuenta ha sido creada satisfactoriamente');
        }else{
            return back()->with('fail','Algo ocurrió; por favor, inténtelo más tarde');
        }
    }

    /*
     * Verifica si existe el usuario, y le otorga el acceso
     *
     * @param request;
     * @return redirect;
     *
     */
    public function ingresar(Request $request): RedirectResponse
    {
        $request->validate([
            'correo'=>'required|email',
            'contra'=>'required|min:5'
        ],[
            'correo.required'=>'Debe indicar un correo electrónico',
            'correo.email'=>'Ingrese un correo electrónico válido',
            'contra.required'=>'Escriba una contraseña',
            'contra.min'=>'La longitud de la contraseña es de mínimo 5 caracteres'
        ]);
        $usuario = Usuario::where('correo',$request->correo)->first();
        if(!$usuario){
            return back()->with('fail','No existe ese correo electrónico registrado; verifique');
        }else{
            if (Hash::check($request->contra, $usuario->password)){
                $request->session()->put('LoggedUser', $usuario->id);
                return redirect('/admin/index');
            }else{
                return back()->with('fail','Error de contraseña; por favor, verifique');
            }
        }
    }

    /*
     * Cerrar sesión
     *
     * @param request;
     * @return redirect;
     *
     */
    public function logout(): RedirectResponse
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
