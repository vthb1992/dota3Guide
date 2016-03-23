<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>



<!doctype html>
<html>
<head>


<?php include 'module/header.php'; ?>

<meta charset="utf-8">
<title>Guide Deleted</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main">


<?php 
if(isset($_SESSION['userid'])){
	$userid = $_SESSION['userid'];

	$guideid = $_GET["guideid"];
	$con= mysqli_connect("localhost","root","","dota2");
	$result1 = mysqli_query($con,"SELECT * FROM `guides` WHERE `id` = $guideid");
	$row1 = mysqli_fetch_assoc($result1);

	if(($userid == 1)||($userid == $row1['creatorid'])){

	$result2 = mysqli_query($con,"DELETE FROM `guides` WHERE `id` = $guideid");
	$result3 = mysqli_query($con,"DELETE FROM `vote` WHERE `guideid` = $guideid");
	echo '<meta http-equiv="refresh" content="3;url=build.php" />';
	echo '<div>Guide deleted, Redirecting in 3 seconds. Click <a href="build.php">here</a> to go back manually.</div>';
	}else{
		echo "Unable to perform action, You can only delete your own guide.";
		echo '<div>Click <a href="javascript:history.back()">here</a> to go back.</div>';
	}
}else{

		echo "Unable to perform action, You can only delete your own guide.";
		echo '<div>Click <a href="javascript:history.back()">here</a> to go back.</div>';
}
?>
</div>


</div>
</div>
</body>
</html>