<?php
// require 'recolector.php';
// require 'recolectable.php';
require 'puedorecolectar.php';
 require 'tengocomida.php';
require 'Aldeano.php';
require 'Arbusto.php';
require 'Pesquero.php'; 
require 'Bancodepesca.php';
require 'AldeanoChino.php';
require 'AldeanoFranco.php';
echo '<pre>';

$aldeano = new Aldeano;
// var_dump($aldeano);
$arbusto = new Arbusto;
 //var_dump($arbusto);

$aldeano->recolectar($arbusto);
//Se debe ver el echo que devuelve el método recolectar

 $pesquero = new Pesquero;
 //var_dump($pesquero);
 $bancoDePesca = new BancoDePesca;
 //var_dump($bancoDePesca);

 $pesquero->recolectar($bancoDePesca);

 //Se debe ver el echo que devuelve el método recolectar

// // ------

$aldeanoChino = new AldeanoChino;
//var_dump($aldeanoChino);
$aldeanoFranco = new AldeanoFranco;
//var_dump($aldeanoFranco);

 $arbusto1 = new Arbusto;
 //var_dump($arbusto1);
 $arbusto2 = new Arbusto;
 //var_dump($arbusto1);
 $aldeanoChino->recolectar($arbusto1);
// // Se debe ver el echo que devuelve el método recolectar sin bonus

$aldeanoFranco->recolectar($arbusto2);
// // Se debe ver el echo que devuelve el método recolectar con el bonus del 25%