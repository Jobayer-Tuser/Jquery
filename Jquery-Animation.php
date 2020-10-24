<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie-edge" />
	<title> Jquery Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<link rel="stylesheet" href="style.css" />

</head>

<body>

	<header>
		<h2>Jquery Practice</h2>
	</header>
	
	<div id="container">
		<h2 id="heading">Jquery Anmination</h2>
		
		<button id="btnFadeOut">Fade out</button>
		<button id="btnFadeIn">Fade In</button>
		<button id="btnFadeTog">Fade Toggle</button>
		
		<hr>
		
		<button id="btnSlideUp">Slide Up</button>
		<button id="btnSlideDown">Slide Down</button>
		<button id="btnSlideTog">Slide Toggle</button>
		<button id="btnStop">Stop</button>
		
		<hr>
		
		<div id="box"><h1>Hellow World</h1></div>
		
		<hr/>
		<button id="moveLeft">Move Left</button>
		<button id="moveRight">Move Right</button>
		<button id="moveAround">Move Around</button>
		<hr>
		
		<div id="box2">Hellow World</div>
		
		
	</div>
	
	
	<script src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
	 
		//this function is very good practice in jquery it means all the code will execute after the full content are ready
		$(document).ready(function(){
			$('#btnFadeOut').click(function(){
				//$('#box').fadeOut();
				//$('#box').fadeOut('fast');
				//$('#box').fadeOut('slow');
				$('#box').fadeOut(3000, function(){
					$('#btnFadeOut').text('Its Gone');
				});
				
			});
			
			$('#btnFadeIn').click(function(){
				$('#box').fadeIn(3000, function(){
					$('#box').text('Now Its Fade in');
				});
			});
			
			$('#btnFadeTog').click(function(){
				$('#box').fadeToggle(1000);
			});
			
			
			$('#btnSlideUp').click(function(){
				$('#box').slideUp(3000);
			});
			
			$('#btnSlideDown').click(function(){
				$('#box').slideDown(3000);
			});
			
			$('#btnSlideTog').click(function(){
				$('#box').slideToggle(3000);
			});
			
			$('#btnStop').click(function(){
				$('#box').stop();
			});
			
			$('#moveRight').click(function(){
				$('#box2').animate({
					left: 500,
					height: '300px',
					width: '300px',
					opacity: '0.5'
				});
			});
			
			$('#moveLeft').click(function(){
				$('#box2').animate({
					left: 0,
					height: '100px',
					width: '100px',
					opacity: '1'
				});
			});
			
			$('#moveAround').click(function(){
				var box = $('#box2');
				
				box.animate({
					left: 300
				});
				box.animate({
					top: 300
				});
				box.animate({
					left: 0,
					top:300
				});
				box.animate({
					left: 0,
					top: 0
				});
			});
			
		});
	
	
	</script>


</body>