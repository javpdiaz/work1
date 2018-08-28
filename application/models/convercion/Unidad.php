<?php
/**
 * Created by PhpStorm.
 * User: Jav
 * Date: 27/8/2018
 * Time: 11:35
 */

class Unidad extends CI_Model{

    private $tablanombre = "unidades";

    function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

    public function CrearUnidadByAtrib($nombre, $unidad, $descrip = ""){

        $data = array('nombre'=>$nombre, 'unidad'=>$unidad, 'descripcion'=>$descrip);

        $this->db->insert($this->tablanombre, $data);
    }


    /**
     * Crear un registro desde un arreglo contenedor de datos
     *
     * @param $dataArray
     */
    public function CrearUnidadByArray($dataArray){
        $this->db->insert($dataArray);
    }

    /**
     * @param $dataArray String
     * --Datos para actualizar
     * @param $whereCondition String
     * --Campo de la tabla
     * @param $whereValue String
     * --Valor del campo
     */
    public function Update($dataArray, $whereCondition, $whereValue){

        $this->db->set($dataArray);
        $this->db->where($whereCondition, $whereValue);
        $this->db->update($this->tablanombre, $dataArray);

    }


    /**
     * @param $whereCondition String
     * --Atributo con la condicion para realizar el borrado
     */
    public function Delete($whereCondition){
        $this->db->delete($this->tablanombre, $whereCondition);
    }

    /**
     * @return array
     * --Arreglo con todos los elementos de la tabla
     */
    public function GetAll(){
        $query = $this->db->get($this->tablanombre);
        $data[] = $query->result();
        return $data;
    }
}