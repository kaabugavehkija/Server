<?php
$sona = $_POST["name"]; //v�tab s�na Peegelpilt.html faili formist ja tagastab �mberp��ratud s�na
$peegeldus="";
function peegelpilt(){
	global $sona, $peegeldus; 
	for ($i = 1; $i<=strlen($sona); $i++){
		$peegeldus.=$sona[strlen($sona)-$i];	
	}echo "Peegelpildis s�na on ".$peegeldus;
}
peegelpilt();
?>