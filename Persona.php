<?php

//namespace ENTITY;
//use ENTITY\Luogo;
require_once 'Luogo.php';
require_once 'CodiceFiscale.php';
require_once 'Data.php';


class Persona{
	
	private $cognome,$nome,$sesso,$dataNascita,$comune,$provincia,$luogoNascita,$codfisc;
	
	function __construct($cognome,$nome,$anno,$mese,$giorno,$comune,$provincia,$sesso){
		$this->cognome=$cognome;
		$this->nome=$nome;
		$this->dataNascita=new Data($anno,$mese,$giorno);
		$this->luogoNascita=new Luogo($comune,$provincia);
		$this->sesso=$sesso;
		$this->codfisc=new CodiceFiscale($this->nome, $this->cognome, $this->sesso, $this->dataNascita, $this->luogoNascita);
		}
	
		public function getSesso(){
			return $this->sesso;
		}
		
		
		public function getDataNascita(){
			return $this->dataNascita;
		}
	
		
		public function getComuneNascita(){
			return $this->ComuneNascita;
		}
		
		
		public function getCodiceFiscale(){
			return $this->codfisc->getCodFisc();
		}
	
		public function toString(){
			print "Nome: ".$this->nome." ".$this->cognome."\n";
			print "Sesso: ".$this->sesso."\n";
			print "Data di nascita: ".$this->dataNascita->getgiorno()."-".$this->dataNascita->getmese()."-".$this->dataNascita->getanno()."\n";
			print "Comune di nascita: ".$this->luogoNascita->getComune()."(".$this->luogoNascita->getProvincia().")";
			print "\n\n";
			$this->codfisc->toString();
		}
	
}