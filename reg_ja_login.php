<?php
function registreeri(){
	if(isset($_POST['username'],$_POST['password'],$_POST['password2'])){
		global $link;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password'];
		$stmt = mysqli_prepare($link, "SELECT kasutajanimi FROM mario_kasutajad WHERE kasutajanimi = ?");
		$bind = mysqli_stmt_bind_param($stmt,"s", $username);
		$exce = mysqli_stmt_execute($stmt);//true v false
		$bind_r = mysqli_stmt_bind_result($stmt,$r['kasutajanimi']);
		if(mysqli_stmt_fetch($stmt)){
			echo "Sellenimeline kasutaja juba olemas."; 
			exit;
		}else{
			if ($_POST['password']!= $_POST['password2'])
				echo("Valitud paroolid ei olnud identsed . ");
			else{
				$stmt=mysqli_prepare($link,"INSERT INTO mario_kasutajad(kasutajanimi, parool) VALUES(?,SHA1(?))");
				$bind = mysqli_stmt_bind_param($stmt,"ss", $username, $password);
				$exce = mysqli_stmt_execute($stmt);//true v false
				if($exce){
					header ('Location:Tervitus.html');
					}else{
				echo "Viga ";
			}
		}mysqli_close($link);
		}	
	}
}

function logi_sisse(){
	if (isset($_POST['username'],$_POST['password'])) {
		global $link;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$stmt = mysqli_prepare($link, "SELECT kasutajanimi, parool, kasutaja_id FROM mario_kasutajad WHERE kasutajanimi = ? AND  parool = SHA1(?)");
		$bind = mysqli_stmt_bind_param($stmt,"ss", $username, $password);
		$exce = mysqli_stmt_execute($stmt);//true v false
		$bind_r = mysqli_stmt_bind_result($stmt,$r['kasutajanimi'], $r['parool'],$r['kasutaja_id']);
		var_dump(mysqli_stmt_fetch($stmt));

		if($exce){
			session_start();
			session_regenerate_id();
			$_SESSION['kasutaja1'] = $r['kasutajanimi'];
			$_SESSION['kasutaja'] = $r['kasutaja_id'];
			$nimi=$r['kasutajanimi'];
			header ('Location: Toad.php');
			exit();
		}else{
			echo "Vale kasutajanimi või parool!";
			}
		mysqli_close($link);	
		}
}
?>