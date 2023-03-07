<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" style="background-color:#F8F9FA;border-radius: 10px;">
            <h3>Form Hasil</h3>
            <?php
            // Cek apakah form telah di-submit? Jika ya, maka tampilkan
            if (isset($_POST['proses'])) {
                // Variable
                $nama_siswa = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];

                $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

                // Menampilkan Data
                echo '<br>Nama : ' . $nama_siswa;
                echo '<br>Mata Kuliah : ' . $mata_kuliah;
                echo '<br>Nilai UTS : ' . $nilai_uts;
                echo '<br>Nilai UAS : ' . $nilai_uas;
                echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;
                echo '<hr>';
                echo 'Rata-rata : ' . $total_nilai;
                echo '<hr>';
            }
            ?>
        </div>
    </div>

</body>

</html>