<?php

  /*  
    Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $number = 1;
  $m_fruits = 
  
  [
    ["Nama" => "Pisang", "Warna" => "Kuning", "Stok" => 300, "Harga" => 18000, "Deskripsi" => "Pisang rasanya Manis, berbentuk panjang "],
    ["Nama" => "Kelengkeng", "Warna" => "Coklat", "Stok" => 100, "Harga" => 30000, "Deskripsi" => "Kelengkeng manis, berbentuk bulat dan kecil"],
    ["Nama" => "Melon", "Warna" => "Hijau", "Stok" => 200, "Harga" => 15000, "Deskripsi" => "Melon manis berair, berbentuk bulat dan besar"]
  ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /*  
            Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach ($m_fruits as $fruit) 
          {
            echo '<tr>';
            echo '<td>' . $number++ . '</td>';
            echo '<td>' . $fruit['Nama'] . '</td>';
            echo '<td>' . $fruit['Warna'] . '</td>';
            echo '<td>' . $fruit['Stok'] . '</td>';
            echo '<td>' . $fruit['Harga'] . '</td>';
            echo '<td>' . $fruit['Deskripsi'] . '</td>';
            echo '</tr>';
          }

        ?>

      </tbody>
    </table>
  </div>
</body>

</html>