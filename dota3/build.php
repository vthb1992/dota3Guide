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
<title>Builds & Guides</title>

</head>

<body>
<div id="wrapper" style="min-height:900px;">



<div id="preloader">
  <div id="status" style="height:100%;"><table style="height:60%;width:100%"><tr><td style="color:white; text-align:center;"><img src="img/asset/ajax-loader.gif"/><br/>Loading Assets...</td></tr></table></div>
</div>
<script>
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(0).fadeOut("slow");
})
</script>

<div id="content">

<?php include 'module/loginbar.php'; ?>
<?php include 'module/nav.php'; ?>
<div id="main">

<?php
	if(isset($_SESSION["userid"])){
	print'
	<div id="newbuild">
		<a href="build_new.php" class="newbuild">
		New Build <i class="fa fa-plus-circle fa-1x"></i></a>
	</div>
	<div><br/></div>
	';
	}


$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `hero`");
$optionlist = "";
while($row = mysqli_fetch_assoc($result))
  {
	$optionlist .='<option value="'.$row['id'].'" data-style="background-image: url(&apos;img/hero/'.$row['filename'].'&apos;);">'.$row['name'].'</option>';
  }

echo'
<form action="#" id="buildsorter">
<select name="limithero" id="limithero" class="overflow">
  <option value="*" data-class="avatar" data-style="background-image: url(&apos;#&apos;);">&nbsp;&nbsp;--- All Hero ---</option>
  '.$optionlist.'
</select>

<select name="sortmethod" id="sortmethod">
  <option value="time">Time Posted</option>
  <option value="guidescore">Rating</option>
  <!--
  <option value="alphabetical">Alphabetical</option>
  <option value="rating">Vote Count</option>-->
</select>

<select name="sortstyle" id="sortstyle">
  <option value="desc">Descending</option>
  <option value="asc">Ascending</option>
</select>

<span style="display: inline-block;overflow: hidden;">
<button id="buildsorterbtn">Filter</button>
</span>
</form>


<script>
$(function() {
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
      _renderItem: function( ul, item ) {
        var li = $( "<li>", { text: item.label } );
 
        if ( item.disabled ) {
          li.addClass( "ui-state-disabled" );
        }
 
        $( "<span>", {
          style: item.element.attr( "data-style" ),
          "class": "ui-icon " + item.element.attr( "data-class" )
        })
          .appendTo( li );
 
        return li.appendTo( ul );
      }
    }); 
	
	$( "#limithero" )
	  .iconselectmenu()
	  .iconselectmenu( "menuWidget")
		.addClass( "ui-menu-icons avatar overflow" );
	
	
	$( "#sortmethod" ).selectmenu();
	$( "#sortstyle" ).selectmenu();
	$( "#buildsorterbtn" ).button({
      icons: {
        secondary: "ui-icon-search"
      }
    });
	
	
	
	
	});
</script>
';

if(isset($_GET['limithero'])){
	switch ($_GET['limithero']) {
			
		case '*':
			$limithero = '';
			break;
		
		default:
			$limithero = "WHERE `heroid` =".intval($_GET['limithero']);
			break;
	}
}else{
$limithero = '';
}



if(isset($_GET['sortmethod'])){
	switch ($_GET['sortmethod']) {
			
		case 'guidescore':
			$sortmethod = 'guidescore';
			break;
		
		default:
			$sortmethod = 'time';
			break;
	}
}else{
$sortmethod = 'time';
}

if(isset($_GET['sortstyle'])){
	switch ($_GET['sortstyle']) {
			
		case 'asc':
			$sortstyle = 'ASC';
			break;
		
		default:
			$sortstyle = 'DESC';
			break;
	}
}else{
$sortstyle = 'DESC';
}

if(isset($_GET['heroid'])){
$heroid = "WHERE `heroid` = ".intval($_GET['heroid']);
}else{
$heroid = '';
}

$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `guides` $heroid $limithero ORDER BY `$sortmethod` $sortstyle");
$rowcount = 0;
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
  if($i%2 == 0){$class = 'even';}else{$class = 'odd';}$i++;
  
  $result2 = mysqli_query($con,"SELECT * FROM `hero` WHERE `id` = ".$row['heroid']);
  $row2 = mysqli_fetch_assoc($result2);
	
  echo "<a href='guide.php?guideid=".$row['id']."' target='_blank'>";
	  echo "<div class='homeguides ".$class."'>";
	  echo '<img src="img/hero/'.$row2['filename'].'">';
	  echo '<div class="guidename">';
	  echo $row['guidename'];    
	  echo '</div>';
	  
	  
	  $result3 = mysqli_query($con,"SELECT * FROM `vote` WHERE `guideid` = ".$row['id']);
	  
	  
	  echo '<div class="ratestuff">'; 
	  
		  echo '<div class="rating">';  
		  echo 'Rating';
		  echo '</div>';
			  echo '<div class="guidescore">';
			  
			  if(($row["guidescore"]!="")and($result3->num_rows)){
			  echo number_format((float)$row["guidescore"], 2, '.', '')."%";  }else{
			  echo "New";
			  }
			  //echo $row['guidescore'];  
			  echo '</div>';
		  echo '</div>';
		  echo '<div class="guidenamesub"><i>By <font style="color: rgb(204, 204, 204);font-style: italic;font-weight: bold;">'.$row['creatorname'].'</font> on '.$row['time'].'</i></div>';
	  echo '</div>';
  echo '</a>';
  
  $rowcount ++;
  }
  if(!$rowcount){
  print'
  <div style="
    text-align: center;
    padding: 2em;
    border: 2px orange solid;
    margin-top: 10%;
">Sorry, No guide exists for this hero.</div>
  ';
  }

?>







</div>
</div>
</div>
</body>
</html>