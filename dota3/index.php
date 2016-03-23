<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!doctype html>
<html>
<head>



<meta charset="utf-8">
<title>Welcome</title>

<?php include 'module/header.php'; ?>
</head>

<body>
<div id="wrapper">
<div id="content">
<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main" style="height:1280px;">
<?php
$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `hero` ORDER BY ID");
while($row = mysqli_fetch_assoc($result))
  {
	echo '<a class="heroicon heroiconi" title="" heroid="'.$row['id'].'"><img src="img/hero/'.$row['filename'].'"/>';
	echo '<br/>';
	echo '<div class="heroname">'.$row['name'].'</div></a>';
  }
?>
<div id="homeselect">loading...</div>
<script>
$(function() {
homeselect = $( "#homeselect" ).dialog({
          autoOpen: false,
          height: $(window).height()*0.9,
          width: $(window).width()*0.9,
          modal: true
        }); 
$( ".heroiconi" ).on( "click", function() {
		 //$( "#homeselect" ).html("hero"+$(this).attr("heroid"));
		 $("#homeselect").html('<div id="preloader"><div id="status" style="height:100%;"><table style="height:60%;width:100%"><tr><td style="color:white; text-align:center;"><img src="img/asset/ajax-loader.gif"/><br/>Loading Assets...</td></tr></table></div></div>');
          homeselect.dialog( "open" );
        });
 $( ".heroiconi" ).on( "click", function() {
          //$( "#choosehero" ).html($(this).html());
		  //alert($(this).html());
		  //$( "#selheroid").val($(this).attr( "heroid" ));
          $.post( 'module/top5.php' , { heroid: $(this).attr( "heroid" )})
                .done(function( data ) {
                    $("#homeselect").html(data);
                });
          //homeselect.dialog( "close" );
});
});
</script>
</div>
</div>
</div>
</body>
</html>