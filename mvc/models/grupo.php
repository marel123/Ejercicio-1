<?php
namespace MVC\Models;
use App\MySQL\Conexion;
class Grupo {
    protected $datos = [
        'id' => '',
        'nombre' => '',
        'curso_id' => '',
        'codigo' => ''
    ];
    public function __get($campo){
        returno $this->datos[$campo];
    }
    public function __set($campo,$valor){
        $this->datos[$campo]=$valor;
    }
    public function getGruposPorCurso($cursoid){
    
    }
    public function create(){
        $cnn = new Conexion();
        $sql = sprintf("insert into grupos (id,nombre,curso_id,codigo) values (%d,'%s',%d,%d)", $this->id, $this->nombre, $this->curso_id, $this->codigo);
        $rst = $cnn->query($sql);
        if (!$rst) {
            die('Error en la ejecucion de la consulta');
        } else {
            $this->id = $cnn->insert_id;
            $cnn->close();
            return true;
        } 
    }
    public function delete(grupoid){
        
    }
    public function edit(grupoid){
        
    }
}