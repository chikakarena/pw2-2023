<?php
include 'database.php';
$data = mysqli_query($conn, "SELECT no_telepon, email, alamat FROM tb_admin WHERE admin_id = 1");
?>
<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>Member Card</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
                    <?php
                    $member = mysqli_query($conn, "SELECT * FROM card ORDER BY id ASC LIMIT 3");
				    if(mysqli_num_rows($member) > 0){
					while($c = mysqli_fetch_array($member)){
					?>
					<div class="col-sm-4">
						<div class="single-blog">
								<div class="single-blog-img">
                                <img src="assets/images/card/<?php echo $c['card_image'] ?>" alt="">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
                                    <p><a href="#"><?php echo $c['name'] ?></a></p>
                                    <p class="arrival-product-price">Rp.
									<?php echo number_format($c['member_fee']) ?>
								</p>
								</div>
                        </div>
                    </div>
                    <?php }}else{ ?>
                    <p>Member tidak ada</p>
                    <?php } ?>
					</div>
				</div>
			</div><!--/.container-->
		</section><!--/.blog-->