<?php
$con= mysqli_connect("localhost","root","","dota2");
if(isset($_POST['searchitem'])and($_POST['searchitem']!="")){
		$searchitem = mysqli_real_escape_string($con,$_POST['searchitem']);
		//SELECT * FROM `item` WHERE `name` LIKE '%a%' ORDER BY `id` ASC
		$result = mysqli_query($con,"SELECT * FROM `item` WHERE `name` LIKE '%".$searchitem."%' ORDER BY id ASC");
		while($row = mysqli_fetch_assoc($result))
		  {
			echo '<a class="itemicon itemiconi" title="" itemid="'.$row['id'].'" itemtooltip="#itemtooltip'.$row['id'].'"><img src="img/item/'.$row['filename'].'"/>';
			echo '<br/>';
			echo '<div class="itemname">'.$row['name'].'</div></a>';
		  }  
}else{
		$result = mysqli_query($con,"SELECT * FROM `item` ORDER BY id ASC");
		while($row = mysqli_fetch_assoc($result))
		  {
			echo '<a class="itemicon itemiconi" title="" itemid="'.$row['id'].'" itemtooltip="#itemtooltip'.$row['id'].'"><img src="img/item/'.$row['filename'].'"/>';
			echo '<br/>';
			echo '<div class="itemname">'.$row['name'].'</div></a>';
		  }
}
?>