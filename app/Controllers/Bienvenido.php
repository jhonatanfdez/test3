<?php

namespace App\Controllers;

class Bienvenido extends BaseController
{
    public function index($nombre = 'Invitado')
    {
        $data = [
            'nombre' => $nombre,
            'titulo' => 'Bienvenida'
        ];

        return view('bienvenido', $data);
    }
}
