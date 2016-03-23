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
<title>Logout</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<?php
if((isset($_POST['nickname']) and $_POST['nickname']!="")and(isset($_POST['password']) and $_POST['password']!="")){
//do login
include 'module/db.php';
$nickname = mysqli_real_escape_string($con,$_POST['nickname']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$result = mysqli_query($con, "SELECT * FROM users WHERE username='$nickname' AND password='$password'");
if ($result->num_rows) {
	$row = mysqli_fetch_assoc($result);
	// store session data

	$_SESSION['user']=$row['username'];
	$_SESSION['userid']=$row['id'];	
	$_SESSION['postcount']=$row['postcount'];
	
	echo '<script>alert("correct.")</script>';
	$login = "correct";
	}else{
	$login = "error";
	}}
?>
<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main">

Logging out...<br/>
<?php
echo '<meta http-equiv="refresh" content="3;url=index.php" />';
echo '<div>Redirecting in 3 seconds. Click <a href="#">here</a> to go back manually.</div>';
session_destroy();
?>
</div>


</div>
</div>
</body>
</html>