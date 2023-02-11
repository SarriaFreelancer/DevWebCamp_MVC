<?php

namespace Controllers;

use Model\Regalo;
use Model\Registro;
use Model\Evento;
use Model\Paquete;

class APIEventosDisponibles {

    public static function index() {
        if(!is_admin()) {
            echo json_encode([]);
            return;
        }
        $disponibles = Evento::all();

        foreach($disponibles as  $disponible) {
            $disponible->total = Evento::totalArray(['disponibles' => $disponible->disponibles, 'categoria_id' => $disponible->categoria_id]); 
        }

        echo json_encode($disponibles);

        return;
       

        
    }
}