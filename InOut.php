<?php
//C:\Users\Giulio\workspace\CF_oop\InOut.php

//namespace IO;
require_once 'persona.php';
require_once './libs/Smarty.class.php';
//use ENTITY\Persona;



$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$sesso=$_POST['sesso'];
$anno=$_POST['anno'];
$mese=$_POST['mese'];
$giorno=$_POST['giorno'];
$comune=$_POST['comune'];
$provincia=$_POST['provincia'];

	
$persona= new Persona($cognome,$nome,$anno,$mese,$giorno,$comune,$provincia,$sesso);
//print "\n\n\n";
//$persona->toString(); //comando di controllo 
//print "\n\n";
//$persona->toString();


$lol=$persona->getCodiceFiscale();

var_dump ($lol);
$smarty=new Smarty();
$smarty->assign('name',$nome);
$smarty->assign('surname',$cognome);
$smarty->assign('CF', 'CDEV');
$smarty->display('Output.tpl');


?>

