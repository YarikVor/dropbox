<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body style="margin: 0 auto; width: 854px">
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas2"></canvas>
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas1"></canvas>
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas"></canvas>
		<script src="sc.js"></script>
		<div>
			<?php
				$filename = 'somefile.txt';
				$fd = fopen("$filename", 'x+') or die("не удалось создать файл");
				$str = "Привет мир";
				fwrite($fd, $str);
				fclose($fd);
			?>
		</div>
	</body>
</html>
