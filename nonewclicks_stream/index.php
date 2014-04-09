<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>no clicking</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script>

	$(function() {
    var move = [];
    var intervalID; 
    var moveInt=0;

    function record() {
        $(document).mousemove(function(e) {
            move.push({
                x: e.pageX,
                y: e.pageY
            });
        });

    }

	function play(){
        
        $('body').append('<div class="cursor" id="pointer_'+moveInt+'"></div>');
        var $replay = $('.cursor#pointer_'+moveInt),
            pos, i = 0,
            len = move.length,
            t;

        (function anim() {
            pos = move[i];
            $replay.css({
                top: (pos.y),
                left: (pos.x)
            });

            i++;

            if (i === len) {
                // move.length=0;
                clearTimeout(t);
            } else {
                t = setTimeout(anim, 10);

            }
        })()
    }

    record();


	intervalID=setInterval(function(){
        moveInt++;
		play();
	},100)

	});
	</script>
</head> 
<body>

	<div class="container">	
		<h1>ETERNAL CURSOR</h1>
		<h1>(保存您的点击)</h1>

		<p>Your presence is fleeting</p>
        <p>Move forever</p>
        <p>Save your self</p>
	</div>

</body>
</html>