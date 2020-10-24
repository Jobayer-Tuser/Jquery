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
		<h1>Jquery Practice</h2>
	</header>
	
	<div id="container">
		<h2 id="heading1">Heading One</h2>
		<p id="para1">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			<span>It has survived not only five centuries,</span> but also the leap into electronic typesetting, remaining essentially unchanged. 
			It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			
		</p>
		
		
		<h2 class="heading2" id="heading2">Heading One</h2>
		<p class="para2" id="para2">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			<span>It has survived not only five centuries,</span> but also the leap into electronic typesetting, remaining essentially unchanged. 
			It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			
		</p>
		
		<div>
			<ul class="" id="list">
				<li>List Item 1</li>
				<li>List Item 2</li>
				<li>List Item 3</li>
				<li>List Item 4</li>
				<li>List Item 5</li>
				<li>List Item 6</li>
				<li>List Item 7</li>
				<li>List Item 8</li>
			<ul>
		</div>
		
		<div class="group-input">
			<input type="submit" value="submit"/>
			<input type="button" value="Button 1"/>
			<input type="text" />
		<div>
		
		<div class="group-link">
			<a href="http://google.com" target="_blank"> Google </a>
			<a href="http://yahoo.com" target="_blank"> Yahoo </a>
		<div>
	</div>

	<script src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		//Jquery Selector
		//$('*').hide();
		//$('h2').hide();
		//$('h2#heading1').hide();
		//$('.heading2').hide();
		$('p span').css('color' , 'red');
		$('ul#list li:first').css('color', 'red');
		$('ul#list list:last').css('color', 'green');
		$('ul#list li:even').css('background-color', '#ccccc');
		$('ul#list li:odd').css('background-color', 'yellow');
		$('ul#list li:nth-child(3n)').css('list-style', 'none');
		
		//atrribute as a selector
		$('.group-input').css('margin', '30px');
		//$(':submit').hide();
		//$(':button').hide();
		$(':text').hide();
		
		//link as a selector
		$('.group-link').css('margin-top', '30px');
		$('[href]').css('color', 'red');
		$('a[href="http://yahoo.com"]').css('color', 'green');
	
	
	</script>


</body>