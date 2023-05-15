<?php
error_reporting(0);
include_once "database.php";
$data = mysqli_query($conn, "SELECT no_telepon, email, alamat FROM tb_admin WHERE admin_id = 1");

$produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."' ");
$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once "components/header.php"
?>
<!-- navbar -->
<?php
include_once "components/navbar.php";
?>
<section id="new-arrivals" class="new-arrivals">
	<div class="container">
		<div class="section-header">
			<h2>Detail Kitchenset</h2>
		</div><!--/.section-header-->
		<div class="new-arrivals-content">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="single-new-arrival">
						<div class="single-new-arrival-bg">
							<img src="assets/images/produk/<?php echo $p->produk_image ?>" alt="new-arrivals images">
							<div class="single-new-arrival-bg-overlay"></div>
							</div>
							<p class="#">
								<?php echo $p->name ?>
							</p>
							<p class="arrival-product-price">Rp.
								<?php echo number_format($p->sell_price) ?>
							</p>
						</div>
					</div>
					<p>Deskripsi : <br>
                    <?php echo $p->deskripsi ?>
					</p>
					<a class="btn btn-primary" href="cart.php">Checkout</a>
			</div>
		</div>
	</div><!-- container -->
</section>
<?php
include_once "components/footer.php"
?>
<?php
include_once "components/scrip.php"
?>
</html>