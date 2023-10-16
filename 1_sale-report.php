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
			<div class="content-detail-gallery detail-cart">
				<div class="title text-center">
					<span>Sales repoted</span>
					<svg width="1182" height="58" viewBox="0 0 1182 58" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1181.45 57.9501H0.28125V46.8002C0.28125 21.1802 21.0513 0.410156 46.6713 0.410156H1135.05C1160.67 0.410156 1181.44 21.1802 1181.44 46.8002V57.9501H1181.45Z" fill="#1A3A89"/>
					</svg>
				</div>
				<div class="content-cart" style="background: #00345E">
					<div class="filter-top-cart">
						<div class="filter-left">
							<ul>
								<li>
									<label for="">Total number of orders</label>
									<span>96</span>
								</li>
								<li>
									<label for="">Total amount sold</label>
									<span>24.000.000</span>
								</li>
							</ul>
						</div>
						<div class="filter-right">
							<ul>
								<li><span>Filter by</span></li>
								<li>
									<select name="" id="">
										<option value="">This month</option>
										<option value="">This week</option>
									</select>
								</li>
							</ul>
						</div>
					</div>
					<div class="table-cart table-report">
						<?php
							for ($x = 0; $x <= 10; $x++) { ?>
								<div class="item-cart item-cart-sale">
									<div class="prd-cart mw-100" style="flex: 0 0 100%;">
										<div class="avarta">
											<div class="avr"><a href=""><img src="images/gall.jpg" class="img-fluid w-100" alt=""></a></div>
										</div>
										<div class="info">
											<h3><a href="" class="name-sale">Order number 1</a></h3>
											<ul>
												<li><a href="">Date of sale</a></li>
												<li><a href="">Quantity</a></li>
											</ul>
										</div>
									</div>
								</div>
						<?php	}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>


 