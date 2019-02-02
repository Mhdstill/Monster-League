<?php

class Monster {
	
	public $id;
	public $name;
	public $strength;
	public $life;
	public $type;
	
	
	function __construct($id, $name, $strength, $life, $type){
		$this->id=$id;
		$this->name=$name;
		$this->strength=$strength;
		$this->life=$life;
		$this->type=$type;

	}
	
	function getId(){
		return $this->id;
	}
	
	function getName(){
		return $this->name;
	}
	
	function setName($name){
		$this->name=$name;
	}
	
	function getStrength(){
		return $this->strength;
	}
	
	function setStrength($strength){
		$this->strength=$strength;
	}
	
	function getLife(){
		return $this->life;
	}
	
	function setLife($life){
		$this->life=$life;
	}
	
	function getTypee(){
		return $this->type;
	}
	
	function setType($type){
		$this->type=$type;
	}
}