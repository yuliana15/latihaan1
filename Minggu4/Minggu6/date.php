<?php
//date untuk menampilkan tanggal dengan format tertentu

		function Salam ($waktu, $nama)
		{
			return "Selamat $waktu, $nama!";
		}
		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>

			<meta charset="UTF-8">
			<meta nama="viewport"
			content="width=device-width,initial-scale=1.0">
			<title> latihan function </title>
		</head>
		<body>
			<h1><?= salam("pagi","SITI YULIANA") ?></h1>
		</body>
		</html>
	?>	