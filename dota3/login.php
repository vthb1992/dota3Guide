<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!doctype html>
<html>
<head>


<?php include 'module/header.php'; ?>

<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<?php
if((isset($_POST['nickname']) and $_POST['nickname']!="")and(isset($_POST['password']) and $_POST['password']!="")){
//do login
include 'module/db.php';
$nickname = mysqli_real_escape_string($con,$_POST['nickname']);
$nickname = addslashes(htmlentities($nickname));

$password = mysqli_real_escape_string($con,$_POST['password']);
$result = mysqli_query($con, "SELECT * FROM users WHERE username='$nickname' AND password='$password'");
if ($result->num_rows) {
	$row = mysqli_fetch_assoc($result);
	// store session data

	$_SESSION['user'] = $row['username'];
	$_SESSION['userid'] = $row['id'];	
	$_SESSION['postcount'] = $row['postcount'];
	
	$login = "correct";
	}else{
	$login = "error";
	}}
?>
<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main">


<?php 
if(isset($_POST['nickname'])){
	$nickname = $_POST['nickname'];
	$nickname = htmlentities($nickname);
}else{ $nickname = ""; }

$form = '
<form id="loginform" method="post" action="login.php">
<div>Nickname:</div> <input name="nickname" type="text" id="nickname" required value="'.$nickname.'"/><br/>
<div>Password: </div> <input name="password" type="password" id="password" required/><br/>
<input type="submit"/>
</form>';

if((isset($_POST['nickname']) and $_POST['nickname']!="")and(isset($_POST['password']) and $_POST['password']!="")){
	if ($login=="correct") {
	echo '<meta http-equiv="refresh" content="3;url=index.php" />';
	echo '<div>Redirecting in 3 seconds. Click <a href="index.php">here</a> to go back manually.</div>';
	}
	if ($login=="error") {
		//wrong login info
		echo $form;
		echo '<script>alert("Please check login info.")</script>';
	}
}else{
	echo $form;
}

?>
</div>


</div>
</div>
</body>
</html>