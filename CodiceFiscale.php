<?php

//namespace ENTITY;
require_once 'Data.php';
require_once 'Luogo.php';

class CodiceFiscale {
	
	private $codicefiscale;
	
	private static $lettere_vocali=array('A','E','I','O','U');
	
	private static $tabA=array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,
			                                '9'=>9,'A'=>0,'B'=>1,'C'=>2,'D'=>3,'E'=>4,'F'=>5,'G'=>6,'H'=>7,
			                                'I'=>8,'J'=>9,'K'=>10,'L'=>11,'M'=>12,'N'=>13,'O'=>14,'P'=>15,
			                               'Q'=>16,'R'=>17,'S'=>18,'T'=>19,'U'=>20,'V'=>21,'W'=>22,'X'=>23,
			                                'Y'=>24,'Z'=>25);
	
	private static $tabB=array('0'=>1,'1'=>0,'2'=>5,'3'=>7,'4'=>9,'5'=>13,'6'=>15,'7'=>17,'8'=>19,
			                                '9'=>21,'A'=>1,'B'=>0,'C'=>5,'D'=>7,'E'=>9,'F'=>13,'G'=>15,'H'=>17,
			                                'I'=>19,'J'=>21,'K'=>2,'L'=>4,'M'=>18,'N'=>20,'O'=>11,'P'=>3,'Q'=>6,
			                               'R'=>8,'S'=>12,'T'=>14,'U'=>16,'V'=>10,'W'=>22,'X'=>25,'Y'=>24,'Z'=>23);
	
	private static $tabC=array('0'=>"A",'1'=>"B",'2'=>"C",'3'=>"D",'4'=>"E",'5'=>"F",'6'=>"G",'7'=>"H",
			                                '8'=>"I",'9'=>"J",'10'=>"K",'11'=>"L",'12'=>"M",'13'=>"N",'14'=>"O",'15'=>"P",
			                               '16'=>"Q",'17'=>"R",'18'=>"S",'19'=>"T",'20'=>"U",'21'=>"V",'22'=>"W",
			                               '23'=>"X",'24'=>"Y",'25'=>"Z");
	
	
	function __construct($name,$surname,$gender,$dataNascita,$placeBirth){
		$this->calcolaCF($name,$surname,$gender,$dataNascita,$placeBirth);
	}
	
	/*
	private function checkInArray($char,$array){
		if (in_array($char,$array))
			return true;
		else return false;
	}
	*/

	private function calcolaCF($name,$surname,$gender,$dataNascita,$placeBirth){
		
		//ELABORAZIONE COGNOME
		$surname=strtoupper($surname);
		$cont_surname=strlen($surname);
		$consonanti=array();
		$vocali=array();
		
		
		for($cont=0;$cont<$cont_surname;$cont++) {
			if (!preg_match("/[AEIOUaeiou]/",$surname[$cont])) {
				$consonanti[]=$surname[$cont];
			}
			else $vocali[]=$surname[$cont];
		}
		
		
		
		
		if((count($consonanti)+count($vocali))>=3){
			if(count($consonanti)>=3) {$str1=$consonanti[0].$consonanti[1].$consonanti[2]; }
			elseif(count($consonanti)==2){ $str1=$consonanti[0].$consonanti[1].$vocali[0]; }
			elseif(count($consonanti)==1){ $str1=$consonanti[0].$vocali[0].$vocali[1]; }
		}
		else {
			$cons= implode(",", $consonanti);
			$voc= implode(",", $vocali);
			$str1=$cons.$voc;
			while(strlen($str1)<3) {
				$str1=$str1.'x';
			}
		}
		//echo($str1." stringa cognome \n"); //comando di controllo 
		
		
		//ELABORAZIONE NOME
		$name=strtoupper($name);
		$cont_name=strlen($name);
		
		$consonanti=array();
		$vocali=array();
	    for($cont=0;$cont<$cont_name;$cont++) {
			if (!preg_match("/[AEIOUaeiou]/",$name[$cont])) {
				$consonanti[]=$name[$cont];
			}
			else $vocali[]=$name[$cont];
		}
		
		if((count($consonanti)+count($vocali))>=3){
			if(count($consonanti)==4) {$str2=$consonanti[0].$consonanti[2].$consonanti[3]; }
			elseif(count($consonanti)==3) { $str2=$consonanti[0].$consonanti[1].$consonanti[2]; }
			elseif(count($consonanti)==2){ $str2=$consonanti[0].$consonanti[1].$vocali[0]; }
			elseif(count($consonanti)==1){ $str2=$consonanti[0].$vocali[0].$vocali[1]; }
		}
		else {
			$cons= implode(",", $consonanti);
			$voc= implode(",", $vocali);
			$str2=$cons.$voc;
			while(strlen($str2)<3) {
				$str2=$str2.'x';
			}
		}
		//echo($str2." stringa nome \n"); //comando di controllo 
		
		
		//ELABORAZIONE ANNO
		$str3=$dataNascita->getanno( );
		$str3=$str3[2].$str3[3];
		//echo($str3." stringa anno \n");
		
		
		//ELABORAZIONE MESE
		$mese=$dataNascita->getmese();
		if($mese=='01') {$str4='A';}
		elseif($mese=='02') {$str4='B';}
		elseif($mese=='03') {$str4='C';}
		elseif($mese=='04') {$str4='D';}
		elseif($mese=='05') {$str4='E';}
		elseif($mese=='06') {$str4='H';}
		elseif($mese=='07') {$str4='I';}
		elseif($mese=='08') {$str4='M';}
		elseif($mese=='09') {$str4='P';}
		elseif($mese=='10') {$str4='R';}
		elseif($mese=='11') {$str4='S';}
		elseif($mese=='12') {$str4='T';}
		//echo($str4." stringa mese \n"); //comando di controllo 
		
		
		//ELABORAZIONE GIORNO
		$giorno=$dataNascita->getgiorno();
		if($gender=='male') $str5=$giorno;
		else $str5=$giorno+"40";
		//echo($str5." stringa giorno \n"); //comando di controllo 
		
		
		//ELABORAZIONE COMUNE
	    $str6=$placeBirth->ricercaISTAT($placeBirth->getComune(),$placeBirth->getProvincia());
	    //echo($str6." stringa comune \n"); //comando di controllo
		$cf=$str1.$str2.$str3.$str4.$str5.$str6;
		
		
		//ELABORAZIONE ULTIMA LETTERA
		//$str7=$this->ultimaLettera($cf);

	/*	$cf=$cf.$str7;
		
		$this->codicefiscale=$cf;
	}

	private function ultimaLettera($codFisc){*/
		$tot=0;
		$val=0;
		for	($i=0 ; $i < 15 ; $i++){
			if($i%2!=0) {
				$val= (int)CodiceFiscale::$tabA[$cf[$i]];  //int serve a fare il cast 
				$tot= $tot +$val;
			}
			else {
				$val= (int)CodiceFiscale::$tabB[$cf[$i]];
				$tot= $tot +$val;
					
			}
				
		}
		
		$tot=$tot % 26;
		$str7=CodiceFiscale::$tabC[$tot];
		//echo($str7." ultima lettera \n"); //comando di controllo 
		$this->codicefiscale=$cf.$str7;

	}

	public function toString(){
		print $this->codicefiscale."\n\n";
	}

}
