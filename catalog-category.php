<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); ?>
  <title>СТОЛОВЫЕ ПРИБОРЫ</title>
</head>
<body>
	
	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<div class="breadcrumbs">
				<div class="container">
				<h1 class="breadcrumbs__title">СТОЛОВЫЕ ПРИБОРЫ</h1>
					<div class='breadcrumbs__wrap'>
						<a class='breadcrumbs__item' href='index.php'>
							Главная
						</a>
						<a class='breadcrumbs__item'>
							Каталог
						</a>
						<span class='breadcrumbs__item'>
							Приборы
						</span>
					</div>
					
				</div>
			</div>

			<section class='catalog-category'>
				<div class='container'>
					<div class='catalog-category__items'>
						<a href="" class="catalog-category__item">
							<img src="images/svg/cat-inside1.png" alt="" class="catalog-category__item-img">
							<div class="catalog-category__item-title">Вилки</div>
							<div class="catalog-category__item-num">22</div>
						</a>
						<a href="" class="catalog-category__item">
							<img src="images/svg/cat-inside3.png" alt="" class="catalog-category__item-img">
							<div class="catalog-category__item-title">ЛОЖКИ</div>
							<div class="catalog-category__item-num">14</div>
						</a>
						<a href="" class="catalog-category__item">
							<img src="images/svg/cat-inside2.png" alt="" class="catalog-category__item-img">
							<div class="catalog-category__item-title">НАБОРЫ</div>
							<div class="catalog-category__item-num">6</div>
						</a>
						<a href="" class="catalog-category__item">
							<img src="images/svg/cat-inside4.png" alt="" class="catalog-category__item-img">
							<div class="catalog-category__item-title">НОЖИ</div>
							<div class="catalog-category__item-num">11</div>
						</a>
					</div>
				</div>
			</section>
								
			<section class='follow'>
				<div class='container'>
					<div class='follow__inner'>
						<div class="follow__left">
							<div class="follow__title">ПОДПИШИТЕСЬ</div>
							<div class="follow__subtitle">на новости о наших скидках, акциях и новинках</div>
						</div>
						<div class="follow__right">
							<form class="follow__form">
								<div class="follow__form-group">
									<input type="text" placeholder="Ваше имя">
								</div>
								<div class="follow__form-group">
									<input type="email" placeholder="Электронная почта">
								</div>
								<button class="follow__form-btn btn-brown">ПОДПИСАТЬСЯ</button>
							</form>
							<a href="" class="follow__link">
								<span>условия нашей рассылки</span>
								<svg width="3" height="5" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29"><path fill="#b27544" d="M295.41,416.76a.63.63,0,0,1,1.07-.45l4,4a.64.64,0,0,1,0,.89l-4,4a.63.63,0,0,1-1.07-.44Z" transform="translate(-295.41 -416.13)"></path></svg>
							</a>
						</div>
					</div>
				</div>
			</section>
			

		</div>
		
	<?php include('footer.php'); ?>
	</div>



	
  <?php include('modal.php'); ?>

</body>
</html>