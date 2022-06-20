<?php
namespace App\Controllers;
use App\Model\Estudiante;
use App\Model\Curso;
class Matricula
{
    private $estudiante;
    private $arreglo;
    
  public function _construct($estudiante)
  {
      $this->estudiante=$estudiante;
      $this->arreglo=[];
  }
  public function crearEstudiante(Estudiante $estudiante)
    {
      $this->estudiante=$estudiante;
          
  
    }
  public function getEstudiante()
    {
      return $this->estudiante;
    }
    
  public function agregar(Curso $curso)
   {
     $this->arreglo[]=$curso;
   }
   public function listar ()
   {
     return $this->arreglo;
   }
}
