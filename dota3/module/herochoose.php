<?php
$con= mysqli_connect("localhost","root","","dota2");
$heroid = mysqli_real_escape_string($con, $_POST['heroid']);
$result = mysqli_query($con,"SELECT * FROM `hero` WHERE `id` = $heroid");
if ($result->num_rows) {
	// store session data
	$row = mysqli_fetch_assoc($result);
	print '
	<div id="heroinfo">
		<div id="heroinfotext">
			<h2>'.$row['name'].'</h2><br/>
			Primary Attribute: <span class="horange">'.$row['attr'].'</span><br/>
			<table class="herotoolinfo">
			<tr><td><img src="img/asset/icon_str.png"> STRENGTH</td><td><span class="horange">'.$row['str'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_agi.png"> AGILITY</td><td><span class="horange">'.$row['agi'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_int.png"> INTELLIGENT</td><td><span class="horange">'.$row['intl'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_hp.png"> HEALTH</td><td><span class="horange">'.$row['hp'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_mp.png"> MANA</td><td><span class="horange">'.$row['mp'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_dmg.png"> DAMAGE</td><td><span class="horange">'.$row['dmg'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_amr.png"> ARMOR</td><td><span class="horange">'.$row['amr'].'</span></td></tr>
			<tr><td><img src="img/asset/icon_spd.png" > SPEED</td><td><span class="horange">'.$row['spd'].'</span></td></tr>
			</table>
		</div>
	</div>
	<script>
		$("#herostr").val("'.$row['str'].'");
		$("#heroagi").val("'.$row['agi'].'");
		$("#heroint").val("'.$row['intl'].'");
		$("#herohp").val("'.$row['hp'].'");
		$("#heromp").val("'.$row['mp'].'");
		$("#herodmg").val("'.$row['dmg'].'");
		$("#heroamr").val("'.$row['amr'].'");
		$("#herospd").val("'.$row['spd'].'");
	</script>
	';
}
?>

