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
		<h2 id="heading">Mouse Events</h2>
		
		<button class="btn-class" id="btn1">Button 1</button>
		<button id="btn2">Button 2</button>
		
		<p style="display: none" class="para-class" id="para1">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			<span>It has survived not only five centuries,</span> but also the leap into electronic typesetting, remaining essentially unchanged. 
			It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		
		<h1 id="coords"></h1>
		
		
		<hr/>
		<form id="form">
			<label>Name</label>
			<input id="name" name="name" type="text"/>
			
			<label>Email</label>
			<input id="email" name="email" type="text"/>
			
			<label>Gender</label>
			<select id="gender" name="gender">
				<option>male</option>
				<option>female</option>
			</select>
			
			<button type="submit" name="submit">Submit</button>
		
		</form>
		
	</div>
	
	
	<script src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		//this function is very good practice in jquery it means all the code will execute after the full content are ready
		$(document).ready(function(){
			
			/*===== [on click method]====*/
				$('#btn1').click(function(){
					alert('Button Clicked');
				});
				$('#btn2').on('click', function(){
					alert('Button 2 Clicked');
				});
			
			
			/* =====['hide and show method']===*/
				$('#btn1').click(function(){
					$('#para1').show();
				});
				$('#btn2').click(function(){
					$('#para1').hide();
				});
			
			/* ==== ['Toggle Method for same button'] ===*/
			
				$('#btn1').click(function(){
					$('#para1').toggle();
				});
				$('#btn2').dblclick(function(){
					$('#para1').toggle();
				});
			
			/* ==== ['hover Method for same button'] ===*/
			
				$('#btn2').hover(function(){
					$('#para1').toggle();
				});
				
				//Hover method is combination of two bellow method
				
				$('#btn1').on('mouseenter', function(){
					//$('#para1').toggle();
					$('#para1').show();
				});
				
				
				$('#btn1').on('mouseleave', function(){
					//$('#para1').toggle();
					$('#para1').hide();
				});
				
				$('#btn1').on('mousemove', function(){
					$('#para1').toggle();
					$('#para1').show();
					$('#para1').hide();
				});
				
				$('#btn1').on('mouseup', function(){
					$('#para1').toggle();
				});
				
				$('#btn1').on('mousedown', function(){
					$('#para1').toggle();
				});
			
			
			/* ==== ['deafult [e] Method for same button'] ===*/
			
				$('#btn1').click(function(e){
					alert(e.currentTarget.id);
					alert(e.currentTarget.inerHTML);
					alert(e.currentTarget.outerHTML);
					alert(e.currentTarget.className);
				});
				
				
				//finding mouse cordinate
				$(document).on('mousemove', function(e){	
					$('#coords').html('Coords: Y:' +e.clientY+ ' X: '+e.clientX);					
				});
			
			
			
			/* ==== ['form focus '] ===*/
			$('input').focus(function(){
				$(this).css('backgroud', 'pink');
			});
			
			$('input').blur(function(){
				$(this).css('backgroud', 'white');
			});
			
			$('input').keyup(function(e){
				console.log(e.target.value);
			});
			
			
			$('select#gender').change(function(e){
				alert(e.target.value);
			});
			
			$('#form').submit(function(e){
				e.preventDefault();
				var name = $('input#name').val();
				var email = $('input#email').val();
				console.log(name);
			});
			
		});
	
	
	</script>


</body>