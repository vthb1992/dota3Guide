<?php
$con= mysqli_connect("localhost","root","","dota2");
//$itemid = mysqli_real_escape_string($con, $_POST['itemid']);
//$result = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = $itemid");
$result = mysqli_query($con,"SELECT * FROM `item`");
while($row = mysqli_fetch_assoc($result)){
	print '
	<div id="itemtooltip'.$row['id'].'">
		<img src="img/item/'.$row['filename'].'"/>
		<div class="herotooltiptext">
			<h2>'.$row['name'].'</h2><br/>
			Item Type: <span class="horange">'.$row['itemtype'].'</span><br/>
			Cost: <span class="horange">'.$row['cost'].'</span><br/>
<table class="itemtoolinfo">

<tr><!--<td><font style="color:white">Info</font></td>--><td><span colspan="2" class="horange"><br/>'.$row['info'].'</span></td></tr>
</table>
		</div>
	</div>
	';
}
?>
<!--
<tr><td><img src="img/asset/icon_str.png"> STRENGTH</td><td><span class="horange">'.$row['str'].'</span></td></tr>
<tr><td><img src="img/asset/icon_agi.png"> AGILITY</td><td><span class="horange">'.$row['agi'].'</span></td></tr>
<tr><td><img src="img/asset/icon_int.png"> INTELLIGENCE</td><td><span class="horange">'.$row['intl'].'</span></td></tr>
<tr><td><img src="img/asset/icon_hp.png"> HEALTH</td><td><span class="horange">'.$row['hp'].'</span></td></tr>
<tr><td><img src="img/asset/icon_mp.png"> MANA</td><td><span class="horange">'.$row['mp'].'</span></td></tr>
<tr><td><img src="img/asset/icon_dmg.png"> DAMAGE</td><td><span class="horange">'.$row['dmg'].'</span></td></tr>
<tr><td><img src="img/asset/icon_amr.png"> ARMOR</td><td><span class="horange">'.$row['amr'].'</span></td></tr>
<tr><td><img src="img/asset/icon_spd.png" > SPEED</td><td><span class="horange">'.$row['spd'].'</span></td></tr>
-->