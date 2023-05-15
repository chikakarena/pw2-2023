<?php
error_reporting(0);
include 'database.php';
$data = mysqli_query($conn, "SELECT no_telepon, email, alamat FROM tb_admin WHERE admin_id = 1");
?>
<section id="new-arrivals" class="new-arrivals">
	<div class="container">
		<div class="section-header">
			<h2>Kitchenset Baru</h2>
		</div><!--/.section-header-->
		<div class="new-arrivals-content">
			<div class="row">
				<?php
				$produk = mysqli_query($conn, "SELECT * FROM product WHERE stock > 0 ORDER BY product_id ASC");
				if (mysqli_num_rows($produk) > 0) {
					while ($p = mysqli_fetch_array($produk)) {
						?>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="assets/images/produk/<?php echo $p['produk_image'] ?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<a href="detail-produk.php?id=<?php echo urlencode($p['product_id']); ?>">
									<div class="new-arrival-cart">
										<p>
										More Info
										</p>
									</div>
									</a>
								</div>
							</a>
								<p class="#">
									<?php echo substr($p['name'], 0, 30) ?>
								</p>
								<p class="arrival-product-price">Rp.
									<?php echo number_format($p['sell_price']) ?>
								</p>
							</div>
						</div>
					<?php }
				} else { ?>
					<p>Produk tidak ada</p>
				<?php } ?>
			</div>
		</div>
		</div><!-- container -->
		
</section>