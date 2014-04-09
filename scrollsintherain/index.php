<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>scroll warmup</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){

			var col = $(window);
			var windowWidth = $(window).width(); 
			var windowHeight = $(window).height(); 
			var documentHeight = $(document).height(); 
			var timeoutID; 

			var dropLength = 0; 
			var dropX = 0; 
			var dropY = 20;	
			var dropTop = 0;
			var dropCounter=0; 
			var getTransparency

			var thresholds=["500","900","1200","1500"]; 

			/*Reset scrollposition to top*/ 
			$(window).scrollTop(0);

			/*Function to return the height of the document proportionate to that of the scrollbar*/
			function getScrollBarHeight () {
				return documentHeight*(windowHeight/documentHeight); 
			};

			function addRainDrop(){
				$('body').append('<div class="raindrop" style="height:'+dropLength+'px;left:'+dropX+'px; top:'+dropTop+'px; color:rgba(255,255,255,'+getTransparency+');" data-move="'+dropY+'"></div')

			};

			function getdropLength(max,min){
				return Math.floor(Math.random()*(max-min)+min); 
			}

			function getDropX(){
				return Math.floor(Math.random()*windowWidth);
			}

			//Scroll
			$(window).scroll(function(){
				// Random range: Math.random()*(max-min)+min; 
				var dropAmount = Math.floor(Math.random()*(8-1)+1);
				dropTop = Math.floor(Math.random()*10);

				for (i=0;i<=dropAmount;i++){
				var dropY = Math.floor(Math.random()*(25-20)+20); 

					getTransparency = Math.random()
					dropCounter++; 

					if (dropCount < thresholds[0]){
						dropLength=getdropLength(20,10); 
					}	else if (dropCounter >= thresholds[0] && dropCounter < thresholds[1]){
						dropLength=getdropLength(50,20); 
					}	else if (dropCounter >= thresholds[1] && dropCounter < thresholds[2]){
						dropLength=getdropLength(75,50); 
						dropY=40; 
					}	else if (dropCounter >= thresholds[2] && dropCounter < thresholds[3]){
						dropLength=getdropLength(50,10); 
						dropY=30;
					}	else if (dropCounter >= thresholds[3]){
						dropY=20;
						dropLength=getdropLength(10,1); 
					}

					dropX = getDropX();  	
					addRainDrop(); 

				}

				/*===Animate rain====*/ 
				$('.raindrop').css("top","+="+dropY+"px");
				

				/*===Remove rain divs from the body after it passes the window, to improve performance==*/ 
				$('.raindrop').each(function(){
					var thisTop = parseInt($(this).css('top'))
					var removeDistance = Math.floor(Math.random()*200); 
					if (thisTop>(windowHeight-removeDistance)){
						$(this).remove();
					}

				}); 		
				

				/*====Infinite scroll====*/
				if ($(window).scrollTop()==(documentHeight-getScrollBarHeight())){
					$(window).scrollTop(0);
				}
					
				});

			});


	</script>
</head> 
<body>
	<div class="container">
		<h1>>>Wandering through the time</h1>
		<h1>>>通过时间徘徊</h1>
		<h1>>>Lost in data</h1>
		<h1>>>在数据丢失</h1>
		<h1>>>Scrolling always</h1>
		<h1>>>总是滚动</h1>

	</div>

</body>
</html>