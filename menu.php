<!DOCTYPE html>
<html>

	<head>
		<?php include('head.php'); ?>
	</head>

	<body >
		<style>
			.jlist {
				padding-top: 40px;
			}

			.jcont li {
				display: block;
				margin-bottom: 10px;
			}

			li a {
				color: #000000;
				font-size: 14px;
			}	/* background: #000; */
			}
		</style>
		
		<div class="page_wrapper">
			<div class="page_wrapper_content">
				<section class="jlist">
					<div class="container">
					<div class="jcont">
						<ul>
							<li>
								<a href="index.php" target="_blank">
									Index
								</a>
							</li>
							
							<li>
								<a href="404.php" target="_blank">
									404
								</a>
							</li>
							<li>
								<a href="about.php" target="_blank">
									About
								</a>
							</li>
							<li>
								<a href="cabinet.php" target="_blank">
									cabinet
								</a>
							</li>
							<li>
								<a href="cabinet-bonus.php" target="_blank">
									cabinet-bonus
								</a>
							</li>
							<li>
								<a href="cabinet-bonuscard-change.php" target="_blank">
									cabinet-bonuscard-change
								</a>
							</li>
							<li>
								<a href="cabinet-bonuscard.php" target="_blank">
									cabinet-bonuscard
								</a>
							</li>
							<li>
								<a href="cabinet-edit.php" target="_blank">
									cabinet-edit
								</a>
							</li>
							<li>
								<a href="cabinet-order-info.php" target="_blank">
									cabinet-order-info
								</a>
							</li>
							<li>
								<a href="cart.php" target="_blank">
									cart
								</a>
							</li>
							<li>
								<a href="cart-empty.php" target="_blank">
									cart-empty
								</a>
							</li>
							<li>
								<a href="catalog.php" target="_blank">
									catalog
								</a>
							</li>
							<li>
								<a href="catalog-item.php" target="_blank">
									catalog-item
								</a>
							</li>
							<li>
								<a href="catalog-item-select.php" target="_blank">
									catalog-item-select
								</a>
							</li>
							<li>
								<a href="category.php" target="_blank">
									category
								</a>
							</li>
							<li>
								<a href="gallery.php" target="_blank">
									gallery
								</a>
							</li>
							<li>
								<a href="news.php" target="_blank">
									news
								</a>
							</li>
							<li>
								<a href="news-item.php" target="_blank">
									news-item
								</a>
							</li>
							<li>
								<a href="order.php" target="_blank">
									order
								</a>
							</li>
							<li>
								<a href="order-ok.php" target="_blank">
									order-ok
								</a>
							</li>
							<li>
								<a href="search.php" target="_blank">
									search
								</a>
							</li>
							<li>
								<a href="user-login.php" target="_blank">
									user-login
								</a>
							</li>
							<li>
								<a href="user-registration.php" target="_blank">
									user-registration
								</a>
							</li>
							<li>
								<a href="user-registration2.php" target="_blank">
									user-registration2
								</a>
							</li>
							<li>
								<a href="user-registration3.php" target="_blank">
									user-registration3
								</a>
							</li>
							<li>
								<a href="user-registration4.php" target="_blank">
									user-registration4
								</a>
							</li>
							<li>
								<a href="user-registration5.php" target="_blank">
									user-registration5
								</a>
							</li>
							<li>
								<a href="user-registration6.php" target="_blank">
									user-registration6
								</a>
							</li>
							
						</ul>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal1">modal1</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal2">modal2</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal3">modal3</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal4">modal4</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal5">modal5</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal6">modal6</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal7">modal7</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal8">modal8</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal9">modal9</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal10">modal10</button>
						<button style="border:1px solid black; margin-top: 20px; margin-bottom: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#modal11">modal11</button>

						
					</div></div>
				</section>
			</div>
			<?php include('modal.php'); ?>
		</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src='js/jquery.mCustomScrollbar.concat.min.js'></script>
		<script src="js/swiper.js"></script>
		<script src="js/index.js"></script>
	</body>

</html>