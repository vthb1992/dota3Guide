<?php
$con= mysqli_connect("localhost","root","","dota2");
//$heroid = mysqli_real_escape_string($con, $_POST['heroid']);
//$result = mysqli_query($con,"SELECT * FROM `hero` WHERE `id` = $heroid");
$result = mysqli_query($con,"SELECT * FROM `hero`");
while($row = mysqli_fetch_assoc($result)){
	// store session data
	print '
	<div class="herotooltip" id="herotooltip'.$row['id'].'">
		<img src="img/hero/'.$row['filename'].'" class="heroimg"/>
		<div class="herotooltiptext">
			<h2>'.$row['name'].'</h2><br/>
			Primary Attribute: <span class="horange">'.$row['attr'].'</span><br/>
<table class="herotoolinfo">
<tr><td><img src="img/asset/icon_str.png"> STRENGTH</td><td><span class="horange">'.$row['str'].'</span></td></tr>
<tr><td><img src="img/asset/icon_agi.png"> AGILITY</td><td><span class="horange">'.$row['agi'].'</span></td></tr>
<tr><td><img src="img/asset/icon_int.png"> INTELLIGENCE</td><td><span class="horange">'.$row['intl'].'</span></td></tr>
<tr><td><img src="img/asset/icon_hp.png"> HEALTH</td><td><span class="horange">'.$row['hp'].'</span></td></tr>
<tr><td><img src="img/asset/icon_mp.png"> MANA</td><td><span class="horange">'.$row['mp'].'</span></td></tr>
<tr><td><img src="img/asset/icon_dmg.png"> DAMAGE</td><td><span class="horange">'.$row['dmg'].'</span></td></tr>
<tr><td><img src="img/asset/icon_amr.png"> ARMOR</td><td><span class="horange">'.$row['amr'].'</span></td></tr>
<tr><td><img src="img/asset/icon_spd.png" > SPEED</td><td><span class="horange">'.$row['spd'].'</span></td></tr>
</table>
		</div>
	</div>
	';
}
?>
