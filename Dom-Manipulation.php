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
		<h2 id="heading">Dom Manipulation</h2>
		
		<button id="btn1">Button 1</button>
		<p class="para1">This is a paragraph</p>
		<p class="para2">This is another paragraph</p>
		
		<div class="myDiv"></div>
		<input type="text" id="newItem">
		<ul id="list">
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item</li>
			<li>List Item</li>
		</ul>
		
		<a href="https://google.com">Google</a>
		
		<ul id="users"></ul>
	</div>
	
	
	<script src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
	 
		//this function is very good practice in jquery it means all the code will execute after the full content are ready
		$(document).ready(function(){
		/* 	$('p.para1').css('color', 'red');
			$('p.para1').css({
				color: 'red',
				background: '#ccc',
				
			});
			
			$('p.para2').addClass('myClass');
			//$('p.para2').removeClass('myClass');
			
			$('#bnt1').click(function(){
				$('p.para2').toggleClass('.myClass');
			});
			
			$('#myDiv').text('Hellow World');
			$('#myDiv').html('<h3>Hellow World</h3>');
			alert($('myDiv').text());
			
			$('ul').append('<h1>Appen List Item</li>');
			$('ul').prepend('<h1>Prepend List Item</li>');
			
			$('.para1').appendTo('.para2');
			$('.para1').prepend('.para2');
			
			$('.ul').before('<h4>Hellow</h4>');
			$('.ul').after('<h4>World</h4>');
			
			$('ul').empty();//remove the inside content of ul
			$('ul').detach();//remove the full ul content
		
			$('a').attr('target', '_blank');
			$('a').removeAttr('target');
			
			$('p').wrap('<h1>');//this convert p tag to h1 tag or put int inside h1 tag that wrap mean
			$('p').wrapAll('<h1>');
			*/
			$('#newItem').keyup(function(e){
				var code = e.which;
				
				if(code == 13){
					e.preventDefault();
					$('ul').append('<li>'+e.target.value+'<li>' );
				}
			});
			
			var myArray = ['Brad', 'Kelly', 'Nate', 'Jose'];
			
			$.each(myArray, function(i, val){
				console.log(val);
				$('#users').append('<li>'+ val +'</li>');
			})
			
			var newArr = $('ul#list li').toArray();
			$.each(newArr, function(i, val){
				console.log(val.innerHTML);
			});
		});
	
	
	</script>


</body>