<?php

require_once __DIR__.'/../vendor/autoload.php';
use App\Model\{Estudiante,Curso};
use App\Controllers\Matricula;
$matricula=new Matricula();
$matricula->crearEstudiante(new Estudiante('Elena', 'villanueva',19 , 202011451 ));
print_r($estudiante)


$matricula=new Matricula();

$matricula->agregar(new Curso('calculo',0658780,3 ));
$matricula->agregar(new Curso('fundamentos de negocios',0356981,3 ));
$matricula->agregar(new Curso('algoritmo',0954561,4 ));

foreach($matricula->listar() as $curso)
{
  echo $curso->getNombre()."\n";
  echo $curso.getCodigo()."\n";
  echo $curso->getCredito();

}


 
