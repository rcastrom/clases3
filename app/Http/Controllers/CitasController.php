<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Mail\CitasConfirmaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cliente_id=session('LoggedUser');
        $citas = Cita::where('cliente_id',$cliente_id)->get();
        return view('dashboard.citas_inicio')->with(compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.citas_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $cliente_id=session('LoggedUser');
        $cita = new Cita();
        $cita->cliente_id = $cliente_id;
        $cita->mascota = $request->mascota;
        $cita->dia = $request->dia;
        $cita->hora = $request->hora;
        $cita->save();
        $details = [
            'mascota' => $request->mascota,
            'dia' => $request->dia,
            'hora' => $request->hora
        ];
        $usuario=Usuario::where('id',$cliente_id)->first();
        $correo=$usuario->correo;
        Mail::to($correo)->send(new CitasConfirmaMail($details));
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita): View
    {
        return view('dashboard.citas_editar')->with(compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita): RedirectResponse
    {
        $cita->fill($request->input())->saveOrFail();
        return redirect()->route("citas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita): RedirectResponse
    {
        $cita->delete();
        return redirect()->route("citas.index");
    }
}
