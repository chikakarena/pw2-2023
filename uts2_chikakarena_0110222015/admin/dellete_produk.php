<?php
    include '../database.php';

    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM product_type WHERE id = '".$_GET['id']."' ");
        echo '<script>window.location="tables.php"</script>';
    }

    if(isset($_GET['id'])){
        $produk = mysqli_query($conn, "SELECT produk_image FROM product WHERE product_id = '".$_GET['id']."'");
        $p = mysqli_fetch_object($produk);

        unlink('../assets/images/produk/'.$p->produk_image);
        $delete = mysqli_query($conn, "DELETE FROM product WHERE product_id = '".$_GET['id']."' ");
        echo '<script>window.location="tables.php"</script>';
    }
?>