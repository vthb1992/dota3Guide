<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

print'
<div id="loginbar">
<ul>';
if(isset($_SESSION['user'])){
	echo '<li>Hi '.stripslashes($_SESSION['user']).', <a href="logout.php">Log Out</a></li>';
}else{
	echo '<li><a href="register.php">Register</a></li>
	<li><a href="login.php">Login</a></li>';
}
print'
</ul>
</div>';

?>