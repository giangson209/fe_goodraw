<?php include 'header.php';?>
<style>
	footer {
		display: none;
	}
</style>
<main>
	<section class="box-gallery">
		<div class="social-home">
			<ul>
				<li><a href="" target="_blank"><img src="images/sc-1.svg" class="img-fluid" alt=""></a></li>
				<li><a href="" target="_blank"><img src="images/sc-2.svg" class="img-fluid" alt=""></a></li>
				<li><a href="" target="_blank"><img src="images/sc-3.svg" class="img-fluid" alt=""></a></li>
				<li><a href="" target="_blank"><img src="images/sc-4.svg" class="img-fluid" alt=""></a></li>
				<li><a href="" target="_blank"><img src="images/sc-5.svg" class="img-fluid" alt=""></a></li>
			</ul>
		</div>
		<div class="container">
			<div class="content-detail-gallery">
				<div class="title text-center">
					<span>SELL</span>
					<svg width="1182" height="58" viewBox="0 0 1182 58" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1181.45 57.9501H0.28125V46.8002C0.28125 21.1802 21.0513 0.410156 46.6713 0.410156H1135.05C1160.67 0.410156 1181.44 21.1802 1181.44 46.8002V57.9501H1181.45Z" fill="#1A3A89"/>
					</svg>
				</div>
				<div class="content-sell main-sell">
					<div class="head-sell">
						<ul>
							<li>Products</li>
							<li class="text-center">Quantity</li>
							<li class="text-center">Unit price</li>
						</ul>
					</div>
					<div class="table-sell">
						<div class="list-prd-sell">
							<?php
							for ($x = 0; $x <= 9; $x++) { ?>
								<ul>
									<li>
										<h1><a href="">Midautumn iceland 2023 </a></h1>
									</li>
									<li class="text-center">
										<div class="quantity">
											<div class="number-spinner">
		                                      <span class="ns-btn">
		                                              <a href="javascript:void(0)" data-dir="dwn"><span class="icon-minus">
		                                              	<svg width="21" height="4" viewBox="0 0 21 4" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M20.2397 0.719727H0.429688V3.42981H20.2397V0.719727Z" fill="white"/>
														</svg>
		                                              </span></a>
		                                      </span>
		                                      <input type="text" class="pl-ns-value" value="1">
		                                      <span class="ns-btn">
		                                              <a href="javascript:void(0)" data-dir="up"><span class="icon-plus">
		                                              	<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.9976 8.72021H0.1875V11.4303H19.9976V8.72021Z" fill="white"/>
															<path d="M11.4482 0.160156H8.73828V19.9701H11.4482V0.160156Z" fill="white"/>
														</svg>
		                                              </span></a>
		                                      </span>
		                                    </div>
										</div>
									</li>
									<li class="text-center">
										<div class="price">250.000</div>
									</li>
								</ul>
							<?php }
							?>
						</div>
					</div>
					<div class="add-product text-right"><a href="">Add products</a></div>
					<div class="bottom-sell">
						<div class="check-sell">
							<ul>
								<li><span>Buy more</span></li>
								<li>
									<div class="item-check">
										<input type="checkbox" id="1002" class="c-sell"><label for="1002">Drawing brush</label>
									</div>
								</li>
								<li>
									<div class="item-check">
										<input type="checkbox" id="1003" class="c-sell"><label for="1003">Painting color</label>
									</div>
								</li>
							</ul>
						</div>
						<div class="btn-submit-sell text-right">
							<input type="submit" class="btn_submit" value="Submit">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>


 