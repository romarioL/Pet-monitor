<?php 

namespace App;

use App\IPet;

class Pet implements IPet {
	
	private $nome;
	
	private $latitude;
	
	private $longitude;
	
	public function __construct($nome, $latitude, $longitude) 
	{
		$this->nome = $nome;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
	}
	
	public function getNome() 
	{
		return $this->nome;
	}
	
	public function setNome($nome) 
	{
		$this->nome = $nome;
	}
	
	public function getLatitude() 
	{
		return $this->latitude;
	}
	
	public function setLatitude($latitude) 
	{
		$this->latitude = $latitude;
	}
	
	public function getLongitude() 
	{
		return $this->longitude;
	}
	
	public function setLongitude($longitude) 
	{
		$this->longitude = $longitude;
	}
}