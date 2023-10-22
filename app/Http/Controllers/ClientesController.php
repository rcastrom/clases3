<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Usuario;

class ClientesController extends Controller
{
    /*
     * Pantalla inicial de los clientes
     */
    public function index(): view
    {
        $data = Usuario::find(session('LoggedUser'));
        $nombre = $data->nombre.' '.$data->apellido_paterno;
        return view('dashboard.welcome')->with(compact('nombre'));
    }
}
