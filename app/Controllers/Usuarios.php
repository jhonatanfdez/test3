<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        $data['titulo'] = 'Lista de Usuarios';

        return view('usuarios_list', $data);
    }
}
