<?php
$heroid = $_POST["heroid"];
$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `guides` WHERE `heroid` = $heroid ORDER BY `guidescore` DESC");
$result2 = mysqli_query($con,"SELECT * FROM `hero` WHERE `id` = $heroid");
$row2 = mysqli_fetch_assoc($result2);
$rowcount = 0;
$i=0;
while($row = mysqli_fetch_assoc($result))
  {
  if($i%2 == 0){$class = 'even';}else{$class = 'odd';}$i++;
  echo "<a href='guide.php?guideid=".$row['id']."' target='_blank'>";
  echo "<div class='homeguides ".$class."'>";
	  echo '<img src="img/hero/'.$row2['filename'].'">';
	  
	  echo '<div class="guidename">';
	  echo $row['guidename'];    
	  echo '</div>';
	  
  echo '<div class="ratestuff">';  
	  
	  echo '<div class="rating">Rating</div>';
	  
	  echo '<div class="guidescore">';
	  if($row["guidescore"]!=""){
	  echo number_format((float)$row["guidescore"], 2, '.', '')."%";  }
		  else{
			echo "New";
	  } 
	  echo '</div>';
  echo '</div>';
  echo '<div class="guidenamesub"><i>By <font style="color: rgb(204, 204, 204);font-style: italic;font-weight: bold;">'.$row['creatorname'].'</font> on '.$row['time'].'</i></div>';
  
  /*
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item13']);
  $row3 = mysqli_fetch_assoc($result3);  
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item14']);
  $row3 = mysqli_fetch_assoc($result3);    
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item15']);
  $row3 = mysqli_fetch_assoc($result3);  
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item16']);
  $row3 = mysqli_fetch_assoc($result3);  
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item17']);
  $row3 = mysqli_fetch_assoc($result3);  
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  
  $result3 = mysqli_query($con,"SELECT * FROM `item` WHERE `id` = ".$row['item18']);
  $row3 = mysqli_fetch_assoc($result3);  
  if($row3['filename']==""){$row3['filename']="../asset/item.png";}
  echo '<img class="mainpgitem" src="img/item/'.$row3['filename'].'">';
  */
  /*
  echo $row['item14'];
  echo $row['item15'];
  echo $row['item16'];
  echo $row['item17'];
  echo $row['item18'];
  echo '<br/>';
  echo '<br/>';
  */
 
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