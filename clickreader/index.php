<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SuperClickReader</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>
        $(document).ready(function(){
            
            $('.content').hide();

            var intervalID;
            var originalString = 'A single click or click is the act of pressing a computer mouse button once without moving the mouse. Single clicking is usually a primary action of the mouse. Single clicking, by default in many operating systems, selects (or highlights) an object while double-clicking executes or opens the object. The single click has many advantages over double click due the reduced time needed to complete the action. The single-click or one-click phrase has also been used to apply to the commercial field as a competitive advantage. The slogan "single click" or "one click" has become very common to show clients the ease of use of their services.';

            var userText =''; 
            var userTextSplit ='';

            var splitString = originalString.split(" ");
            var stringPos = 0; 

            var screenHeight = $(document).height();
            var screenWidth = $(document).width(); 

            function moveButton(){
                var randomX = Math.floor(Math.random()*(screenWidth-50));
                var randomY = Math.floor(Math.random()*(screenHeight-10));

                $('#readMore').css('top',randomY);
                $('#readMore').css('left',randomX);
            }

            moveButton();

            $('#readMore').click(function(){
                stringPos++;
                if ((userTextSplit.length)>0){
                    $('.wordContainer').empty(); 
                    $('.wordContainer').append("<h1>"+userTextSplit[stringPos]+"</h1"); 
                } else {
                $('.wordContainer').empty(); 
                $('.wordContainer').append("<h1>"+splitString[stringPos]+"</h1");
                }
                moveButton();
            })

            $('#submitButton').click(function(){
                $('.introContainer').hide();
                $('.content').show();

                userText = $('#textInput').attr('value'); 
                userTextSplit = userText.split(" ");
            })

            $('#sampleButton').click(function(){
                $('.introContainer').hide();
                $('.content').show();
            })






        });
	</script>
</head> 
<body>
    <div class="introContainer">
        <h1>Welcome to SuperClickReader. Please input your text to begin SuperClickReading</h1>
        <h1>欢迎你来 SuperClickReader. 请输入您 SuperClickRead 的文字</h1>

        <input id="textInput" type="text">  
        <button id="submitButton">SuperClickReadMe &#9996;</button>
        <button id="sampleButton">Sample? &#9993;</button>

    </div>
<div class="content">
    <div class="wordContainer">
    
    </div>
    <button id="readMore">Read more...</button>

</div>
</body>
</html>