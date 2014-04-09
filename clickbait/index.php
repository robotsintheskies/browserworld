<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>click hero</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>
        $(document).ready(function(){
            
            var intervalID;

            var responsePhrases=["Good job!","Nice work!","Keep it up!","That's awesome!","You're the best!","Amazing work!","Yeah!","You're the bomb!","Hot stuff!","Easy!","Too good!","You're good at this!","Nice one!","Cool!","Dang!","Wow!!","Holy moly!","You've got it!","A+!","5 stars!","COOL!","Great attitude!","You win!","Stellar!","Unbelievable!","Great effort!","You're the boss!","Ballin'!","Well done!","Congratulations!","You've got what it takes!","You're a winner!","Oustanding achievement!","Congrats, pal!","Monumental!","How grand!","Superb!","You're a star!","Nice going, champ!","That was a gutsy move!","Keep up the hard work!","Didn't even break a sweat!","Brilliant!","Awesome!","Amazing!","You've got what it takes!","Movin' on up!","What skill!","Total pro!","What a pro!","You should be proud of yourself!","Phenomenal!","Reach for the stars!","Wonderful!","Wonderful work!","A++!","You're the bee's knees!","You're the cat's pajamas!","Victory!","So good!","Dope!","Impressive!","You're shining!","Keep shining!","A triumph!","Stellar job!","Unreal!","You're number one!","You're the best!","A star is born!","Cheers to you!","Grand!","Well-deserved!","You made it!","Hats off to you!","What a big day!","Genius!","OMG!","You're on top!","Admirable!","Incredible job!","Incredible effort!","Incredible!","Magical!","You're a wizard!","You've got the magic touch!","You had it in you!","You're having a field day!","You're doing great!","You're making waves!","Gold star!","You're special!","You're doing amazing!"]; 

            var phraseLength=responsePhrases.length;

            console.log(phraseLength);


            for (i=0;i<=1500;i++){
                    $('body').append("<button >Click me!</button>")
            }

            $('button').click(function(){
                ran=Math.floor(Math.random()*phraseLength);
                console.log(ran); 
                alert(responsePhrases[ran]);
            })


        });
	</script>
</head> 
<body>



</body>
</html>