<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>no clicking</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>
        $(document).ready(function(){
            var blockSize = 56; 
            var screenWidth = parseInt($(document).width()); 
            var screenHeight = parseInt($(document).height()); 
            var screenArea = screenWidth*screenHeight; 
            var blockQuantityX = screenWidth/blockSize; 
            var blockQuantityY = screenHeight/blockSize; 
            var blockQuantity = Math.floor((blockQuantityY*blockQuantityX)+blockQuantityX);

            var intervalID;

            var transparentBlocks=[]; 

      $.event.special.megaclick = {

          setup: function(data, namespaces) {
              var elem = this, $elem = jQuery(elem);
              $elem.bind('click', jQuery.event.special.megaclick.handler);
          },

          teardown: function(namespaces) {
              var elem = this, $elem = jQuery(elem);
              $elem.unbind('click', jQuery.event.special.megaclick.handler)
          },

          /*Megaclick*/ 
          handler: function(event) {
              var elem = this, $elem = jQuery(elem), clicks = $elem.data('clicks') || 0;
              clicks += 1;
              if ( clicks === 30 ) {
                  clicks = 0;

                  // set event type to "tripleclick"
                  event.type = "megaclick";
                  
                  // let jQuery handle the triggering of "tripleclick" event handlers
                  jQuery.event.handle.apply(this, arguments)  
              }
              $elem.data('clicks', clicks);
          }
          
      };


            for (var i=0;i<=blockQuantity;i++){
            	$('.block_container').append("<div id='blockID_"+i+"'class='block' style='width:"+blockSize+"px ;height:"+blockSize+"px;'><p>&#9883;</p></div");
            }

            $('.block').click(function(){
            	var blockID = $(this).attr('id');
            	$(this).addClass('transparent')
            	transparentBlocks.push(blockID); 

            	console.log(transparentBlocks)

            })

            $('.block').dblclick(function(){
            	$('.block').removeClass('transparent');
            })

            $(".block").bind("megaclick", function() {
                  $('.block_container').hide();
                  alert("you win");   
            });

          	intervalID=setInterval(function(){
	          	var transparentBlocksLength=(transparentBlocks.length)+1; 

            	var randomBlockSelector = Math.floor(Math.random()*(transparentBlocksLength)) 
            	var randomBlock = transparentBlocks[randomBlockSelector]; 
            	var place=transparentBlocks.indexOf(randomBlock);

            	$('#'+randomBlock).removeClass('transparent');
            	transparentBlocks.splice(place,1);

          		},5000)
          	})
			


	</script>
</head> 
<body>

	<div class="block_container">	
        
	</div>
      <div class="text">
      <h1>click is power</h1>
      <h1>&#9883;</h1>
      <h1>点击就是力量</h1>
      </div>


</body>
</html>