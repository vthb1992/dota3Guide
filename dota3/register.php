<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!doctype html>
<html>
<head>


<?php include 'module/header.php'; ?>

<meta charset="utf-8">
<title>Register</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main">
Join the DOTA2 Build Community!<br/>
Already a member? Click here to log in.

<?php 
if(isset($_POST['nickname'])){
	$nickname = $_POST['nickname'];
}else{ $nickname = ""; }

$form = '
<form id="registerform" method="post" action="register.php">
<div>Nickname:</div> <input name="nickname" type="text" id="nickname" required"/><br/>
<div>Password: </div> <input name="password" type="password" id="password" required/><br/>
<div>Confirm Password: </div> <input name="cpassword" type="password" id="cpassword" required/><br/>
<input type="checkbox" required/>
I have read and agree to the user agreement. View our privacy policy.<br/>
<input type="submit"/>
</form>';

if(isset($_POST['cpassword']) and $_POST['cpassword']!=""){
//if user clicked submit.
	include 'module/db.php';
	$nickname = mysqli_real_escape_string($con,$_POST['nickname']);
	$nickname = addslashes(htmlentities($nickname));
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE username='$nickname'");
	if($result->num_rows){
		echo $form;
		echo '<script>alert("Username already registered")</script>';
	}else{
		if($_POST['password']===$_POST['cpassword']){
		//do registeration
		
		$result = mysqli_query($con, "INSERT INTO users VALUES(NULL, '$nickname', '$password', 0)");
		echo '<meta http-equiv="refresh" content="3;url=index.php" />';
		echo '<div>Registration Success!! Redirecting in 3 seconds. Click <a href="#">here</a> to go back manually.</div>';
		}else{
		//if password not same
		
		echo $form;
		echo '<script>alert("Password Mismatch")</script>';
		}
	}
}else{
//if new arrival on registeration form.
echo $form;
}



?>
</div>


</div>
</div>
</body>
</html>