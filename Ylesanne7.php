<?php
$sona = $_POST["name"]; //võtab sõna Peegelpilt.html faili formist ja tagastab ümberpööratud sõna
$peegeldus="";
function peegelpilt(){
	global $sona, $peegeldus; 
	for ($i = 1; $i<=strlen($sona); $i++){
		$peegeldus.=$sona[strlen($sona)-$i];	
	}echo "Peegelpildis sõna on ".$peegeldus;
}
peegelpilt();
?>