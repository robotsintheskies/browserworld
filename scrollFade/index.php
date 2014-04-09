<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>the only way up is down</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="reset.css">	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){


			var windowWidth = $(window).width(); 
			var windowHeight = $(window).height(); 
			var documentHeight = $(document).height(); 
			var documentWidth = $(document).width(); 
			
			var i=0; 

			var reverse = false; 
			var lastScrollTop = 0;
			var blurMax = 500; 	

			function getScrollBarHeight () {
				return documentHeight*(windowHeight/documentHeight); 
			};	

			function getScrollBarWidth(){
				return documentWidth*(windowWidth/documentWidth); 
			}			

			$(window).scrollTop(0);
			$(window).scrollLeft(0);
			
			$('.glyph').css('text-shadow','0px 0px 135px white');
			var glyphSelector=1; 

			$(window).scroll(function(){
	 			var st = $(this).scrollTop(); 
			var currentGlyph ='#g'+glyphSelector; 	
			var nextGlyph = '#g'+(glyphSelector+1);
				var scrollDistY = $(window).scrollTop(); 
				var scrollDistX = $(window).scrollLeft(); 
				

				if (st>lastScrollTop){
					/*Increment the blurry val up on scroll down*/ 
					if (reverse==false){
						/*If it's going up in blurriness*/						
						i=i+3; 
					} else {
						/*If it's going down in blurriness*/
						i=i-3;
					}

				} else {
					// /*Increment the blurry val down on scroll up*/ 
					// if (reverse==false){
					// 	If current glyph is going up in blurriness
					// 	i=i-5;
					// } else {
					// 	/*If current glyph going up in blurriness*/
					// 	i=i+5; 
					// }
				}

				console.log(i);

				/*Set minimum and maximum blur*/
				if (i<=0){
					/*Has not reached full blur*/ 
					reverse=false; 
				} else if (i>=blurMax){
					/*Has reached full blur and is now going back*/
					reverse=true; 
				}


				lastScrollTop=st; 
					
				/*Make the current active glyph more blurry*/ 
				$(currentGlyph).css('text-shadow','0px 0px '+i+'px white');
				/*Make the next glyph less blurrier*/ 
				$(nextGlyph).css('text-shadow','0px 0px '+(blurMax-i)+'px white');

				/*Infinite scroll*/ 
				if (scrollDistY>=(documentHeight-getScrollBarHeight())){
				$(window).scrollTop(0);
				}

				if (scrollDistY<=0){
				$(window).scrollTop(documentHeight-getScrollBarHeight());
				}


			});

		});

	

	</script>
</head> 
<body>
	<div class="glyph" id="g1">
		<h1>&#9992;</h1>
	</div>
	<div class="glyph" id="g2">
		<h1>&#9786;</h1>
	</div>
	<div class="glyph" id="g3">
		<h1>&#9992;</h1>
	</div>

	</body>
</html>