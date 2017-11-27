<?php
class encabezado{
	public $nombre;

	public $urlLogo;

public function encabezado($nombre,$urlLogo){
		
		echo "<header>";
		echo "<img src= ", $this->urlLogo = $urlLogo, ">";
		echo "<h1>",$this->nombre = $nombre,"</h1>";
		echo "</header>";
		}
	}