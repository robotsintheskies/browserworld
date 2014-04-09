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
			console.log(popUpHeight); 
			console.log(popUpWidth);

			var windowMinus=0; 
			var windowHeight=parseInt($(window).height()); 
			var windowWidth=parseInt($(window).width()); 

			var popUpHeight=0; 
			var popUpWidth=0; 
			var windowPosY=windowHeight/2; 
			var windowPosX=windowWidth/2; 

			//Scroll
			$(document).scroll(function(){
				windowMinus=windowMinus+25; 
				popUpHeight=windowHeight-windowMinus; 
				popUpWidth=windowWidth-windowMinus; 
				console.log(popUpHeight); 
				console.log(popUpWidth);
				myWindow=window.open("1.php","","toolbar=no, scrollbars=no, resizable=no, top="+windowPosY+", left="+windowPosX+", width="+popUpWidth+", height="+popUpHeight+""); 
			});

		}); 

	</script>
</head> 
<body>
	<div class="container">

	</div>

</body>
</html>