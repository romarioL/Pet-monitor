<?php 

namespace App;

interface IPet {
	public function __construct($nome,$latitude, $longitude);
	public  function getNome();
	public function setNome($nome);
	public function getLatitude();
	public function setLatitude($latitude);
	public function getLongitude();
	public function setLongitude($longitude);
}