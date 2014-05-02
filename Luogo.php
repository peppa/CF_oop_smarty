<?php
//namespace ENTITY;

class Luogo{
	
	private $comune;
	private $provincia;
	private $ISTAT;
	
	function __construct($nomeComune,$nomeProvincia){
		$this->comune=$nomeComune;
		$this->provincia=$nomeProvincia;
	}
	
	public function ricercaISTAT($comune,$provincia){
		$file_comuni = fopen (__DIR__."/codici_comuni_italiani.txt", "r");
		$i=0;
		$comune=strtoupper($comune);
		while(!feof($file_comuni)){
			$i++;
			$buffer = fgets($file_comuni);   // legge una riga intera da file
			list($codiceF,$comuneF,$provinciaF)=explode(";", $buffer);  // divide la stringa in tre rispetto al separatore ";" usato nel file
			if ($comuneF==$comune&&$provinciaF[0]==$provincia[0]&&$provinciaF[1]==$provincia[1])  return $codiceF;
			}
		fclose ($file_comuni);
	}
	
    public function getComune(){
		return $this->comune;
	}
	
	public function getProvincia(){
		return $this->provincia;
	}
	
	
	
	
}