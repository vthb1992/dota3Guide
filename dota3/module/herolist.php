<div id="herocontainer" title="Choose a Hero">
<?php
/*
$dir    = 'img/hero';
$files1 = scandir($dir);
$heroid = "0";
foreach($files1 as $hero){
	if($hero=='..' || $hero == '.'){
	}else{
	$heroid ++;
	$imgpath = $hero;
	$hero = str_replace('-',' ',$hero);
	$hname = ucwords(str_replace('.png','',$hero));
	echo '<a class="heroicon heroiconi" title="" heroid="'.$heroid.'"><img src="img/hero/'.$imgpath.'"/>';
	echo '<br/>';
	echo '<div class="heroname">'.$hname.'</div></a>';
	}
}*/
if(!isset($_POST['sorthero'])){
	$sorthero = 'id ASC';
	};
$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `hero` ORDER BY ".$sorthero);
while($row = mysqli_fetch_assoc($result))
  {
	echo '<a class="heroicon heroiconi" title="" heroid="'.$row['id'].'" herotooltip="#herotooltip'.$row['id'].'"><img src="img/hero/'.$row['filename'].'"/>';
	echo '<br/>';
	echo '<div class="heroname">'.$row['name'].'</div></a>';
  }
?>
</div>