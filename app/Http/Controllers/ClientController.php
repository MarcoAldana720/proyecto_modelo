<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    // IDENTIFICACION DEL PROFESOR
    public function id()
    {
        return view('client.id');
    }
    // ESTUDIOS REALIZADOS
    public function studies()
    {
        return view('client.studies');
    }
    // DATOS LABORALES
    public function data()
    {
        return view('client.data');
    }
    // LINEA DE GENERACION O APLICACION INNOVADORA DEL CONOCIMIENTO
    public function line()
    {
        return view('client.line');
    }
    // PRODUCCION ACADÉMICA
    public function production()
    {
        return view('client.production');
    }
    // PROYECTOS DE INVESTIGACIÓN
    public function projects()
    {
        return view('client.projects');
    }
}