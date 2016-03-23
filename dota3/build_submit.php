<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
if(isset($_POST['bbcode_field'])){ $bbcode_field = addslashes($_POST['bbcode_field']); }else{ $bbcode_field = ""; }
if(isset($_POST['selheroid'])){ $selheroid = (int) $_POST['selheroid']; }else{ $selheroid = 0; }
if(isset($_POST['item1id'])){ $item1id = (int) $_POST['item1id']; }else{ $item1id = 0; }
if(isset($_POST['item2id'])){ $item2id = (int) $_POST['item2id']; }else{ $item2id = 0; }
if(isset($_POST['item3id'])){ $item3id = (int) $_POST['item3id']; }else{ $item3id = 0; }
if(isset($_POST['item4id'])){ $item4id = (int) $_POST['item4id']; }else{ $item4id = 0; }
if(isset($_POST['item5id'])){ $item5id = (int) $_POST['item5id']; }else{ $item5id = 0; }
if(isset($_POST['item6id'])){ $item6id = (int) $_POST['item6id']; }else{ $item6id = 0; }
if(isset($_POST['item7id'])){ $item7id = (int) $_POST['item7id']; }else{ $item7id = 0; }
if(isset($_POST['item8id'])){ $item8id = (int) $_POST['item8id']; }else{ $item8id = 0; }
if(isset($_POST['item9id'])){ $item9id = (int) $_POST['item9id']; }else{ $item9id = 0; }
if(isset($_POST['item10id'])){ $item10id = (int) $_POST['item10id']; }else{ $item10id = 0; }
if(isset($_POST['item11id'])){ $item11id = (int) $_POST['item11id']; }else{ $item11id = 0; }
if(isset($_POST['item12id'])){ $item12id = (int) $_POST['item12id']; }else{ $item12id = 0; }
if(isset($_POST['item13id'])){ $item13id = (int) $_POST['item13id']; }else{ $item13id = 0; }
if(isset($_POST['item14id'])){ $item14id = (int) $_POST['item14id']; }else{ $item14id = 0; }
if(isset($_POST['item15id'])){ $item15id = (int) $_POST['item15id']; }else{ $item15id = 0; }
if(isset($_POST['item16id'])){ $item16id = (int) $_POST['item16id']; }else{ $item16id = 0; }
if(isset($_POST['item17id'])){ $item17id = (int) $_POST['item17id']; }else{ $item17id = 0; }
if(isset($_POST['item18id'])){ $item18id = (int) $_POST['item18id']; }else{ $item18id = 0; }
if(isset($_POST['guidename'])){ $guidename = $_POST['guidename']; if($guidename==""){$guidename = "(Unnamed Guide)";}}

//echo addslashes($bbcode_field)	;
$con= mysqli_connect("localhost","root","","dota2");
//INSERT INTO `dota2`.`guides` (`id`, `heroid`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `item14`, `item15`, `item16`, `item17`, `item18`, `guidetext`, `guidename`, `time`) VALUES (NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', CURRENT_TIMESTAMP);

//INSERT INTO `dota2`.`guides` (`id`, `heroid`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `item14`, `item15`, `item16`, `item17`, `item18`, `guidetext`, `guidename`, `time`) VALUES (NULL, $selheroid, $item1id, $item2id, $item3id, $item4id, $item5id, $item6id, $item7id, $item8id, $item9id, $item10id, $item11id, $item12id, $item13id, $item14id, $item15id, $item16id, $item17id, $item18id, '$bbcode_field', '$guidename', CURRENT_TIMESTAMP);

//$result = mysqli_query($con, "INSERT INTO guides VALUES(NULL, $selheroid, $item1id, $item2id, $item3id, $item4id, $item5id, $item6id, $item7id, $item8id, $item9id, $item10id, $item11id, $item12id, $item13id, $item14id, $item15id, $item16id, $item17id, $item18id, '$bbcode_field', '$guidename', CURRENT_TIMESTAMP)");


?>





<!doctype html>
<html>
<head>


<?php include 'module/header.php'; ?>

<meta charset="utf-8">
<title>Build Summitted</title>
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
//$name = addslashes(htmlentities($_SESSION['user']));
$name = $_SESSION['user'];
$result = mysqli_query($con, "INSERT INTO `dota2`.`guides` 
(`id`, `heroid`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `item9`, `item10`, `item11`, `item12`, `item13`, `item14`, `item15`, `item16`, `item17`, `item18`, `guidetext`, `guidename`, `time`, `creatorid`, `creatorname`) VALUES 
(NULL, $selheroid, $item1id, $item2id, $item3id, $item4id, $item5id, $item6id, $item7id, $item8id, $item9id, $item10id, $item11id, $item12id, $item13id, $item14id, $item15id, $item16id, $item17id, $item18id, '$bbcode_field', '$guidename', CURRENT_TIMESTAMP, $userid, '$name')");

echo '<meta http-equiv="refresh" content="3;url=build.php" />';
echo '<div>Guide submitted, Redirecting in 3 seconds. Click <a href="build.php">here</a> to go back manually.</div>';
}else{
echo "Please log in to submit a guide.";
}

?>
</div>


</div>
</div>
</body>
</html>