<div id="itemcontainer" title="Choose an Item">

<form action="#">
<input type="textbox" id="itemsearch"  placeholder="Search Items" />
<input type="hidden" id="currentitem" value=""/>
<script>
$( "#itemsearch" ).keyup(function() {

$.post( 'module/itemsearcher.php' , { searchitem: $(this).val()})
                .done(function( data ) {
                    $("#itemlist").html(data);
                });

});
</script>
<!--<fieldset>
    <label for="filter">Filter By</label>
    <select name="filter" id="filter">
		<option value="all">All</option>
      <optgroup label="Weapons">
        <option value="str">Strength</option>
        <option value="agi">Agility</option>
        <option value="intl">Intelligence</option>
      </optgroup>
      <optgroup label="Survival">
        <option value="hp">Health</option>
        <option value="mp">Mana</option>        
        <option value="arm">Armor</option>
      </optgroup>
      <optgroup label="Utilities">
        <option value="boots">Boots</option>
        <option value="accessories">Accessories</option>
      </optgroup>
    </select>

</fieldset>-->
</form>
<script>
$("#filter").change(function() {
  //alert($(this).val());
});
</script>
<div id="itemlist">





<?php
$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `item` ORDER BY id ASC");
while($row = mysqli_fetch_assoc($result))
  {
	echo '<a class="itemicon itemiconi" title="" itemid="'.$row['id'].'" itemtooltip="#itemtooltip'.$row['id'].'"><img src="img/item/'.$row['filename'].'"/>';
	echo '<br/>';
	echo '<div class="itemname">'.$row['name'].'</div></a>';
  }

/*
$dir    = 'img/item';
$files1 = scandir($dir);
$itemid = "0";
foreach($files1 as $item){
	if($item=='..' || $item == '.'){
	}else{
	$itemid ++;
	$imgpath = $item;
	$item = str_replace('-',' ',$item);
	$iname = ucwords(str_replace('.png','',$item));
	echo '<a class="itemicon itemiconi" title="" itemid="'.$itemid.'"><img src="img/item/'.$imgpath.'"/>';
	echo '<br/>';
	echo '<div class="itemname">'.$iname.'</div></a>';
	}
}
*/
/*
if(!isset($_POST['sortitem'])){
	$sortitem = 'id ASC';
	};
$con= mysqli_connect("localhost","root","","dota2");
$result = mysqli_query($con,"SELECT * FROM `item` ORDER BY ".$sortitem);
while($row = mysqli_fetch_assoc($result))
  {
	echo '<a class="itemicon itemiconi" title="" itemid="'.$row['id'].'"><img src="img/item/'.$row['filename'].'"/>';
	echo '<br/>';
	echo '<div class="itemname">'.$row['name'].'</div></a>';
  }*/
?>
</div>
</div>