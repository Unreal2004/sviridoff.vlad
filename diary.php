<!-[if IE]>
	<script src="http://html5shiv.googlecode.com/sun/trunk/html5.js">
	</script>
<![endif]->

<! DOCTYPE html>
<html lang="ru">
<head>
	<title>Дневник</title>
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
	<h1>Дневник тренировок</h1> 
	<table id="diary">
	<tr>
		<th colspan="7" id="center">Октябрь</th>
	</tr>
	<!--<tr>
		<td>пн</td>
		<td>вт</td>
		<td>ср</td>
		<td>чт</td>
		<td>пт</td>
		<td>сб</td>
		<td>вс</td>
	</tr>-->
		<script type="text/javascript">
			document.write("<tr>");
			for(var i =1; i <= 31; i++) {
				if((i-1) % 7 == 0) document.write("</tr><tr>");
				document.write("<td><a href=\"diary/2017/October/"+i+".php\" id=\"square_link\">" + i +"</a></td>");
			}
			document.write("</tr>");
		</script>
	</table>
	<table id="diary">
	<tr>
		<th colspan="7" id="center">Ноябрь</th>
	</tr>
	<!--<tr>
		<td>пн</td>
		<td>вт</td>
		<td>ср</td>
		<td>чт</td>
		<td>пт</td>
		<td>сб</td>
		<td>вс</td>
	</tr>-->
		<script type="text/javascript">
			document.write("<tr>");
			for(var i =1; i <= 30; i++) {
				if((i-1) % 7 == 0) document.write("</tr><tr>");
				document.write("<td><a href=\"diary/2017/November/"+i+".php\" id=\"square_link\">" + i +"</a></td>");
			}
			document.write("</tr>");
		</script>
	</table>
</div>
<?php
	require_once "footer.php";
?> 