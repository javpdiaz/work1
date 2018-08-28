<?php
/**
 * Created by PhpStorm.
 * User: Jav
 * Date: 27/8/2018
 * Time: 11:36
 */

 class UnidadEntity{

     protected $nombre;
     protected $unidad;
     protected $descripcion;


     //region Getter and Setter
     /**
      * @return mixed
      */
     public function getNombre()
     {
         return $this->nombre;
     }

     /**
      * @param mixed $nombre
      */
     public function setNombre($nombre)
     {
         $this->nombre = $nombre;
     }

     /**
      * @return mixed
      */
     public function getUnidad()
     {
         return $this->unidad;
     }

     /**
      * @param mixed $unidad
      */
     public function setUnidad($unidad)
     {
         $this->unidad = $unidad;
     }

     /**
      * @return mixed
      */
     public function getDescripcion()
     {
         return $this->descripcion;
     }

     /**
      * @param mixed $descripcion
      */
     public function setDescripcion($descripcion)
     {
         $this->descripcion = $descripcion;
     }
     //endregion


 }