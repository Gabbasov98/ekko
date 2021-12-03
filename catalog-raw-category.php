<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); ?>
  <title>КАТАЛОГ СЫРЬЯ ДЛЯ ПРОИЗВОДСТВА</title>
</head>
<body>
	
	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<div class="breadcrumbs breadcrumbs--prod">
				<div class="container">
				<h1 class="breadcrumbs__title">Бумажная продукция</h1>
					<div class='breadcrumbs__wrap'>
						<a class='breadcrumbs__item' href='index.php'>
							Главная
						</a>
						<a class='breadcrumbs__item'>
							Каталог сырья      
						</a>
						<span class='breadcrumbs__item'>
							Бумажная продукция
						</span>
					</div>
					
				</div>
			</div>

			<section class='catalog-raw-cat'>
				<div class='container'>
					<div class='catalog-raw-cat__items'>
						<a href="" class="catalog-raw-cat__item" style="background-image: url('images/cat_raw1.jpg');">
							<div class="catalog-raw-cat__item-title">Флютинг</div>
							<div class="catalog-raw-cat__item-num">6</div>
						</a>
						<a href="" class="catalog-raw-cat__item" style="background-image: url('images/cat_raw2.jpg');">
							<div class="catalog-raw-cat__item-title">Тестлайнер</div>
							<div class="catalog-raw-cat__item-num">22</div>
						</a>
						<a href="" class="catalog-raw-cat__item" style="background-image: url('images/cat_raw3.jpg');">
							<div class="catalog-raw-cat__item-title">Крафтлайнер</div>
							<div class="catalog-raw-cat__item-num">14</div>
						</a>
						<a href="" class="catalog-raw-cat__item" style="background-image: url('images/cat_raw4.jpg');">
							<div class="catalog-raw-cat__item-title">Крафтовая бумага</div>
							<div class="catalog-raw-cat__item-num">11</div>
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