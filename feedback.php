 <!-[if IE]>
	<script src="http://html5shiv.googlecode.com/sun/trunk/html5.js">
	</script>
<![endif]->

<! DOCTYPE html>
<html lang="ru">
<head>
	<title>Связь</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="stylez/styles.css">
	<link rel="shortcut icon" href="imagez/icon.png">
	<meta name="author" content="Sviridov Vlad">
	<meta name="copyright" content="Sviridov Vlad">
</head>
 <?php
	require_once "header.php";
?> 
<div id="content">
	<h1 id="center">Обратная связь</h1> 
		<form action = "request.php" method ="post">
			<p id="center">
				<label>Ваше имя: <input type = 'text' name = "name"></label>
			</p>
			<p id="center">
				<label>Ваш e-mail: <input type = "email" name = "email"></label>
			</p>
			<p id="center">
				<label>Ваше сообщение</label>
				<br />
				<textarea name = "message" id="send_text"></textarea>
			</p>
			<p id="center">
				<input type = "submit" value = "Отправить">
			</p>
		</form>						
	
</div>
<?php
	require_once "footer.php";
?> 