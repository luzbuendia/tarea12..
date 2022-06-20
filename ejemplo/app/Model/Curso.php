<?php
namespace App\Model;
class Estudiante
{
    private $nombre;
    private $codigo;
    private $credito;

    public function _construct($nombre,$codigo,$credito)
    {
        $this->nombre=$nombre;
        $this->codigo=$codigo;
        $this->credito=$credito;
    }
    public function getNombre()
    {
      return $this->nombre;
    }
    public function getCodigo()
    {
      return $this->codigo;
    }
    public function getCredito()
    {
      return $this->credito;
    }
   

}