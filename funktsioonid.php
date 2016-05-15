<?php
function baasi_yhendus(){
	global $link;
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$host = "localhost";

	$link = mysqli_connect($host, $user, $pass, $db) or die("ei saanud ühendatud - ");
	mysqli_query($link, "SET CHARACTER SET UTF8")or die( $sql. " - ". mysqli_error($link));
}

function kuva_kasutajad(){
	global $link;
	$kasutajad = array();
	$sql="SELECT * FROM mario_kasutajad";
	$result=mysqli_query($link, $sql);
	while($rida = mysqli_fetch_assoc($result)){
		$kasutajad[]=$rida;
	}
	include_once("kasutajad.html");
}

function kysi_toad($ruumi_id){
	global $link;
	$toad = array();
	$sql="SELECT * FROM mario_broneering WHERE ruumi_id= ". $ruumi_id;
	$result=mysqli_query($link, $sql) or die( $sql. " - ". mysqli_error($link));
	while($rida = mysqli_fetch_assoc($result)){
		$toad[]=$rida;
	}
	return $toad;
}
function registreeri(){
	global $link;
	if(isset($_POST['username'],$_POST['password'],$_POST['password2']))
	{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $password2 = mysqli_real_escape_string($link,$_POST['password2']);
    global $link;
    $query = "SELECT * FROM mario_kasutajad WHERE kasutajanimi= '".$username."'";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) > 0)
    {
        echo "Sellenimeline kasutja juba olemas."; 
        exit;
    }
    else
    {
        if ($_POST['password']!= $_POST['password2'])
            echo("Valitud paroolid ei olnud identsed . ");
        else
        {
            $sql = "INSERT INTO mario_kasutajad(kasutajanimi, parool) VALUES('$username',sha1('$password'))";
            $result=mysqli_query($link,$sql);
			if($result){
				header ('Location:Tervitus.html');
				session_start();
				$_SESSION['kasutaja1'] = $username;}
            else
                echo "Viga " . mysqli_error();
        }
    }
    mysqli_close($link);
}	
}

function logi_sisse(){
	if (isset($_POST['username'],$_POST['password'])) {
		global $link;
		$username = mysqli_real_escape_string($link,$_POST['username']);
		$password = mysqli_real_escape_string($link,$_POST['password']);
		$sql = "SELECT kasutajanimi, parool, kasutaja_id FROM mario_kasutajad WHERE kasutajanimi = '$username' AND  parool = SHA1('$password')";
		$result = mysqli_query($link, $sql);
		$valitud_read=mysqli_num_rows($result);
		if($valitud_read){
			while($rida=mysqli_fetch_assoc($result)){
				session_start();
				$_SESSION['kasutaja1'] = $rida['kasutajanimi'];
				$_SESSION['kasutaja'] = $rida['kasutaja_id'];
				$nimi=$rida['kasutajanimi'];
				header ('Location: Toad.php');
			}
		}
		else{
			$_SESSION['error']="Vale kasutajanimi või parool!";
			}
		mysqli_close($link);	
		}
	}

function logout(){
	session_start();
	session_destroy();
	header('Location: Systeem.php');
}
?>
