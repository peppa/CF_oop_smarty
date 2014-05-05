<?php 

require_once '.Smarty/libs/Smarty.class.php';
//require_once './InOut.php';

$smarty=new Smarty();
$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->display('Input.tpl');

/*
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$sesso=$_POST['sesso'];
$anno=$_POST['anno'];
$mese=$_POST['mese'];
$giorno=$_POST['giorno'];
$comune=$_POST['comune'];
$provincia=$_POST['provincia'];
*/

/*
$smarty1=new Smarty();
$smarty1->assign('name',$nome." ".$cognome);
$smarty1->assign('CF',$persona->getCodiceFiscale());
$smarty1->display('Output.tpl');
*/

?>

