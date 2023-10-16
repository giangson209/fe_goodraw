<?php include 'header.php';?>
<style>
	footer {
		display: none;
	}
	main {
		overflow: hidden;
	}
</style>
<main>
	<section class="box-gallery">
		<div class="container">
			<div class="content-slide-gallery">
				<div class="title-slide-vote">
					<div class="icon"><img src="images/top-vote.svg" class="img-fluid" alt=""></div>
					<span>TOP VOTE</span>Community gallery
				</div>
				<div class="content-slider">
					<div class="slider-hot-nav">
						<div class="slide-top slider-nav">
							<?php
								for ($x = 0; $x <= 7; $x++) { ?>
									<div class="item-slide">
										<div class="item-avr"><img src="images/slide.jpg" class="img-fluid w-100" alt=""></div>
									</div>
								<?php }
							?>
						</div>
					</div>
					<div class="slide-bot">
						<div class="slider-for">
							<?php
								for ($x = 0; $x <= 7; $x++) { ?>
									<div class="item-slide">
										<div class="item-for">
											<div class="avr"><img src="images/slide.jpg" class="img-fluid w-100" alt=""></div>
											<div class="icon-screen"><img src="images/screen.svg" class="img-fluid" alt=""></div>
											<div class="heart">
												<span>25</span><img src="images/heart.svg" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								<?php }
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="view-all all-top-view">
				<a href="">
					<img src="images/serch.svg" class="img-fluid" alt=""><span>VIEW ALL</span>
				</a>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>


 