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

		var lastScrollTop = 0;	

		function getScrollBarHeight () {
			return documentHeight*(windowHeight/documentHeight); 
		};	
		function getScrollBarWidth(){
			return documentWidth*(windowWidth/documentWidth); 
		}	

		$(window).scrollTop(0);
		$(window).scrollLeft(0);

		var i=0;
		var j=0;
		var k=0;
		var l=0; 
		var m=0; 
		var n=0;

		/*====VIDEO====*/ 
		var streaming = false,
   		video        = document.querySelector('#video'),
   		video2        = document.querySelector('#video2'),
   		video3        = document.querySelector('#video3'),
   		video4        = document.querySelector('#video4'),
   		video5        = document.querySelector('#video5'),
   		video6        = document.querySelector('#video6'),
   		canvas       = document.querySelector('#canvas'),
   		photo        = document.querySelector('#photo'),
   		startbutton  = document.querySelector('#startbutton'),
   		width = 1600,
   		height = 0,
   		width2=1200,
   		height2=0,
   		width3=1000,
   		height3=0;
   		width4=800,
   		height4=0;
   		width5=450,
   		height5=0;
   		width6=200,
   		height6=0;

  		navigator.getMedia = ( navigator.getUserMedia ||
   		navigator.webkitGetUserMedia ||
   		navigator.mozGetUserMedia ||
   		navigator.msGetUserMedia);
  		navigator.getMedia(
    		{
    		  video: true,
    		  audio: false
    		},
   		
   		function(stream) {
   			  if (navigator.mozGetUserMedia) {
   			    video.mozSrcObject = stream;
   			    video2.mozSrcObject = stream;
   			    video3.mozSrcObject = stream;
   			    video4.mozSrcObject = stream;
				video5.mozSrcObject = stream;
   			    video6.mozSrcObject = stream;

   			  } else {
   			    var vendorURL = window.URL || window.webkitURL;
   			    video.src = vendorURL.createObjectURL(stream);
   			    video2.src = vendorURL.createObjectURL(stream);
   			    video3.src = vendorURL.createObjectURL(stream);
   			    video4.src = vendorURL.createObjectURL(stream);
   			    video5.src = vendorURL.createObjectURL(stream);
   			    video6.src = vendorURL.createObjectURL(stream);
   			  }
   			  video.play(); video2.play(); video3.play(); video4.play(); video5.play(); video6.play();
   		},
   		function(err) {
   			  console.log("An error occured! " + err);
    	}
  		);

		video.addEventListener('canplay', function(ev){
		  if (!streaming) {
		    height = width;
		    height2 = width2; 
		    height3=width3;
		    height4=width4; 
		    height5=width5; 
		    height6=width6; 

		    video.setAttribute('width', width);
		    video.setAttribute('height', height);
		    video2.setAttribute('width', width2);
		    video2.setAttribute('height', height2);
		    video3.setAttribute('width', width3);
		    video3.setAttribute('height', height3);
		    video4.setAttribute('width', width4);
		    video4.setAttribute('height', height4);
		    video5.setAttribute('width', width5);
		    video5.setAttribute('height', height5);
		    video6.setAttribute('width', width6);
		    video6.setAttribute('height', height6);		    
		    canvas.setAttribute('width', width);
		    canvas.setAttribute('height', height);
		    streaming = true;
		  }
		}, false)

		function takepicture() {
		  canvas.width = width-200;
		  canvas.height = height-200;
		  canvas.getContext('2d').drawImage(video, 0, 0, width, height);
		  var data = canvas.toDataURL('image/png');
		  photo.setAttribute('src', data);
		}


		/*===SCROLL===*/ 

		$(window).scroll(function(){
			var st = $(this).scrollTop(); 
			var scrollDistY = $(window).scrollTop(); 


			if (i>=360){i=0;} else if (i<=0){i=360;}
			if (j>=360){j=0;} else if (j<=0){j=360;}
			if (k>=360){k=0;} else if (k<=0){k=360;}
			if (l>=360){l=0;} else if (l<=0){l=360;}
			if (m>=360){m=0;} else if (m<=0){m=360;}
			if (n>=360){n=0;} else if (n<=0){n=360;}

			$('#c1').css('-webkit-transform','rotate('+i+'deg)');
			$('#c2').css('-webkit-transform','rotate(-'+j+'deg)');
			$('#c3').css('-webkit-transform','rotate('+k+'deg)');
			$('#c4').css('-webkit-transform','rotate(-'+l+'deg)');
			$('#c5').css('-webkit-transform','rotate('+m+'deg)');
			$('#c6').css('-webkit-transform','rotate(-'+n+'deg)');
			if (st>lastScrollTop){
				i+=1;
				j+=3;
				k+=5;
				l+=10; 
				m+=15; 
				n+=25


			} else {
				i-=1;
				j-=3;
				k-=5;
				l-=10; 
				m-=15; 
				n-=25

			}
			lastScrollTop=st; 

			if (scrollDistY>=(documentHeight-getScrollBarHeight())){
				$(window).scrollTop(0);
			}

			if (scrollDistY<=0){
				$(window).scrollTop(documentHeight-getScrollBarHeight());
			}

		})


		});

	</script>
</head> 
<body>
	
	<div class="container" id="c1"><video class="videoBox" id="video"></video></div>
	<div class="container" id="c2"><video class="videoBox" id="video2"></video></div>
	<div class="container" id="c3"><video class="videoBox" id="video3"></video></div>
	<div class="container" id="c4"><video class="videoBox" id="video4"></video></div>
	<div class="container" id="c5"><video class="videoBox" id="video5"></video></div>
	<div class="container" id="c6"><video class="videoBox" id="video6"></video></div>

	<canvas id="canvas"></canvas>

</body>
</html>