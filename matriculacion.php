<?php
namespace MVC\Models;
use App\MySQL\Conexion;
class matriculacion {
	protected $datos = [
		'usuario_id' => '',
		'grupo_id' => ''
	];
	public function __get($campo) {
        return $this->datos[$campo];
    }
    public function __set($campo, $valor) {
        $this->datos[$campo] = $valor;
    }
}