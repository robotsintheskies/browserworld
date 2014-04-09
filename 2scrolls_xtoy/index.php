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
			
			var moveSpeed=30; 
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
				console.log(scrollDistY);

				/*Proportion of scroll to document multiplied by document width*/
				$(window).scrollLeft(($(window).scrollTop()/documentHeight)*documentWidth);

				
				if (st>lastScrollTop){

				$("#b2,#b4").css('margin-left','+='+moveSpeed+'px'); 
				$("#b1,#b3").css('margin-left','-='+moveSpeed+'px');
				} else {
				$("#b2,#b4").css('margin-left','-='+moveSpeed+'px'); 
				$("#b1,#b3").css('margin-left','+='+moveSpeed+'px');
				}

				lastScrollTop=st; 

				/*Infinite scroll*/ 
				if (scrollDistY==(documentHeight-getScrollBarHeight())){
				$(window).scrollTop(0);
				}

				if (scrollDistY<0){
				$(window).scrollTop(documentHeight-getScrollBarHeight());
				}

				if (scrollDistX==(documentWidth-getScrollBarWidth())){
				$(window).scrollLeft(0);
				}

				if (scrollDistX<0){
				$(window).scrollTop(documentWidth-getScrollBarWidth());
				}
			});

		});

	

	</script>
</head> 
<body>

</body>
</html>