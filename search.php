<!DOCTYPE html>
<html>

<head>
	<?php include('head.php'); ?>
	<title>Результаты поиска</title>
</head>

<body>

	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>

			<div class="breadcrumbs">
				<div class="container">
					<h1 class="breadcrumbs__title">РЕЗУЛЬТАТЫ ПОИСКА</h1>
					<div class='breadcrumbs__wrap'>
						<a class='breadcrumbs__item' href='index.php'>
							Главная
						</a>
						<span class='breadcrumbs__item'>
							Результаты поиска
						</span>
					</div>
				</div>
			</div>

			<section class='search'>
				<div class='container'>
					<div class='search__inner'>
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
						<div class="search__hint">
							<svg width="13" height="13" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.03 12.99">
								<path fill="#4f924b" d="M370.44,401.18a2,2,0,0,0,.32-.22,1.63,1.63,0,0,0,.49-.72l-1.93-1.93a.72.72,0,0,0-.15-.11,6.13,6.13,0,1,0-1,1,.49.49,0,0,0,.1.15l1.9,1.91ZM364.33,399A4.65,4.65,0,1,1,369,394.4,4.66,4.66,0,0,1,364.33,399Z" transform="translate(-358.23 -388.27)"></path>
							</svg>
							<div class="search__hint-wrap">
								<span>Если вы не нашли то, что искали, напишите нам: </span>
								<a href=""> hello@ekko-hvoee.ru</a>
							</div>
						</div>
						<div class="catalog__top">
							<div class="catalog__top-all">
								<svg width="14" height="10" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.95 9.76">
									<path fill="#4f924b" d="M353.22,428.32h9.07a.7.7,0,0,0,0-1.4h-9.07a.7.7,0,0,0,0,1.4Z" transform="translate(-349.04 -426.92)"></path>
									<path fill="#4f924b" d="M362.29,431.11h-9.07a.7.7,0,0,0,0,1.39h9.07a.7.7,0,1,0,0-1.39Z" transform="translate(-349.04 -426.92)"></path>
									<path fill="#4f924b" d="M362.29,435.29h-9.07a.7.7,0,0,0,0,1.39h9.07a.7.7,0,1,0,0-1.39Z" transform="translate(-349.04 -426.92)"></path>
									<path fill="#4f924b" d="M350,427a.65.65,0,0,0-.53,0,.68.68,0,0,0-.23.14.91.91,0,0,0-.15.23.86.86,0,0,0,0,.27.74.74,0,0,0,.2.49.69.69,0,0,0,1,0,.7.7,0,0,0,.2-.49.74.74,0,0,0-.2-.5A.68.68,0,0,0,350,427Z" transform="translate(-349.04 -426.92)"></path>
									<path fill="#4f924b" d="M349.47,431.16a.7.7,0,0,0-.23.15.44.44,0,0,0-.08.11.47.47,0,0,0-.07.12.5.5,0,0,0,0,.13s0,.09,0,.13a.65.65,0,0,0,0,.27,1.14,1.14,0,0,0,.15.23.71.71,0,0,0,1,0,1.14,1.14,0,0,0,.15-.23.86.86,0,0,0,.05-.27.68.68,0,0,0-.2-.49A.73.73,0,0,0,349.47,431.16Z" transform="translate(-349.04 -426.92)"></path>
									<path fill="#4f924b" d="M349.24,435.49a.77.77,0,0,0-.2.5.68.68,0,0,0,.2.49.71.71,0,0,0,1,0,.68.68,0,0,0,.2-.49.7.7,0,0,0-1.19-.5Z" transform="translate(-349.04 -426.92)"></path>
								</svg>
								<span>Всего товаров:</span>
								<strong>24 шт.</strong>
							</div>
							<div class="catalog__sort">
								<span class="catalog__sort-title">Сортировка:</span>
								<select name="" id="">
									<option value="">По умолчанию</option>
									<option value="">По умолчанию 2</option>
									<option value="">По умолчанию 3</option>
								</select>
							</div>
						</div>
						<div class="search__items">
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#d4782e" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M548.2,445.79a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28h-.84a.32.32,0,0,1-.2-.08.3.3,0,0,1-.08-.2V450H544v2.73a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-.84a.3.3,0,0,1-.2-.08.28.28,0,0,1-.08-.2v-6.69a.27.27,0,0,1,.08-.19.27.27,0,0,1,.2-.09h.84a.31.31,0,0,1,.28.28v2.66h3.12v-2.66a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M550.37,453a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557.93,445.79a.28.28,0,0,1,.2.09.27.27,0,0,1,.08.19v.74a.3.3,0,0,1-.08.2.32.32,0,0,1-.2.08h-1.86v5.67a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08H555a.27.27,0,0,1-.28-.28v-5.67h-1.86a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-.74a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#9ac353" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M544.67,453a.37.37,0,0,1-.27-.09l-.14-.15-2.9-4.3v4.26a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-.83a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-6.69a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09H541a.37.37,0,0,1,.27.1l.13.14,2.9,4.31v-4.27a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M552.11,451.75a.24.24,0,0,1,.19.08.25.25,0,0,1,.09.19v.74a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-4.55a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28H552a.25.25,0,0,1,.2.09.24.24,0,0,1,.08.19v.74a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-3.34v1.64h3.12a.31.31,0,0,1,.28.28v.74a.31.31,0,0,1-.28.28h-3.12v1.72Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557,449.59l-.89,3.1a.73.73,0,0,1-.13.25.26.26,0,0,1-.23.1h-.84a.3.3,0,0,1-.24-.1.49.49,0,0,1-.12-.25l-1.33-6.53s0-.07,0-.09a.31.31,0,0,1,.28-.28h.77a.32.32,0,0,1,.2.07.31.31,0,0,1,.12.21l.87,4.39.77-2.76a.62.62,0,0,1,.09-.19.32.32,0,0,1,.27-.11h.85a.3.3,0,0,1,.26.11,1.2,1.2,0,0,1,.1.19l.76,2.76.87-4.39a.32.32,0,0,1,.13-.21.3.3,0,0,1,.19-.07h.77a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19.34.34,0,0,1,0,.09l-1.32,6.53a.73.73,0,0,1-.12.25.3.3,0,0,1-.25.1h-.84a.26.26,0,0,1-.23-.1,1,1,0,0,1-.13-.25Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card2.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<a href="" class="card__img">
										<img src="images/card3.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#d4782e" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M548.2,445.79a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28h-.84a.32.32,0,0,1-.2-.08.3.3,0,0,1-.08-.2V450H544v2.73a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-.84a.3.3,0,0,1-.2-.08.28.28,0,0,1-.08-.2v-6.69a.27.27,0,0,1,.08-.19.27.27,0,0,1,.2-.09h.84a.31.31,0,0,1,.28.28v2.66h3.12v-2.66a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M550.37,453a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557.93,445.79a.28.28,0,0,1,.2.09.27.27,0,0,1,.08.19v.74a.3.3,0,0,1-.08.2.32.32,0,0,1-.2.08h-1.86v5.67a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08H555a.27.27,0,0,1-.28-.28v-5.67h-1.86a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-.74a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#d4782e" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M548.2,445.79a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28h-.84a.32.32,0,0,1-.2-.08.3.3,0,0,1-.08-.2V450H544v2.73a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-.84a.3.3,0,0,1-.2-.08.28.28,0,0,1-.08-.2v-6.69a.27.27,0,0,1,.08-.19.27.27,0,0,1,.2-.09h.84a.31.31,0,0,1,.28.28v2.66h3.12v-2.66a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M550.37,453a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557.93,445.79a.28.28,0,0,1,.2.09.27.27,0,0,1,.08.19v.74a.3.3,0,0,1-.08.2.32.32,0,0,1-.2.08h-1.86v5.67a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08H555a.27.27,0,0,1-.28-.28v-5.67h-1.86a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-.74a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#9ac353" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M544.67,453a.37.37,0,0,1-.27-.09l-.14-.15-2.9-4.3v4.26a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-.83a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-6.69a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09H541a.37.37,0,0,1,.27.1l.13.14,2.9,4.31v-4.27a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M552.11,451.75a.24.24,0,0,1,.19.08.25.25,0,0,1,.09.19v.74a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-4.55a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28H552a.25.25,0,0,1,.2.09.24.24,0,0,1,.08.19v.74a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-3.34v1.64h3.12a.31.31,0,0,1,.28.28v.74a.31.31,0,0,1-.28.28h-3.12v1.72Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557,449.59l-.89,3.1a.73.73,0,0,1-.13.25.26.26,0,0,1-.23.1h-.84a.3.3,0,0,1-.24-.1.49.49,0,0,1-.12-.25l-1.33-6.53s0-.07,0-.09a.31.31,0,0,1,.28-.28h.77a.32.32,0,0,1,.2.07.31.31,0,0,1,.12.21l.87,4.39.77-2.76a.62.62,0,0,1,.09-.19.32.32,0,0,1,.27-.11h.85a.3.3,0,0,1,.26.11,1.2,1.2,0,0,1,.1.19l.76,2.76.87-4.39a.32.32,0,0,1,.13-.21.3.3,0,0,1,.19-.07h.77a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19.34.34,0,0,1,0,.09l-1.32,6.53a.73.73,0,0,1-.12.25.3.3,0,0,1-.25.1h-.84a.26.26,0,0,1-.23-.1,1,1,0,0,1-.13-.25Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card2.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<a href="" class="card__img">
										<img src="images/card3.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#d4782e" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M548.2,445.79a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28h-.84a.32.32,0,0,1-.2-.08.3.3,0,0,1-.08-.2V450H544v2.73a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-.84a.3.3,0,0,1-.2-.08.28.28,0,0,1-.08-.2v-6.69a.27.27,0,0,1,.08-.19.27.27,0,0,1,.2-.09h.84a.31.31,0,0,1,.28.28v2.66h3.12v-2.66a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M550.37,453a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557.93,445.79a.28.28,0,0,1,.2.09.27.27,0,0,1,.08.19v.74a.3.3,0,0,1-.08.2.32.32,0,0,1-.2.08h-1.86v5.67a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08H555a.27.27,0,0,1-.28-.28v-5.67h-1.86a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-.74a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#9ac353" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M544.67,453a.37.37,0,0,1-.27-.09l-.14-.15-2.9-4.3v4.26a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-.83a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-6.69a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09H541a.37.37,0,0,1,.27.1l.13.14,2.9,4.31v-4.27a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M552.11,451.75a.24.24,0,0,1,.19.08.25.25,0,0,1,.09.19v.74a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-4.55a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28H552a.25.25,0,0,1,.2.09.24.24,0,0,1,.08.19v.74a.26.26,0,0,1-.08.2.28.28,0,0,1-.2.08h-3.34v1.64h3.12a.31.31,0,0,1,.28.28v.74a.31.31,0,0,1-.28.28h-3.12v1.72Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557,449.59l-.89,3.1a.73.73,0,0,1-.13.25.26.26,0,0,1-.23.1h-.84a.3.3,0,0,1-.24-.1.49.49,0,0,1-.12-.25l-1.33-6.53s0-.07,0-.09a.31.31,0,0,1,.28-.28h.77a.32.32,0,0,1,.2.07.31.31,0,0,1,.12.21l.87,4.39.77-2.76a.62.62,0,0,1,.09-.19.32.32,0,0,1,.27-.11h.85a.3.3,0,0,1,.26.11,1.2,1.2,0,0,1,.1.19l.76,2.76.87-4.39a.32.32,0,0,1,.13-.21.3.3,0,0,1,.19-.07h.77a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19.34.34,0,0,1,0,.09l-1.32,6.53a.73.73,0,0,1-.12.25.3.3,0,0,1-.25.1h-.84a.26.26,0,0,1-.23-.1,1,1,0,0,1-.13-.25Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card2.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<a href="" class="card__img">
										<img src="images/card3.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
								</div>
							</div>
							<div class="search__item">
								<div class="card">
									<svg class="card__tag" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.02 20.06">
										<path fill="#d4782e" d="M558.86,439.39h-27v20.06h27a10,10,0,0,0,10-10h0A10,10,0,0,0,558.86,439.39Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M548.2,445.79a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28h-.84a.32.32,0,0,1-.2-.08.3.3,0,0,1-.08-.2V450H544v2.73a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08h-.84a.3.3,0,0,1-.2-.08.28.28,0,0,1-.08-.2v-6.69a.27.27,0,0,1,.08-.19.27.27,0,0,1,.2-.09h.84a.31.31,0,0,1,.28.28v2.66h3.12v-2.66a.27.27,0,0,1,.08-.19.28.28,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M550.37,453a.27.27,0,0,1-.19-.08.27.27,0,0,1-.09-.2v-6.69a.31.31,0,0,1,.28-.28h.84a.27.27,0,0,1,.2.09.27.27,0,0,1,.08.19v6.69a.27.27,0,0,1-.28.28Z" transform="translate(-531.87 -439.39)"></path>
										<path fill="#fff" d="M557.93,445.79a.28.28,0,0,1,.2.09.27.27,0,0,1,.08.19v.74a.3.3,0,0,1-.08.2.32.32,0,0,1-.2.08h-1.86v5.67a.27.27,0,0,1-.09.2.27.27,0,0,1-.19.08H555a.27.27,0,0,1-.28-.28v-5.67h-1.86a.28.28,0,0,1-.2-.08.26.26,0,0,1-.08-.2v-.74a.24.24,0,0,1,.08-.19.25.25,0,0,1,.2-.09Z" transform="translate(-531.87 -439.39)"></path>
									</svg>
									<a href="" class="card__img">
										<img src="images/card1.jpg" alt="">
									</a>
									<a href="" class="card__title">Тарелка одноразовая Albeta, 10 шт, Дерево</a>
									<div class="card__num">236589511</div>
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