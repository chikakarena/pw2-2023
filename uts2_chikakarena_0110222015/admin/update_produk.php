<?php
    include '../database.php';

    $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);

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
   <!-- konten  -->
   <div class="section">
    <div class="container">
        <h3>Edit Produk</h3>
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="input-control" name="product_type" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM product_type ORDER BY id ASC ");
                        while ($k = mysqli_fetch_array($kategori)) {
                    ?>
                    <option value="<?php echo $k['id'] ?>" <?php echo ($k['id'] == $p->product_type_id)? 'selected':''; ?> ><?php echo $k['name'] ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="nama" placeholder="Nama Produk" class="input-control" value="<?php echo $p->name ?>" required>
                <input type="text" name="harga" placeholder="Harga" class="input-control" value="<?php echo $p->sell_price ?>" required>

                <img src="../assets/images/produk/<?php echo $p->product_image ?>" width="100px" alt="">
                <input type="hidden" name="product_image" value="<?php echo $p->product_image ?>">
                <input type="file" name="gambar" class="input-control" >
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->deskripsi ?></textarea>
                <select name="status" class="input-control">
                    <option value="">Pilih Status</option>
                    <option value="1" <?php echo ($p->status == 1)? 'selected':''; ?> >Aktif</option>
                    <option value="0" <?php echo ($p->status == 0)? 'selected':''; ?>>Tidak Aktif</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    
                    //menampung data inputan form
                    $kategori   = $_POST['product_type'];
                    $nama       = $_POST['name'];
                    $harga      = $_POST['sell_price'];
                    $deskripsi  = $_POST['deskripsi'];
                    $foto       = $_POST['product_image'];

                    //menampung data format file yang diizinkan
                    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                    //tampung data gambar yg baru
                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = $type1[1];

                    $newname = 'product'.time().'.'.$type2;

                    //jika admin ganti gambar
                    if($filename != ''){
                        //validasi format file
                        if(!in_array($type2, $tipe_diizinkan)){
                        //jika format file tidak diizinkan
                        echo '<script>alert("Format tidak diixzinkan")</script>';

                        }else{
                            unlink('./assets/produk/'.$foto);
                            move_uploaded_file($tmp_name, './assets/produk/'.$newname);
                            $namagambar = $newname;
                        }

                    }else{
                        //jika admin tidak ganti gambar
                        $namagambar = $foto;

                    }

                    //query update data produk
                    $update = mysqli_query($conn, "UPDATE product SET
                                              product_type_id = '".$kategori."',
                                              name = '".$nama."',
                                              sell_price = '".$harga."',
                                              deskripsi = '".$deskripsi."',
                                              product_image = '".$namagambar."',
                                              WHERE id = '".$p->id."' ");
                    if($update){
                        echo'<script>alert("simpan data berhasil")</script>';
                        echo '<script>window.location="tabels.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }                
                }
            ?>
        </div>
    </div>
   </div>

   <!-- footer -->
   <footer>
   <div class="container">
    <small>Copyright &copy; 2022 - .</small>
   </div>
   </footer>
</body>
</html>