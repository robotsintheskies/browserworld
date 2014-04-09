<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>scroll warmup</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="reset.css">	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){


			var windowMinus=0; 
			var windowWidth = $(window).width(); 
			var windowHeight = $(window).height(); 
			var documentHeight = $(document).height(); 
			var documentWidth = $(document).width(); 

			var popUpHeight=0; 
			var popUpWidth=0; 
			var windowPosY=windowHeight/2; 
			var windowPosX=windowWidth/2; 
			
			var moveSpeed=25; 
			var lastScrollTop = 0;	

			function getScrollBarHeight () {
				return documentHeight*(windowHeight/documentHeight); 
			};	

			function getScrollBarWidth(){
				return documentWidth*(windowWidth/documentWidth); 
			}			


			$(window).scrollTop(0);
			$(window).scrollLeft(0);

			$(window).scroll(function(){
	 			var st = $(this).scrollTop(); 
				var scrollDistY = $(window).scrollTop(); 
				var scrollDistX = $(window).scrollLeft(); 

				

				/*Proportion of scroll to document multiplied by document width*/
				$(window).scrollLeft(($(window).scrollTop()/documentHeight)*documentWidth);

				
				if (st>lastScrollTop){

				$("#b2,#b4").css('margin-left','+='+moveSpeed+'px'); 
				$("#b1,#b3").css('margin-left','-='+moveSpeed+'px');
				$("#b6,#b8").css('margin-left','+='+(moveSpeed-15)+'px'); 
				$("#b5,#b7").css('margin-left','-='+(moveSpeed-15)+'px');
				$("#b10,#b12").css('margin-left','+='+(moveSpeed-20)+'px'); 
				$("#b9,#b11").css('margin-left','-='+(moveSpeed-20)+'px');

				} else {
				$("#b2,#b4").css('margin-left','-='+moveSpeed+'px'); 
				$("#b1,#b3").css('margin-left','+='+moveSpeed+'px');
				$("#b6,#b8").css('margin-left','-='+(moveSpeed-15)+'px'); 
				$("#b5,#b7").css('margin-left','+='+(moveSpeed-15)+'px');
				$("#b10,#b12").css('margin-left','-='+(moveSpeed-20)+'px'); 
				$("#b9,#b11").css('margin-left','+='+(moveSpeed-20)+'px');
				}

				lastScrollTop=st; 

				/*Infinite scroll*/ 
				if (scrollDistY>=(documentHeight-getScrollBarHeight())){
				$(window).scrollTop(0);
				}

				if (scrollDistY<=0){
				$(window).scrollTop(documentHeight-getScrollBarHeight());
				}

				// $('.bar').each(function(){
				// if (parseInt($(this).css('margin-left'))>windowWidth){
				// } 

				// }); 
			});

		});

	

	</script>
</head> 
<body>
	<div class="barContainer" id="bc3">
		<div class="bar" id="b13">
			<h1> --- </h1>
		</div>
		<div class="bar" id="b14">
			<h1> JOURNEYING </h1>
		</div>
		<div class="bar" id="b15">
			<h1> ONWARDS </h1>
		</div>
		<div class="bar" id="b16">
			<h1> --- </h1>
		</div>
	</div>
	<div class="barContainer" id="bc2">
		<div class="bar" id="b9">
			<h1> TWO FINGERS </h1>
		</div>
		<div class="bar" id="b10">
			<h1> TAKES YOU</h1>
		</div>
		<div class="bar" id="b11">
			<h1> ANYWHERE: </h1>
		</div>
		<div class="bar" id="b12">
			<h1> SUBLIMATION</h1>
		</div>
	</div>
	<div class="barContainer" id="bc1">
		<div class="bar" id="b5">
			<h1> IN YOUR </h1>
		</div>
		<div class="bar" id="b6">
			<h1> HANDS,</h1>
		</div>
		<div class="bar" id="b7">
			<h1> POWER </h1>
		</div>
		<div class="bar" id="b8">
			<h1> UNLIMITING</h1>
		</div>
	</div>
	<div class="barContainer" id="bc0">
		<div class="bar" id="b1">
			<h1> TRAVERSING </h1>
		</div>
		<div class="bar" id="b2">
			<h1> IN SPACES</h1>
		</div>
		<div class="bar" id="b3">
			<h1> && FLYING </h1>
		</div>
		<div class="bar" id="b4">
			<h1> THRU TIME</h1>
		</div>
	</div>

</body>
</html>