<?php include 'header.php';?>
<main class="main-footer">
	<section class="box-gallery">
		<div class="container">
			<div class="title text-center">
				<span>TOP VOTE</span>
				<svg width="1182" height="58" viewBox="0 0 1182 58" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1181.45 57.9501H0.28125V46.8002C0.28125 21.1802 21.0513 0.410156 46.6713 0.410156H1135.05C1160.67 0.410156 1181.44 21.1802 1181.44 46.8002V57.9501H1181.45Z" fill="#CA2026"/>
				</svg>
			</div>
			<div class="list-gallery">
				<div class="row">
					<?php
					for ($x = 0; $x <= 7; $x++) { ?>
						<div class="col-md-3">
							<div class="item-gallery">
								<div class="avarta">
									<div class="avr"><a href=""><img src="images/gall.jpg" class="img-fluid w-100" alt=""></a></div>
									<div class="icon"><img src="images/screen.svg" class="img-fluid" alt=""></div>
								</div>
								<div class="info">
									<div class="txt-left">
										<h3><a href="">Mua thu Hanoi 1972 </a></h3>
										<div class="icon"><img src="images/user.svg" class="img-fluid" alt=""></div>
									</div>
									<div class="heart">
										<span>25</span>
										<div class="icon"><img src="images/heart.svg" class="img-fluid" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					<?php }
					?>
				</div>
			</div>
			<div class="pagination">
				<ul>
					<li><a href=""><img src="images/arr-left.svg" class="img-fluid" alt=""></a></li>
					<li><a href="" class="active">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3 </a></li>
					<li><a href=""><img src="images/arr-right.svg" class="img-fluid"></a></li>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>


 