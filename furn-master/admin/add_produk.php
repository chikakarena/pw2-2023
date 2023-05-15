<?php
    session_start();
    include '../database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        .input-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .box {
            background-color: #fff;
            padding: 15px;
            box-sizing: border-box;
            margin: 10px 0 25px 0;
        }

        .box::after {
            content: "";
            display: block;
            clear: both;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
   <!-- header -->
   
   <!-- konten  -->
   <div class="section">
    <div class="container">
        <h3>Tambah Buku</h3>
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="input-control" name="product_type" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM product_type ORDER BY id DESC ");
                        while ($r = mysqli_fetch_array($kategori)) {
                    ?>
                    <option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="name" placeholder="Nama Product" class="input-control" required>
                <input type="text" name="purchase_price" placeholder="Purchase_price" class="input-control" required>
                <input type="text" name="sell_price" placeholder="Sell_price" class="input-control" required>
                <input type="text" name="stock" placeholder="Stock" class="input-control" required>
                <input type="text" name="min_stock" placeholder="Minimum Stock" class="input-control" required>
                <input type="text" name="restock_id" placeholder="Restock" class="input-control" required>
                <input type="file" name="produk_image" class="input-control" required>
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    
                    //print_r($_FILES['gambar']);
                    //menampung inputan dari form
                    $kategori   = $_POST['product_type'];
                    $name       = $_POST['name'];
                    $purchase       = $_POST['purchase_price'];
                    $harga      = $_POST['sell_price'];
                    $deskripsi  = $_POST['deskripsi'];
                    $stock       = $_POST['stock'];
                    $min_stock       = $_POST['min_stock'];
                    $restock_id       = $_POST['restock_id'];

                    //menampung data file yang di uploud
                    $filename = $_FILES['produk_image']['name'];
                    $tmp_name = $_FILES['produk_image']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = $type1[1];

                    $newname = 'product'.time().'.'.$type2;

                    //menampung data format file yang diizinkan
                    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                    //validasi format file
                    if(!in_array($type2, $tipe_diizinkan)){
                        //jika format file tidak diizinkan
                        echo '<script>alert("Format tidak diixzinkan")</script>';

                    }else{
                        //jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                        //proses uploud file sekaligus insert ke database
                        move_uploaded_file($tmp_name, '../assets/images/produk/'.$newname);

                        $insert = mysqli_query($conn, "INSERT INTO product (product_id, name, purchase_price, sell_price, deskripsi, stock, min_stock, product_type_id, restock_id, produk_image) VALUES (
                            null,
                            '".$name."',
                            '".$purchase."',
                            '".$harga."',
                            '".$deskripsi."',
                            '".$stock."',
                            '".$min_stock."',
                            '".$kategori."',
                            '".$restock_id."',
                            '".$newname."'
                            ) ");

                        if($insert){
                            echo'<script>alert("simpan data berhasil")</script>';
                            echo '<script>window.location="tables.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    }

                    
                }
            ?>
        </div>
    </div>
   </div>

   <!-- footer -->
   <footer>
   <div class="container">
    <small>Copyright &copy; 2022 -</small>
   </div>
   </footer>
</body>
</html>