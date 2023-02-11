<?php

namespace Controllers;
use Model\Usuario;

class APIUsuarios {

    public static function index() {
        if(!is_admin()) {
            echo json_encode([]);
            return;
        }

        $usuarios = Usuario::all();

        foreach($usuarios as  $usuario) {
            $usuario->total = Usuario::totalArray(['fecha'=>$usuario->fecha]);
        }
        echo json_encode($usuarios);


        return;
    }

}