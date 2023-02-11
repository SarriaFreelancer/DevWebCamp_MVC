<?php

namespace Model;

class EventosEliminados extends ActiveRecord {
    protected static $tabla = 'eventos_eliminados';
    protected static $columnasDB = ['id', 'evento_id', 'registro_id'];

    public $id;
    public $evento_id;
    public $registro_id;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->evento_id = $args['evento_id'] ?? '';
        $this->registro_id = $args['registro_id'] ?? '';
    }
}