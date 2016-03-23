<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>GUIDE</title>

<?php include 'module/header.php'; ?>
</head>
<body>
<div id="wrapper">

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
$guideid = intval($_GET["guideid"]);
//echo $guideid;
$con= mysqli_connect("localhost","root","","dota2");
$result1 = mysqli_query($con,"SELECT * FROM `guides` WHERE `id` = $guideid");
if ($result1->num_rows) {

	$row1 = mysqli_fetch_assoc($result1);
	$heropic=$row1['heroid'];
	$result2 = mysqli_query($con,"SELECT * FROM `hero` WHERE `id` = $heropic");
	$row2 = mysqli_fetch_assoc($result2);

	$result3 = mysqli_query($con,"SELECT COUNT(*) as voters FROM `vote` WHERE `guideid` = $guideid");
	$row3 = mysqli_fetch_assoc($result3);

	echo '<img src="img/hero/'.$row2['filename'].'"  class="heroiconi" title="" heroid="'.$row2['id'].'" herotooltip="#herotooltip'.$row2['id'].'"/>';
	echo '<div class="guidename">'.$row1['guidename'].'</div>';  
	if(isset($_SESSION["userid"])){
	echo '<a href="guide_delete.php?guideid='.$guideid.'" style="color:white;"><div id="deletebtn"><i class="fa fa-trash-o"></i>  Delete Guide</div></a>';
	}
	echo '<br/>';

	echo '<div id="rater" style="font-size: 19px;"><div id="votetext" class="ui-state-highlight ui-corner-all" style="padding: 4px 1.7em;
	position: absolute;
	margin-left: 320px; display:none;">
			<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
			<strong id="votemsg">Voted!</strong> Thanks for your vote.</p>
		</div>';


	echo 'Rating: ';
	echo "<span id='rtscore'>".$row1['guidescore']."%</span> / <span id='rtvote'>".$row3['voters']."</span> votes ";
	echo "<i class='fa fa-thumbs-o-up fa-1x thumber' id='upvote'></i> ";
	echo "<i class='fa fa-thumbs-o-down fa-1x thumber'  id='downvote'></i>";
	$guidescore = $row1['guidescore'];
	switch ($guidescore) {
		case $guidescore>60:
			$barcolor = 'green';
			break;
		case ($guidescore<59)&&($guidescore>30):
			$barcolor = 'orange';
			break;
		case ($guidescore<29):
			$barcolor = 'red';
			break;
	}
	echo '
	<div class="meter '.$barcolor.'">
		<span style="width: '.$guidescore.'%"></span>
	</div>';
	echo '</div>';
	echo '<br/>';
	echo '<div class="timesub"><i>By <font style="color: rgb(204, 204, 204);font-style: italic;font-weight: bold;">'.$row1['creatorname'].'</font> on '.$row1['time'].'</i></div>';

	echo '<br/>';
	echo '<br/>';
	echo '<div id="guideattr" style="position: absolute;"></div>';
	echo "<table id='guidetable'  style='margin-left: 220px;'><tr>";
	echo "<td>Starting Item</td><td>Mid-Game Item</td><td>Ending Item</td></tr><tr>";
	echo "<td>";
			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item1']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item1'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item2']);
			$row3 = mysqli_fetch_assoc($result3);    
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item2'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item3']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item3'].'" >'; 

			echo '<br/>';

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item4']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item4'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item5']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item5'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item6']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item6'].'" >'; 

	echo "</td><td>";


			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item7']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item7'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item8']);
			$row3 = mysqli_fetch_assoc($result3);    
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item8'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item9']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item9'].'" >'; 

			echo '<br/>';

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item10']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item10'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item11']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item11'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item12']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item12'].'" >'; 

	echo "</td><td>";


			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item13']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item13'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item14']);
			$row3 = mysqli_fetch_assoc($result3);    
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item14'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item15']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item15'].'" >'; 

			echo '<br/>';

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item16']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item16'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item17']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item17'].'" >'; 

			$result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row1['item18']);
			$row3 = mysqli_fetch_assoc($result3);  
			if($row3['filename']==""){$row3['filename']="../asset/item.png";}
			echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'" title="" itemtooltip="#itemtooltip'.$row1['item18'].'" >'; 
			  
	echo "</td></tr></table>";
	  
	echo '<br/><br/><br/><br/><br/>';

	echo "Notes:<div id='guidetext'>".$row1['guidetext']."</div>";

	print'  
	<div id="allheroinfo" style="display:none;">';
	include 'module/heroinfo.php';
	print'
	</div>
	<div id="alliteminfo" style="display:none;">';
	include 'module/iteminfo.php';
	print'
	</div>';
	  
	  
}else{
	echo '<meta http-equiv="refresh" content="3;url=index.php" />';
	echo '<div>Guide not found, Redirecting in 3 seconds. Click <a href="index.php">here</a> to go back manually.</div>';
	}
	?>
</div>
</div>
</div>
<div id="callback"></div>
<script>
$( "#rater" ).disableSelection()
var guideid = <?php echo $guideid; ?> ;
$( "#upvote" ).click(function() {


$.post( 'module/voter.php' , { givescore: 1, guideid: guideid })
                .done(function( data ) {
                    $("#callback").html(data);
                });


});
$( "#downvote" ).click(function() {


$.post( 'module/voter.php' , { givescore: 0, guideid: guideid })
                .done(function( data ) {
                    $("#callback").html(data);
                });


});

$(".fa-thumbs-o-up").hover(function() {
  $( this ).toggleClass( "fa-thumbs-up" );
});
$(".fa-thumbs-o-down").hover(function() {
  $( this ).toggleClass( "fa-thumbs-down" );
});

$(".meter > span").each(function() {
	$(this)
		.data("origWidth", $(this).width())
		.width(0)
		.animate({
			width: $(this).data("origWidth")
		}, 1200);
});

$( ".mainpgitem" ).tooltip({
            content: function() {
			return $($(this).attr( "itemtooltip" )).html();
			},
            show: true,
            hide: true,
            track: true
        });
        $( ".mainpgitem" ).mouseout(function() {
            $( ".mainpgitem" ).tooltip( "close" );
        })
$( ".heroiconi" ).tooltip({
            content: function() {
			return $($(this).attr( "herotooltip" )).html();
			},
            show: true,
            hide: true,
            track: true
        });
        $( ".heroiconi" ).mouseout(function() {
            $( ".heroiconi" ).tooltip( "close" );
        })
		
$("#guideattr").html($($(".heroiconi").attr( "herotooltip" )+" .herotooltiptext").html())
//$("#guideattr").html($($(".heroiconi").attr( "herotooltip" )).html())
</script>

</body>
</html>