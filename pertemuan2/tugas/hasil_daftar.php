<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftar</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" style="background-color:#F8F9FA;border-radius: 10px;">
            <h2 class="text-center">Data Pendaftar</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>gd chix</td>
                        <td>gdchix@gmail.com</td>
                        <td>bogor</td>
                        <td>+6287777776665</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>karen</td>
                        <td>karen02@gmail.com</td>
                        <td>Jakarta</td>
                        <td>+628988655765</td>
                    </tr>

                    <?php
                    
                    /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				    */
                   

                    if (isset($_POST['proses'])){
                      // Variable

                        $nama_lengkap = $_POST['nama_lengkap'];
                        $email = $_POST['email'];
                        $alamat = $_POST['alamat'];
                        $telepon = $_POST['telepon'];

                        ?>

                    <!-- Menampilkan Data -->

                        <tr>
                            <td>3</td>
                            <td><?php echo $nama_lengkap?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $alamat?></td>
                            <td><?php echo $telepon?></td>
                        </tr>
                        <?php
                      }
                      ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>