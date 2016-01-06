<?php
$request = 'http://api.openweathermap.org/data/2.5/weather?q=Seattle,us&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0';
$response = file_get_contents($request);
$json = json_decode($response);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather</title>
</head>
<body>
	<h1>HELLO WORLD!</h1>
</body>
</html>