<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>always clicking</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
			var intervalID;

			function screenFlash(){
				intervalID = setInterval(function(){
					var timeout; 

					$('html').css('background-color','black');
					$('.container').css('color','white');
					clearTimeout(timeout);
					timeout = setTimeout(function(){
						$('html').css('background-color','white');
						$('.container').css('color','black');
					}, 50);			
				}, 100);
			}

			$(document).mousedown(function(){
				clearInterval(intervalID);
			})

			$(document).mouseup(function(){
				screenFlash();
			})

			screenFlash();

		})
	</script>
</head> 
<body>

	<div class="container">	
		<h1>HOLDING ME TIGHTLY</h1>
		<h1>抱紧我</h1>

		<p>In the crazy movement of the web, only you are the cursor</p>
		<p>Don't let go, you'll lose your self.</p>	
	</div>

</body>
</html>