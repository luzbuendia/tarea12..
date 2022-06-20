<?php
namespace App\Model;
class Estudiante
{
    private $nombre;
    private $apellido;
    private $edad;
    private $codigo;

    public function _construct($nombre,$apellido,$edad,$codigo)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->codigo=$codigo;
    }
    public function getNombre()
    {
      return $this->nombre;
    }
    public function getApellido()
    {
      return $this->apellido;
    }
    public function getEdad()
    {
      return $this->edad;
    }
    public function getCodigo()
    {
      return $this->codigo;
    }   

}