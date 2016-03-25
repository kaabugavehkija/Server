<?php
$tekst="";
$suurus = "";
$varv = "";
$taust = "";
$piirjoone_varv ="";
$radius="";
if (isset($_GET['suurus'],$_GET['tekst'],$_GET['varv'],$_GET['taust'],$_GET['piirjoone_varv'],$_GET['radius'])){
	$tekst=htmlspecialchars($_GET['tekst']);
	$suurus=htmlspecialchars($_GET['suurus']);
	$varv=htmlspecialchars($_GET['varv']);
	$taust=htmlspecialchars($_GET['taust']);
	$piirjoone_varv=htmlspecialchars($_GET['piirjoone_varv']);
	$radius=htmlspecialchars($_GET['radius']);
}
?>

<!DOCTYPE HTML> 
<html>
<head>
	<meta charset="utf-8" />
    <title>Ylesanne8</title>
	<style>
	#valik {
		width: 27%;
		height: 150px;
		padding: 20px;
		border: 5px solid <?php echo $piirjoone_varv ?>;
		border-radius: <?php echo $radius."%" ?>;
		font-size: <?php echo $suurus."px" ?>;
		color: <?php echo $varv ?>;
		background-color: <?php echo $taust ?>;
		
	}
	#yks{
		width: 30%;
		margin-left: 0;
		border: 2px dashed;
	}
	hr{
		width: 30%;
		margin-left: 0;
		margin-left: 2px;
	}
	p{
		font-style: italic;
		display:inline;
		font-size: 20px;
	}
	#valik1{
		border: 2px solid grey;
		border-right: none;
		width: 30%;
		padding-bottom: 5px;
	}
	.select{
		margin-left: 10px;
		width: 120px;
	}
	input{
		margin-bottom: 5px;
	}
	textarea{
		width:30%;
	}
	</style>

<head>
<body>
<div id="valik"><?php echo $tekst; ?></div>
<hr id="yks">

<form action="Ylesanne8.php" method="GET">
	<textarea rows="7" cols="50" name="tekst" placeholder="muudetav tekst"></textarea><hr>
	<input type="number" name="suurus" placeholder="teksti suurus px"/><br>
	<input type="number" name="radius" placeholder="border-radius %"/>

	<!--teksti värvi combobox-->
	<!-- http://stackoverflow.com/questions/1274813/changing-the-colour-of-a-dropdown-list-when-closed-->
	<div id="valik1">
	<p class="select" style="font-weight:bold">Värvivalik<p><br>
	<select  onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" class="select" name="varv">
		<option value="">Teksti värv</option>
		<option value="#000000" style="background-color: Black;color: #FFFFFF;">Black</option>
		<option value="#808080" style="background-color: Gray;">Gray</option>
		<option value="#A9A9A9" style="background-color: DarkGray;">DarkGray</option>
		<option value="#D3D3D3" style="background-color: LightGrey;">LightGray</option>
		<option value="#FFFFFF" style="background-color: White;">White</option>
		<option value="#7FFFD4" style="background-color: Aquamarine;">Aquamarine</option>
		<option value="#0000FF" style="background-color: Blue;">Blue</option>
		<option value="#000080" style="background-color: Navy;color: #FFFFFF;">Navy</option>
		<option value="#800080" style="background-color: Purple;color: #FFFFFF;">Purple</option>
		<option value="#FF1493" style="background-color: DeepPink;">DeepPink</option>
		<option value="#EE82EE" style="background-color: Violet;">Violet</option>
		<option value="#FFC0CB" style="background-color: Pink;">Pink</option>
		<option value="#006400" style="background-color: DarkGreen;color: #FFFFFF;">DarkGreen</option>
		<option value="#008000" style="background-color: Green;color: #FFFFFF;">Green</option>
		<option value="#9ACD32" style="background-color: YellowGreen;">YellowGreen</option>
		<option value="#FFFF00" style="background-color: Yellow;">Yellow</option>
		<option value="#FFA500" style="background-color: Orange;">Orange</option>
		<option value="#FF0000" style="background-color: Red;">Red</option>
		<option value="#A52A2A" style="background-color: Brown;">Brown</option>
		<option value="#DEB887" style="background-color: BurlyWood;">BurlyWood</option>
		<option value="#F5F5DC" style="background-color: Beige;">Beige</option>
	</select>
	Tekst
	<br>
	<!--taustavärvi combobox-->
	<select  onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" class="select" name="taust">
		<option value="">Taustavärv</option>
		<option value="#000000" style="background-color: Black;color: #FFFFFF;">Black</option>
		<option value="#808080" style="background-color: Gray;">Gray</option>
		<option value="#A9A9A9" style="background-color: DarkGray;">DarkGray</option>
		<option value="#D3D3D3" style="background-color: LightGrey;">LightGray</option>
		<option value="#FFFFFF" style="background-color: White;">White</option>
		<option value="#7FFFD4" style="background-color: Aquamarine;">Aquamarine</option>
		<option value="#0000FF" style="background-color: Blue;">Blue</option>
		<option value="#000080" style="background-color: Navy;color: #FFFFFF;">Navy</option>
		<option value="#800080" style="background-color: Purple;color: #FFFFFF;">Purple</option>
		<option value="#FF1493" style="background-color: DeepPink;">DeepPink</option>
		<option value="#EE82EE" style="background-color: Violet;">Violet</option>
		<option value="#FFC0CB" style="background-color: Pink;">Pink</option>
		<option value="#006400" style="background-color: DarkGreen;color: #FFFFFF;">DarkGreen</option>
		<option value="#008000" style="background-color: Green;color: #FFFFFF;">Green</option>
		<option value="#9ACD32" style="background-color: YellowGreen;">YellowGreen</option>
		<option value="#FFFF00" style="background-color: Yellow;">Yellow</option>
		<option value="#FFA500" style="background-color: Orange;">Orange</option>
		<option value="#FF0000" style="background-color: Red;">Red</option>
		<option value="#A52A2A" style="background-color: Brown;">Brown</option>
		<option value="#DEB887" style="background-color: BurlyWood;">BurlyWood</option>
		<option value="#F5F5DC" style="background-color: Beige;">Beige</option>
	</select>
	Taust
	<br>
	<select  onchange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" class="select" name="piirjoone varv">
		<option value="">Piirjoone värv</option>
		<option value="#000000" style="background-color: Black;color: #FFFFFF;">Black</option>
		<option value="#808080" style="background-color: Gray;">Gray</option>
		<option value="#A9A9A9" style="background-color: DarkGray;">DarkGray</option>
		<option value="#D3D3D3" style="background-color: LightGrey;">LightGray</option>
		<option value="#FFFFFF" style="background-color: White;">White</option>
		<option value="#7FFFD4" style="background-color: Aquamarine;">Aquamarine</option>
		<option value="#0000FF" style="background-color: Blue;">Blue</option>
		<option value="#000080" style="background-color: Navy;color: #FFFFFF;">Navy</option>
		<option value="#800080" style="background-color: Purple;color: #FFFFFF;">Purple</option>
		<option value="#FF1493" style="background-color: DeepPink;">DeepPink</option>
		<option value="#EE82EE" style="background-color: Violet;">Violet</option>
		<option value="#FFC0CB" style="background-color: Pink;">Pink</option>
		<option value="#006400" style="background-color: DarkGreen;color: #FFFFFF;">DarkGreen</option>
		<option value="#008000" style="background-color: Green;color: #FFFFFF;">Green</option>
		<option value="#9ACD32" style="background-color: YellowGreen;">YellowGreen</option>
		<option value="#FFFF00" style="background-color: Yellow;">Yellow</option>
		<option value="#FFA500" style="background-color: Orange;">Orange</option>
		<option value="#FF0000" style="background-color: Red;">Red</option>
		<option value="#A52A2A" style="background-color: Brown;">Brown</option>
		<option value="#DEB887" style="background-color: BurlyWood;">BurlyWood</option>
		<option value="#F5F5DC" style="background-color: Beige;">Beige</option>
	</select>
	Piirjoon
	<br>
	</div>
	<br>
	<input type="submit" value="Vaata"/>
</form>
</body>
</html>