<?php
include 'database.php';
$data = mysqli_query($conn, "SELECT no_telepon, email, alamat FROM tb_admin WHERE admin_id = 1");
?>
<section id="feature" class="feature">
	<div class="container">
		<div class="section-header">
			<h2>Kategori</h2>
		</div><!--/.section-header-->
		<div class="feature-content">
			<div class="row">
				<?php
				$kategori = mysqli_query($conn, "SELECT * FROM product_type ORDER BY id ASC");
				if (mysqli_num_rows($kategori) > 0) {
					while ($k = mysqli_fetch_array($kategori)) {
						?>
						<div class="col-md-2">
							<div class="single-feature-txt text-center">
								<img src="assets/images/icon/kateicon.png" width="50px" style="margin-bottom:5px;">
								<p><a href="./kategori_product.php?kate=<?php echo $k['id']?>">
										<?php echo $k['name'] ?>
									</a></p>
							</div>
						</div>
					<?php }
				} else { ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>
	</div><!--/.container-->

</section>