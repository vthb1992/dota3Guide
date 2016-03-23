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
<title>New Build</title>

<!-- wysiwyg text editor-->
<script>
// Source: http://www.backalleycoder.com/2011/03/20/link-tag-css-stylesheet-load-event/
var loadCSS = function(url, callback){
	var link = document.createElement('link');
	link.type = 'text/css';
	link.rel = 'stylesheet';
	link.href = url;
	link.id = 'theme-style';

	document.getElementsByTagName('head')[0].appendChild(link);

	var img = document.createElement('img');
	img.onerror = function(){
		if(callback) callback(link);
	}
	img.src = url;
}

$(document).ready(function() {
	var initEditor = function() {
		$("textarea").sceditor({
			plugins: 'bbcode',
			style: "./css/jquery.sceditor.default.min.css"
		});
	};

	$("#theme").change(function() {
		var theme = "./css/themes/" + $(this).val() + ".min.css";

		$("textarea").sceditor("instance").destroy();
		$("link:first").remove();
		$("#theme-style").remove();

		loadCSS(theme, initEditor);
	});

	initEditor();
});
</script>

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
    
<div id="main" style="height:600px;">
      <script>
      $(function() {
        herodialog = $( "#herocontainer" ).dialog({
          autoOpen: false,
          height: $(window).height()*0.9,
          width: $(window).width()*0.9,
          modal: true,
		  close: function() {$( ".heroiconi" ).tooltip( "close" );}
        }); 
        $( "#choosehero" ).on( "click", function() {
          herodialog.dialog( "open" );
        });
        $( ".heroiconi" ).on( "click", function() {
          $( "#choosehero" ).html($(this).html());
		  //alert($(this).html());
		  $( "#selheroid").val($(this).attr( "heroid" ));
          $.post( 'module/herochoose.php' , { heroid: $(this).attr( "heroid" )})
                .done(function( data ) {
                    $("#heroinfocallback").html(data);
                });
          herodialog.dialog( "close" );
        });
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
      });
      </script>
	  <script>
      $(function() {
        itemdialog = $( "#itemcontainer" ).dialog({
          autoOpen: false,
          height: $(window).height()*0.9,
          width: $(window).width()*0.9,
          modal: true
        }); 
        $( ".items" ).on( "click", function() {
		 $(this).html('');
		 $(this).removeAttr( "itemid" );
		 $(this).removeAttr( "title" );
		 $( ".items" ).tooltip( "close" );
         itemdialog.dialog( "open" );		 
		 //var currentitemselect = '#item' + $(this).attr('itemslot')+'';
		 var currentitemselect = $(this).attr('itemslot');
		 $("#currentitem").val(currentitemselect);
        });
		
		
        //$( ".itemiconi" ).on( "click", function() {
		
        $(document).on( "click", ".itemiconi", function() {
		//alert();
		
		var currentitemselect = '#item' + $("#currentitem").val();
          $( currentitemselect ).html($(this).html());
          $( currentitemselect ).attr("itemid" , $(this).attr('itemid'));
          $( currentitemselect ).attr("title" , "");
		  
		var currentitemselecth = '#item' + $("#currentitem").val()  + 'id';
		   $(currentitemselecth).val($(this).attr('itemid'));
		  
		  
		  //$( "#selheroid").val($(this).attr( "heroid" ));
		  
		  /*
          $.post( 'module/herochoose.php' , { heroid: $(this).attr( "heroid" )})
                .done(function( data ) {
                    $("#heroinfocallback").html(data);
                });*/
          itemdialog.dialog( "close" );		  
        });
		
		
		$( ".itemiconi" ).tooltip({
            content: function() {
			return $($(this).attr( "itemtooltip" )).html();
			},
            show: true,
            hide: true,
            track: true
        });
        $( ".itemiconi" ).mouseout(function() {
            $( ".itemiconi" ).tooltip( "close" );
        })
		
		$( ".items" ).tooltip({
            content: function() {
			return $("#itemtooltip"+$(this).attr( "itemid" )).html();
			},
            show: true,
            hide: true,
            track: true
        });
		
        $( ".items" ).mouseout(function() {
            $( ".items" ).tooltip( "close" );
        })
		
		
		$(document).on( "mouseover",".itemiconi", function() {
			$( this ).tooltip({
			 content: function() {
			return $("#itemtooltip"+$(this).attr( "itemid" )).html();
			},
            show: true,
            hide: true,
            track: true
			});
        });
		
      });
      </script>
    <div id="heroform">
    <a class="heroicon" id="choosehero"><img src="img/asset/choosehero.jpg" id="chooseheroimg" />
    <br/>
    <div class="heroname" id="chooseheroname">Choose Hero</div></a>
    <div id="heroinfocallback"></div>
    <div id="heroitems">
    <table class="itemslots">
	<tr><td colspan="3" class="slotheader">Starting Items</td></tr>
    <tr>
        <td><div id="item1" class="items" itemslot="1"></div></td>
        <td><div id="item2" class="items" itemslot="2"></div></td>
        <td><div id="item3" class="items" itemslot="3"></div></td>
    </tr>
    <tr>
        <td><div id="item4" class="items" itemslot="4"></div></td>
        <td><div id="item5" class="items" itemslot="5"></div></td>
        <td><div id="item6" class="items" itemslot="6"></div></td>
    </tr>
    </table>
    <table class="itemslots">	
	<tr><td colspan="3" class="slotheader">Mid Game Items</td></tr>
    <tr>
        <td><div id="item7" class="items" itemslot="7"></div></td>
        <td><div id="item8" class="items" itemslot="8"></div></td>
        <td><div id="item9" class="items" itemslot="9"></div></td>
    </tr>
    <tr>
        <td><div id="item10" class="items" itemslot="10"></div></td>
        <td><div id="item11" class="items" itemslot="11"></div></td>
        <td><div id="item12" class="items" itemslot="12"></div></td>
    </tr>
    </table>
    <table class="itemslots">	
	<tr><td colspan="3" class="slotheader">Ending Items</td></tr>
    <tr>
        <td><div id="item13" class="items" itemslot="13"></div></td>
        <td><div id="item14" class="items" itemslot="14"></div></td>
        <td><div id="item15" class="items" itemslot="15"></div></td>
    </tr>
    <tr>
        <td><div id="item16" class="items" itemslot="16"></div></td>
        <td><div id="item17" class="items" itemslot="17"></div></td>
        <td><div id="item18" class="items" itemslot="18"></div></td>
    </tr>
    </table>
    </div>
    </div>    
    <br/>
    <div id="herocommentarea">
    <form>
    <input type="hidden" value="" id="herostr"/>
    <input type="hidden" value="" id="heroagi"/>
    <input type="hidden" value="" id="heroint"/>
    <input type="hidden" value="" id="herohp"/>
    <input type="hidden" value="" id="heromp"/>
    <input type="hidden" value="" id="herodmg"/>
    <input type="hidden" value="" id="heroamr"/>
    <input type="hidden" value="" id="herospd"/>
    </form>
    
	<form id="registerform" method="post" action="build_submit.php">
	<input type="text" placeholder="Insert Guide Name" name="guidename" id="guidename"/>
    <input type="hidden" value="" name="selheroid" id="selheroid"/>
    <input type="hidden" value="" name="item1id" id="item1id"/>
    <input type="hidden" value="" name="item2id" id="item2id"/>
    <input type="hidden" value="" name="item3id" id="item3id"/>
    <input type="hidden" value="" name="item4id" id="item4id"/>
    <input type="hidden" value="" name="item5id" id="item5id"/>
    <input type="hidden" value="" name="item6id" id="item6id"/>
    <input type="hidden" value="" name="item7id" id="item7id"/>
    <input type="hidden" value="" name="item8id" id="item8id"/>
    <input type="hidden" value="" name="item9id" id="item9id"/>
    <input type="hidden" value="" name="item10id" id="item10id"/>
    <input type="hidden" value="" name="item11id" id="item11id"/>
    <input type="hidden" value="" name="item12id" id="item12id"/>
    <input type="hidden" value="" name="item13id" id="item13id"/>
    <input type="hidden" value="" name="item14id" id="item14id"/>
    <input type="hidden" value="" name="item15id" id="item15id"/>
    <input type="hidden" value="" name="item16id" id="item16id"/>
    <input type="hidden" value="" name="item17id" id="item17id"/>
    <input type="hidden" value="" name="item18id" id="item18id"/>
    <textarea name="bbcode_field" style="height:300px;width:600px;"></textarea>
	<br/>
    <input type="submit" onclick="return false;" id="buildsubmit"/>
    </form>
    <?php include 'module/herolist.php'; ?>
    <?php include 'module/itemlist.php'; ?>
    </div>    
    </div>
</div>
</div>

<div id="allheroinfo" style="display:none;">
<?php include 'module/heroinfo.php';?>
</div>
<div id="alliteminfo" style="display:none;">
<?php include 'module/iteminfo.php';?>
</div>
<script>
$("#buildsubmit").on( "click",function(){			
	if($("#selheroid").val().length == 0){
	alert("You have to select a hero.");
	return false;
	}else{
	$("#registerform").submit();
	}
});
</script>
</body>
</html>