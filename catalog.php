<!DOCTYPE html>
<html>

<head>
	<?php include('head.php'); ?>
	<title>КАТАЛОГ ТОВАРОВ</title>
</head>

<body>

	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<div class="breadcrumbs">
				<div class="container">
					<h1 class="breadcrumbs__title">КАТАЛОГ ТОВАРОВ</h1>
					<div class='breadcrumbs__wrap'>
						<a class='breadcrumbs__item' href='index.php'>
							Главная
						</a>
						<span class='breadcrumbs__item'>
							Каталог
						</span>
					</div>
				</div>
			</div>

			<section class='catalog-page'>
				<div class='container'>
					<div class='catalog-page__inner'>
						<div class="catalog-page__info">
							Предлагаемый ассортимент посуды и упаковки не требует утилизации и всецело соответствует концепции здорового образа жизни и сохранения экобаланса окружающей среды.
						</div>
						<div class='catalog-index__items'>
							<a href="" class="catalog-index__item">
								<div class="catalog-index__item-num">22</div>
								<div class="catalog-index__item-img">
									<img src="images/svg/cat1.png" alt="">
								</div>
								<div class="catalog-index__item-title">Пакеты бумажные</div>
							</a>
							<a href="" class="catalog-index__item">
								<div class="catalog-index__item-num">16</div>
								<div class="catalog-index__item-img">
									<img src="images/svg/cat2.png" alt="">
								</div>
								<div class="catalog-index__item-title">Тарелки бумажные</div>
							</a>
							<a href="" class="catalog-index__item">
								<div class="catalog-index__item-num">22</div>
								<div class="catalog-index__item-img">
									<img src="images/svg/cat3.png" alt="">
								</div>
								<div class="catalog-index__item-title">Стаканы бумажные</div>
							</a>
							<a href="" class="catalog-index__item">
								<div class="catalog-index__item-num">24</div>
								<div class="catalog-index__item-img">
									<img src="images/svg/cat4.png" alt="">
								</div>
								<div class="catalog-index__item-title">Приборы</div>
							</a>
							<a href="" class="catalog-index__item">
								<div class="catalog-index__item-num">8</div>
								<div class="catalog-index__item-img">
									<img src="images/svg/cat5.png" alt="">
								</div>
								<div class="catalog-index__item-title">Салфетки, бумага</div>
							</a>
						</div>
						<div class="search-block">
							<div class="search-block__title">Поиск по каталогу</div>
							<div class="header__search">
								<i>
									<svg width="13" height="13" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.03 12.99">
										<path fill="#4f924b" d="M370.44,401.18a2,2,0,0,0,.32-.22,1.63,1.63,0,0,0,.49-.72l-1.93-1.93a.72.72,0,0,0-.15-.11,6.13,6.13,0,1,0-1,1,.49.49,0,0,0,.1.15l1.9,1.91ZM364.33,399A4.65,4.65,0,1,1,369,394.4,4.66,4.66,0,0,1,364.33,399Z" transform="translate(-358.23 -388.27)"></path>
									</svg>
								</i>
								<input type="text" placeholder="поиск по каталогу">
								<button class="header__search-btn btn btn-dark-green btn-rounded icon-right">
									<span>искать</span>
									<svg width="5" height="8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
										<path fill="#fff" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
									</svg>
								</button>
								<div class="header__search-select">
									<div class="header__search-select-show">
										<span>по всему каталогу</span>
										<svg width="6" height="3" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.81 3.29">
											<path fill="#686868" d="M358.53,430.13a.39.39,0,0,1,.27.66l-2.51,2.52a.39.39,0,0,1-.55,0l-2.52-2.52a.39.39,0,0,1,.28-.66Z" transform="translate(-353.11 -430.13)"></path>
										</svg>
									</div>
									<div class="header__search-select-hidden">
										<div class="header__search-select-item header__search-select-item--active">
											<div class="header__search-select-item-title">по всему каталогу</div>
										</div>
										<div class="header__search-select-item">
											<div class="header__search-select-item-title">Пакеты бумажные</div>
											<a href="" class="header__search-select-item-link">Пакеты без ручек</a>
											<a href="" class="header__search-select-item-link">Пакеты с кручеными ручками</a>
											<a href="" class="header__search-select-item-link">Пакеты с плоскими ручками</a>
										</div>
										<div class="header__search-select-item">
											<div class="header__search-select-item-title">Тарелки бумажные</div>
											<a href="" class="header__search-select-item-link">Плоские тарелки</a>
											<a href="" class="header__search-select-item-link">Глубокие тарелки</a>
										</div>
										<div class="header__search-select-item">
											<div class="header__search-select-item-title">Стаканы бумажные</div>
											<a href="" class="header__search-select-item-link">Стаканы для горячих напитков</a>
											<a href="" class="header__search-select-item-link">Стаканы для холодных напитков</a>
										</div>
										<div class="header__search-select-item">
											<div class="header__search-select-item-title">Приборы</div>
											<a href="" class="header__search-select-item-link">Вилки</a>
											<a href="" class="header__search-select-item-link">Ложки</a>
											<a href="" class="header__search-select-item-link">Ножи</a>
											<a href="" class="header__search-select-item-link">Наборы</a>
										</div>
										<div class="header__search-select-item">
											<div class="header__search-select-item-title">Салфетки, бумага</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class='collection'>
				<div class='container'>
					<div class='collection__inner'>
						<div class="collection__top">
							<div class="collection__top-left">
								<div class="collection__title collection__title--active collection__tab" data-tabs-path="1">НОВИНКИ КАТАЛОГА</div>
								<div class="collection__title collection__title--prod collection__tab" data-tabs-path="2">ХИТЫ ПРОДАЖ</div>
							</div>
						</div>
						<div class="collection__content collection__content--active" data-content-path="1">
							<div class="collection__slider collection__slider--green">
								<div class='swiper-container'>
									<div class='swiper-wrapper'>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card1.jpg" alt="">
												</a>
												<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
												<div class="card__num">236589511</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card2.jpg" alt="">
												</a>
												<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
												<div class="card__num">236589511</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card3.jpg" alt="">
												</a>
												<a href="" class="card__title">Вилка VIATTO WF-140, одноразовая, деревянная, 14 см, 100 шт.</a>
												<div class="card__num">14221453</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card4.jpg" alt="">
												</a>
												<a href="" class="card__title">Стакан двухслойный бумажный 350 мл "Крафт", (30шт)</a>
												<div class="card__num">144221444</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card5.jpg" alt="">
												</a>
												<a href="" class="card__title">Размешиватели для кофе, палочки деревянные, мешалки для горячих и холодных напитков text for testing ggtdfg</a>
												<div class="card__num">125400021</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card">
												<a href="" class="card__img">
													<img src="images/card1.jpg" alt="">
												</a>
												<a href="" class="card__title">Размешиватели для кофе, палочки деревянные, мешалки для горячих и холодных напитков text for testing ggtdfg</a>
												<div class="card__num">125400021</div>
											</div>
										</div>
									</div>
								</div>
								<div class='swiper-pagination collection__slider-pagination'></div>
								<div class="collection__slider-nav">
									<div class='swiper-button-prev collection__slider-prev btn-green'>
										<svg width="5" height="7" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29">
											<path fill="#fff" d="M300.68,424.8a.63.63,0,0,1-1.07.44l-4-4a.64.64,0,0,1,0-.89l4-4a.63.63,0,0,1,1.07.45Z" transform="translate(-295.41 -416.13)"></path>
										</svg>
									</div>
									<div class='swiper-button-next collection__slider-next btn-green'>
										<svg width="5" height="7" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29">
											<path fill="#fff" d="M295.41,416.76a.63.63,0,0,1,1.07-.45l4,4a.64.64,0,0,1,0,.89l-4,4a.63.63,0,0,1-1.07-.44Z" transform="translate(-295.41 -416.13)"></path>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="collection__content" data-content-path="2">
							<div class="collection__slider collection__slider--brown">
								<div class='swiper-container'>
									<div class='swiper-wrapper'>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<div class="card__img">
													<img src="images/card1.jpg" alt="">
												</div>
												<div class="card__title">Ложка одноразовая деревянная - 10 шт</div>
												<div class="card__num">21452145</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<a href="" class="card__img">
													<img src="images/card2.jpg" alt="">
												</a>
												<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
												<div class="card__num">236589511</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<a href="" class="card__img">
													<img src="images/card3.jpg" alt="">
												</a>
												<a href="" class="card__title">Вилка VIATTO WF-140, одноразовая, деревянная, 14 см, 100 шт.</a>
												<div class="card__num">14221453</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<a href="" class="card__img">
													<img src="images/card4.jpg" alt="">
												</a>
												<a href="" class="card__title">Стакан двухслойный бумажный 350 мл "Крафт", (30шт)</a>
												<div class="card__num">144221444</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<a href="" class="card__img">
													<img src="images/card5.jpg" alt="">
												</a>
												<a href="" class="card__title">Размешиватели для кофе, палочки деревянные, мешалки для горячих и холодных напитков text for testing ggtdfg</a>
												<div class="card__num">125400021</div>
											</div>
										</div>
										<div class='swiper-slide'>
											<div class="card card--prod">
												<a href="" class="card__img">
													<img src="images/card1.jpg" alt="">
												</a>
												<a href="" class="card__title">Размешиватели для кофе, палочки деревянные, мешалки для горячих и холодных напитков text for testing ggtdfg</a>
												<div class="card__num">125400021</div>
											</div>
										</div>
									</div>
								</div>
								<div class='swiper-pagination collection__slider-pagination'></div>
								<div class="collection__slider-nav">
									<div class='swiper-button-prev collection__slider-prev btn-brown'>
										<svg width="5" height="7" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29">
											<path fill="#fff" d="M300.68,424.8a.63.63,0,0,1-1.07.44l-4-4a.64.64,0,0,1,0-.89l4-4a.63.63,0,0,1,1.07.45Z" transform="translate(-295.41 -416.13)"></path>
										</svg>
									</div>
									<div class='swiper-button-next collection__slider-next btn-brown'>
										<svg width="5" height="7" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29">
											<path fill="#fff" d="M295.41,416.76a.63.63,0,0,1,1.07-.45l4,4a.64.64,0,0,1,0,.89l-4,4a.63.63,0,0,1-1.07-.44Z" transform="translate(-295.41 -416.13)"></path>
										</svg>
									</div>
								</div>
							</div>
						</div>
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
								<svg width="3" height="5" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.27 9.29">
									<path fill="#b27544" d="M295.41,416.76a.63.63,0,0,1,1.07-.45l4,4a.64.64,0,0,1,0,.89l-4,4a.63.63,0,0,1-1.07-.44Z" transform="translate(-295.41 -416.13)"></path>
								</svg>
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