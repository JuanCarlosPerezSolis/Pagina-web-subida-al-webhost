<?php
class links3{
	public $nombre;

	public $Nombrelink1;
	public $link1;
	public $Nombrelink2;
	public $link2;
	public $Nombrelink3;
	public $link3;

public function links3($Nombrelink1,$link1,$Nombrelink2,$link2,$Nombrelink3,$link3){
		echo "<nav>";
		echo "<ul>";
		echo "<li><a href=", $this->link1 = $link1,">",$this->Nombrelink1 =$Nombrelink1;
		echo "</a> </li>";
		echo "<li><a href=", $this->link2 = $link2,">",$this->Nombrelink2 =$Nombrelink2;	
		echo "</a> </li>";
		echo "<li><a href=", $this->link3 = $link3,">",$this->Nombrelink3 =$Nombrelink3;	
		echo "</a> </li>";

		echo "</ul>";
		echo "</nav>";
		echo "<br>";
		}
	}