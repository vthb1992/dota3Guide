<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION["userid"])){
	$con= mysqli_connect("localhost","root","","dota2");
	$doscore = false;
	switch ($_POST['givescore']) {
				
			case '0':
				$givescore = '0';
				$votemsg = 'Guide Downvoted';
				$doscore = true;
				break;
				
			case '1':
				$givescore = '1';			
				$votemsg = 'Guide Upvoted';
				$doscore = true;
				break;
			
			default:
				echo '<script>alert("Error.")</script>';
				break;
		}

	if($doscore){
	$guideid = intval($_POST["guideid"]);
	$userid = $_SESSION["userid"];



	$result = mysqli_query($con, "SELECT * FROM vote WHERE guideid = $guideid AND voterid = $userid");
		if (($result->num_rows)&&($userid!=1)) {
			//voted, update old vote			
			$result = mysqli_query($con, "UPDATE `dota2`.`vote` SET `votevalue` = $givescore WHERE guideid = $guideid AND voterid = $userid");
			$result3 = mysqli_query($con,"SELECT COUNT(*) as voters FROM `vote` WHERE `guideid` = $guideid");
			$row3 = mysqli_fetch_assoc($result3);
			
			$result4= mysqli_query($con,"SELECT AVG(votevalue) as averagescore FROM `vote` WHERE guideid = $guideid");  
			$row4 = mysqli_fetch_assoc($result4);
			$score = number_format((float)$row4["averagescore"]*100, 2, '.', '');
			$result5 = mysqli_query($con, "UPDATE `dota2`.`guides` SET `guidescore` = $score WHERE id = $guideid");
			
			
			echo '<script>$("#rtvote").html("'.$row3['voters'].'")</script>';	
			echo '<script>$("#rtscore").html("'.$score.'%")</script>';	
			
			echo '<script>$("#votemsg").html("Vote updated.");</script>';			
			echo '<script>$("#votetext").show().delay(3000).hide(500);</script>';	
			
			echo '<script>$(".meter > span").animate({ width: "'.$score.'%"	}, 1200);</script>';
			
			switch ($score) {
				case ($score>60):
					echo '<script>
					$(".orange").switchClass( "orange", "green", 1000 );
					$(".red").switchClass( "red", "green", 1000 );</script>';
					break;
				case ($score<59)&&($score>36):
					echo '<script>
					$(".green").switchClass( "green", "orange", 1000 );
					$(".red").switchClass( "red", "orange", 1000 );</script>';
					break;
				case ($score<35):
					echo '<script>
					$(".green").switchClass( "green", "red", 1000 );
					$(".orange").switchClass( "orange", "red", 1000 );</script>';
					break;
				}
			}else{
			//not voted, new entry	
			$result = mysqli_query($con, "INSERT INTO `dota2`.`vote` (`id`, `guideid`, `voterid`, `votevalue`) VALUES (NULL, $guideid, $userid, $givescore)");
			
			$result3 = mysqli_query($con,"SELECT COUNT(*) as voters FROM `vote` WHERE `guideid` = $guideid");
			$row3 = mysqli_fetch_assoc($result3);
			
			$result4= mysqli_query($con,"SELECT AVG(votevalue) as averagescore FROM `vote` WHERE guideid = $guideid");  
			$row4 = mysqli_fetch_assoc($result4);
			$score = number_format((float)$row4["averagescore"]*100, 2, '.', '');
			$result5 = mysqli_query($con, "UPDATE `dota2`.`guides` SET `guidescore` = $score WHERE id = $guideid");
			
			echo '<script>$("#rtvote").html("'.$row3['voters'].'")</script>';
			echo '<script>$("#rtscore").html("'.$score.'%")</script>';	
			
			echo '<script>$("#votemsg").html("'.$votemsg.'");</script>';				
			echo '<script>$("#votetext").show().delay(3000).hide(500);</script>';		
			
			echo '<script>$(".meter > span").animate({ width: "'.$score.'%"	}, 1200);</script>';
			
			
			switch ($score) {
				case ($score>60):
					echo '<script>
					$(".orange").switchClass( "orange", "green", 1000 );
					$(".red").switchClass( "red", "green", 1000 );</script>';
					break;
				case ($score<59)&&($score>36):
					echo '<script>
					$(".green").switchClass( "green", "orange", 1000 );
					$(".red").switchClass( "red", "orange", 1000 );</script>';
					break;
				case ($score<35):
					echo '<script>
					$(".green").switchClass( "green", "red", 1000 );
					$(".orange").switchClass( "orange", "red", 1000 );</script>';
					break;
				}
			
			}
		
	}
	//echo $row3['voters'].'<br/>';
}else{
//if user not logged in

echo '<script>alert("Log in to vote guides.")</script>';
}
?>