<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Activity Score - STTNF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<style>
			body{
				margin:10px;
			}
		</style>
    </head>
	<body>
		<?php
			/**
			 * Task 2
			 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
			 * Luas, Keliling dan Volume
			 * p = 29, l = 16, t = 7
			 */

			// code.

		require_once 'class_balok.php';

		$balok_pertama = new Balok(29, 16, 7);
		echo "<br>Balok pertama memiliki p = 29, l = 16, t = 7";
		echo '<br>Luas balok pertama = '.$balok_pertama->getLuas();
		echo '<br>Keliling balok pertama = '.$balok_pertama->getKeliling();
		echo '<br>Volume Balok 1 = '.$balok_pertama->getVolume();
		echo '<br>';
		$balok_kedua = new Balok(10, 15, 40);
		echo "<br>Balok kedua memiliki p = 10, l = 15, t = 40";
		echo '<br>Luas balok kedua = '.$balok_kedua->getLuas();
		echo '<br>Keliling balok kedua = '.$balok_kedua->getKeliling();
		echo '<br>Volume Balok kedua = '.$balok_kedua->getVolume();
		echo '<br>';
		$balok_ketiga = new Balok(18, 52, 17);
		echo "<br>Balok ketiga memiliki p = 18, l = 52, t = 17";
		echo '<br>Luas balok ketiga = '.$balok_ketiga->getLuas();
		echo '<br>Keliling balok ketiga = '.$balok_ketiga->getKeliling();
		echo '<br>Volume Balok ketiga = '.$balok_ketiga->getVolume();
		echo '<br>';
		$balok_keempat = new Balok(30, 1, 33);
		echo "<br>Balok keempat memiliki p = 30, l = 1, t = 33";
		echo '<br>Luas balok keempat = '.$balok_keempat->getLuas();
		echo '<br>Keliling balok keempat = '.$balok_keempat->getKeliling();
		echo '<br>Volume Balok keempat = '.$balok_keempat->getVolume();
		?>
	</body>
</html>