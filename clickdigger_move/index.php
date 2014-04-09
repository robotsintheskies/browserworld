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
            var blockSize = 35; 
            var screenWidth = parseInt($(document).width()); 
            var screenHeight = parseInt($(document).height()); 
            var screenArea = screenWidth*screenHeight; 
            var blockQuantityX = screenWidth/blockSize; 
            var blockQuantityY = screenHeight/blockSize; 
            var blockQuantity = (blockQuantityY*blockQuantityX)+blockQuantityX;

            console.log(blockQuantity);
            var intervalID;
            var intervalID2;

            var transparentBlocks=[]; 
            var transparentBlocksLength; 

            for (i=0;i<=blockQuantity;i++){
            	$('.block_container').append("<div id='blockID_"+i+"'class='block' style='width:"+blockSize+"px ;height:"+blockSize+"px;'></div");
            }

            $('.block').mouseenter(function(){
            	var blockID = $(this).attr('id');
            	$(this).addClass('transparent');

            	transparentBlocks.push(blockID); 
            })


          		intervalID=setInterval(function(){
                transparentBlocksLength=(transparentBlocks.length)+1; 

            	var randomBlockSelector = Math.floor(Math.random()*(transparentBlocksLength)) 
            	var randomBlock = transparentBlocks[randomBlockSelector]; 
            	var place=transparentBlocks.indexOf(randomBlock);
                $('.transparent').css('background-color','rgb(0,0,'+(255-(transparentBlocksLength/5))+')');

            	$('#'+randomBlock).removeClass('transparent');
                $('#'+randomBlock).css('background-color','blue');

            	transparentBlocks.splice(place,1);

          		},50)





    });
			


	</script>
</head> 
<body>

	<div class="block_container">	
        
	</div>

</body>
</html>