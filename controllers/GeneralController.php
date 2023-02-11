<?php

namespace Controllers;

use MVC\Router;
use Model\Registro;
use Model\Usuario;
use Model\Evento;
use Model\Paquete;
use Classes\Paginacion;

class GeneralController {

    public static function index(Router $router ){
        if(!is_admin()){
            header('Location: /login');
       }

        //Obtener ultimos registros
        $registros = Registro::get(5);
        foreach($registros as $registro) {
            $registro->usuario = Usuario::find($registro->usuario_id);
        }
        //Obtener primeros registros
        $pregistros = Registro::getPrimeros(5);
        foreach($pregistros as $pregistro) {
            $pregistro->usuario = Usuario::find($pregistro->usuario_id);
        }
        //Calcular Total de usuarios Confirmados
        $confirmados = Usuario::total('confirmado', 1);

        //Calcular los ingresos
        $virtuales = Registro::total('paquete_id', 2);
        $presenciales = Registro::total('paquete_id', 1);
        $gratis = Registro::total('paquete_id', 3);
        $virtualesT = ($virtuales * 46.5);
        $presencialesT = ($presenciales * 187.95);
        $totalUsuarios = $presenciales + $virtuales + $gratis;

        $ingresos = $virtualesT + $presencialesT;
        $metaIngresos = 1200.0;

        //Obtener Eventos con mas y menos lugares disponibles
        $menos_disponibles = Evento::ordenarLimite('disponibles', 'ASC', 5);
        $mas_disponibles = Evento::ordenarLimite('disponibles', 'DESC', 5);

        //Registro y paginacion

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if (!$pagina_actual || $pagina_actual < 1){
            header('Location: /admin/general?page=1');
        }

        $registros_por_pagina = 10;
        $total = Registro::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);
        
        if($paginacion->total_paginas() < $pagina_actual){
            header('Location: /admin/general?page=1');
        }

        $registrosd = Registro::paginar($registros_por_pagina, $paginacion->offset());
        foreach($registrosd as $registro){
            $registro->usuario = Usuario::find($registro->usuario_id);
            $registro->paquete = Paquete::find($registro->paquete_id);
            
        }
        

        $router->render('admin/general/index', [
            'titulo' => 'Control / General',
            'registros' => $registros,
            'pregistros' => $pregistros,
            'ingresos' => $ingresos,
            'virtuales' => $virtuales,
            'presenciales' => $presenciales,
            'gratis' => $gratis,
            'virtualesT' => $virtualesT,
            'presencialesT' => $presencialesT,
            'totalUsuarios' => $totalUsuarios,
            'confirmados' => $confirmados,
            'metaIngresos' => $metaIngresos,
            'menos_disponibles' => $menos_disponibles,
            'mas_disponibles' => $mas_disponibles,
            'registrosd' => $registrosd,
            'paginacion' => $paginacion->paginacion()
        ]);
    }
}