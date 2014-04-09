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
			var timeout; 
			var counterTimeout;
			var counterInterv;
			var i=0;
			
			console.log(i); 


			// $(document).mousedown(function(){

			// 	$('html').css('background-color','black');
			// 	$('.container').css('display','block');
			// 	i++; 	
			// 	clearInterval(counterInterv);
			// 	console.log(i); 
			// 	clearTimeout(timeout);
			// 	timeout = setTimeout(function(){
			// 		$('html').css('background-color','white');
			// 		$('.container').css('display','none');
			// 	}, 50);	
			// }					
			// })

			$(document).mouseup(function(){
				i++;
				clearInterval(counterInterv); 

				countDown();
			})

			function countDown(){
					clearTimeout(timeout);
					timeout=setTimeout(function(){
					counterInterv=setInterval(function(){
						if (i>0)
						{ 
							i--; 
							$('html').css('background-color','black');
							$('.container').css('display','block');	
							$('.container.initial').css('display','none');
						} else {
							i=0
							$('html').css('background-color','white');
							$('.container').css('display','none');
							$('.container.initial').css('display','block');
						};

				},50)
				},500)}					

		})
	</script>
</head> 
<body>
	<div class="container initial">
		<h1>NO CLICK == NO LIFE</h1>
		<h1>&#9760;</h1>
		<h1>不要停</h1>
	</div>
	<div class="container">	
		<h1>NEVER NOT CLICKING</h1>
		<h1>&#10014;</h1>
		<h1>抱紧我</h1>


		<p>In the de-secured, de-stabilized space of the screen, we distill our agency into the form of a cursor.</p>
		<p>To let go is to give in to speed and uncertainty.</p>	
	</div>

</body>
</html>