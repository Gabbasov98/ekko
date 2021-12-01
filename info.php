<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); ?>
  <title>Текстовая страница</title>
</head>
<body>
	
	<div class="wrapper">
		<div class="content">
			<?php include('header.php'); ?>
			<section class="questions">
        <div class="container">
            <h2 class="questions__title">ВОПРОС-ОТВЕТ</h2>
            <nav class="questions__nav">
                <ul class="questions__list">
                    <li class="questions__item">
                        <a class="questions__link" href="">Главная</a>
                    </li>
                    <li class="questions__item">
                        <a class="questions__link" href="">
                            <img src="img/point.svg" alt="">
                        </a>
                    </li>
                    <li class="questions__item">
                        <a class="questions__link" href="">Вопрос-ответ</a>
                    </li>
                </ul>
            </nav>
            <div class="questions__inner">
                <div class="questions__left">
                    <h4 class="questions__left-title">Общие вопросы</h4>
                    <div class="questions__items">
                        <div class="questions__item">
                            <div class="questions__item-show">
                                <div class="questions__item-title">Какие документы и сведения требуются для регистрации ИП?</div>
                                <button class="questions__item-btn">
									<svg width="6" height="3" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.81 3.29"><path fill="#50924c" d="M358.53,430.13a.39.39,0,0,1,.27.66l-2.51,2.52a.39.39,0,0,1-.55,0l-2.52-2.52a.39.39,0,0,1,.28-.66Z" transform="translate(-353.11 -430.13)"></path></svg>
									<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.81 3.29"><path fill="#50924c" d="M353.5,433.42a.39.39,0,0,1-.28-.67l2.52-2.51a.39.39,0,0,1,.55,0l2.51,2.51a.39.39,0,0,1-.27.67Z" transform="translate(-353.11 -430.13)"></path></svg>
							</button>
                            </div>
                            <div class="questions__item-hide">
                                <p>Срок регистрации ИП в налоговой составляет 3 рабочих дня с момента представления документов на государственную регистрацию. </p>
                                <p>Чтобы заказать подобную услугу в нашей компании, то вам потребуется: предоставить копию ИНН и паспорта, далее оговариваем виды деятельности вашей будущей компании и совместно выбираем оптимальную систему налогообложения
                                    под вашу деятельность. </p>
                                <p>Далее мы подготавливаем пакет документов для регистрации ИП и на следующий день встречаемся с вами в Налоговой для совместной подачи пакета документов. Госпошлину оплачиваем при встрече в банкомате в налоговой. Процесс
                                    подачи документов на регистрацию ИП в налоговую занимает не более 20 минут..</p>
                                <p>Далее инспектор принимает документы и назначает день когда необходимо забрать готовые документы, обычно это через 3-4 дня рабочих дней. Получать готовые документы будете также с нашим сотрудником, при получении вам будет
                                    передана папка со всеми документами, печать, коды статистики, а также поможем бесплатно открыть расчетный счет в банке партнере.</p>
                                <p>Маркированный список для примера оформления:</p>
                                <nav class="questions__left-nav">
                                    <ul class="questions__item-list">
                                        <li class="questions__item-item">
                                            <img src="img/arrow (1).png" alt="">
                                            <span> Крафт пакеты бумажные с ручками</span>
                                            <span>Крафт пакеты бумажные без ручек</span>
                                            <span>Крафт мешки бумажные</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="questions__right">
                    <div class="questions__unknown">
                        <img src="img/unknown.png" alt="">
                        <div>
                            <span>Не нашли ответа</span>
                            <span>на свой вопрос?</span>
                        </div>
                    </div>
                    <div class="questions__mail">
                        <P>Задайте свой вопрос по электронной почте <a href="hello@hvoee.com">hello@hvoee.com</a> </P>
                    </div>
                    <div class="questions__telephone">
                        <P>Или свяжитесь с нами по телефонам: </P>
                        <a href="8(423)2400865">8 (423) 240 08 65</a>
                        <div>
                            <a href="79147012510">+7 914 701 2510</a>
                            <a href="">Tel / WhatsApp / WeChat</a>
                        </div>
                    </div>
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