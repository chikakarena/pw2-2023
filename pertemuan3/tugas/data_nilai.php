<?php include_once 'header.php' ?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>chika karena</td>
              <td>dasar dasar pemerograman</td>
              <td>90</td>
              <td>90</td>
              <td>95</td>
              <td>96</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require_once 'libfungsi.php';
                    if(isset($_POST['submit'])){
                        $nama_lengkap = $_POST ['full_name'];
                        $mata_kuliah = $_POST['course'];
                        $nilai_uts = $_POST['UTS_scores'];
                        $nilai_uas = $_POST ['UAS_scores'];
                        $nilai_tugas = $_POST ['assignment_value'];

                        $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
		                $ratarata = $total_nilai / 3;

                        $kelulusan = kelulusan($ratarata);
                        $grade = grade($ratarata);
                        $predikat = predikat($grade);
        ?>
        
            <div class="mt-4">
                <td> <?= 3 ?> </td>
                <td> <?= $nama_lengkap ?> </td>
                <td> <?= $mata_kuliah ?> </td>
                <td> <?= $nilai_uts ?> </td>
                <td> <?= $nilai_uas ?> </td>
                <td> <?= $nilai_tugas ?> </td>
                <td> <?= number_format ($ratarata, 2) ?> </td>
                <td> <?= $grade ?> </td>
                <td> <?= $predikat ?> </td>
                <td> <?= $kelulusan ?> </td>
            </div>

                <?php
                }
                ?>
      </tbody>
  </table>
</div>

<?php include_once 'footer.php' ?>