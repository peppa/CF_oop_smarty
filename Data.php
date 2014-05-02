<?php
//namespace ENTITY;

class Data{
	
	private $anno,$mese,$giorno;
	
	function __construct($year,$month,$day){
		$this->anno=$year;
		$this->mese=$month;
		$this->giorno=$day;
	}
	
	
	public function getgiorno(){
		return $this->giorno;
	}
	
	public function getmese(){
		return $this->mese;
	}
	
	public function getanno(){
		return $this->anno;
	}
	
	
	
	
}