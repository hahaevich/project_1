<?
include('include/Mobile_Detect.php');
$detect = new Mobile_Detect;
if($detect->isMobile() && !$detect->isTablet())
{
	header('Location: /mobile.php');
	die();
}
include('include/config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>СтальПром</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name="description" content="" />
	<meta property="og:title" content="СтальПром" />
	<meta property="og:description" content="" />
	<link rel="stylesheet" href="css/style.css?<?=time()?>" type="text/css" />
</head>
<body id="home">

	<div class="container">

		<div class="row rowTop" id="rowTop">
			<div class="main">
				<div class="logo"><a href="#home"></a></div>
				<div class="nav">
					<ul>
						<!--<li><a href="#home">Главная</a></li>
						<li><a href="#rowProducts">В розницу</a></li>
						<li><a href="#rowDelivery">Доставка</a></li>
						<li><a href="#rowSert">Сертификаты</a></li>
						<li><a href="#rowContacts">Контакты</a></li>-->
						<li><a href="#home">Для кого</a></li>
						<li><a href="#rowProducts">Маркетинг</a></li>
						<li><a href="#rowDelivery">Продажи</a></li>
						<li><a href="#rowSert">Эффективность сотрудников</a></li>
						<li class="btnRed"><a href="#rowContacts">Регистрация</a></li>
						<li class="btnRedBord"><a href="#rowContacts">Войти</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowSlider" id="rowSlider">
			<div class="main">
				<div class="text">
					<!--<h1>СТРОПЫ / ТРАВЕРСА / ЗАХВАТЫ<br>ОТ 0,1 ДО 500 ТОНН</h1>
					<div class="line"></div>
					<h2>БЕЗ ПОСРЕДНИКОВ ОТ ЗАВОДА ПРОИЗВОДИТЕЛЯ</h2>-->
					<h1>MalikCRM - IT-решение<br>для управления продажами</h1>
					<div class="line"></div>
					<h2>Все инструменты для вашего бизнеса<br>в одной системе<br>Ваш бизнес в цифрах у вас на ладони</h2>
				</div>
				<div class="form">
					<form>
						<div class="items">
							<div class="item_1">
								Оставьте заявку сейчас<br>и получите 14 дней<br>бесплатного тестирования
							</div>
							<div class="item_2">
								<label class="ico phone"><input type="tel" class="inputText forSuccess" name="USER_PHONE" value="" placeholder="Номер телефона"></label>
								<label class="submit"><input type="submit" class="btn btnRed jqSend" data-send="form" value="Приступить к работе"></label>
								<input type="hidden" name="TYPE" value="APP">
								<input type="hidden" name="FORM_ID" value="1">
								<input type="hidden" name="ADDITIONAL" value="Y">
							</div>
						</div>
						<!--<div class="colLeft">
							<label class="ico phone"><input type="tel" class="inputText forSuccess" name="USER_PHONE" value="" placeholder="Номер телефона"></label>
							<label class="submit"><input type="submit" class="btn btnRed jqSend" data-send="form" value="Оставить заявку"></label>
							<input type="hidden" name="TYPE" value="APP">
							<input type="hidden" name="FORM_ID" value="1">
							<input type="hidden" name="ADDITIONAL" value="Y">
						</div>
						<div class="colRight">
							Оставьте заявку и мы за 15 минут<br>расчитаем вам стоимость заказа<br><span>БЕСПЛАТНО!</span>
						</div>-->
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="arrow"><a href="#"></a></div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="row rowOneClick" id="">
			<div class="main">
				<div class="items">
					<div class="item item_1">
						<div class="box">
							<div class="number">5 минут</div>
							<div class="line"></div>
						</div>
						<div class="name">Для регистрации<br>и настройки</div>
					</div>
					<div class="item item_2">
						<div class="box">
							<div class="number">1 клик</div>
							<div class="line"></div>
						</div>
							<div class="name">Для экспорта и импорта<br>базы данных</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		
		

		<div class="row rowProducts" id="rowProducts">
			<div class="main">
				<div class="titleWithLine">Наша продукция</div>
				<div class="items">
					<?foreach(prProducts() AS $ID => $DATA):?>
					<div class="item item_<?=$ID?>">
						<a href="#" class="jqLoad" data-data='{"TYPE":"PRODUCT", "ID" : "<?=$ID?>"}'>
							<div class="box">
								<div class="img"></div>
								<a href="#" class="name"><span><?=$DATA['TITLE']?></span></a>
							</div>
						</a>
					</div>
					<?endforeach?>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowCounter" id="rowCounter">
			<div class="main">
				<div class="titleWithLine">Нас выбирают потому что:</div>
				<div class="items">
					<div class="item item_1">
						<div class="box">
							<div class="number">2002</div>
							<div class="line"></div>
							<div class="name">Мы на рынке с 2002<br> года</div>
						</div>
					</div>
					<div class="item item_2">
						<div class="box">
							<div class="number">27 000</div>
							<div class="line"></div>
							<div class="name">Нам уже доверяют<br>27 000 клиентов</div>
						</div>
					</div>
					<div class="item item_3">
						<div class="box">
							<div class="number">700</div>
							<div class="line"></div>
							<div class="name">Перерабатываем<br> более 700 тонн<br> металла в месяц</div>
						</div>
					</div>
					<div class="item item_4">
						<div class="box">
							<div class="number">100 000</div>
							<div class="line"></div>
							<div class="name">Мы производим<br>100 000 строп в месяц</div>
						</div>
					</div>
					<div class="clerafix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowAdvantages" id="rowAdvantages">
			<div class="main">
				<div class="titleWithLine">Наше конструкторское бюро</div>
				<div class="subtitle">Изделия по <b>индивидуальным требованиям!</b></div>
				<div class="prSlider">
					<div class="items">
						<div class="nav navLeft" data-type="left"></div>
						<div class="nav navRight" data-type="right"></div>
						<div class="item item_1 animated active">
							<div class="img animated">
								<div class="bg"></div>
							</div>
							<div class="text animated">
								<div class="name">АО Электрозавод</div>
								<div class="txt">Нашем предприятием был спроектирован и изготовлен траверс для одновременного подъема двумя кранами трансформаторов массой 200 тн для АО Электрозавод</div>
							</div>
						</div>
						<div class="item item_2 animated">
							<div class="img animated">
								<div class="bg"></div>
							</div>
							<div class="text animated">
								<div class="name">ЧЕЛЯБИНСКАЯ ТЭЦ 3</div>
								<div class="txt">Нашей компанией были произведены и поставлены круглопрядные стропы грузоподъемностью 130 тн для строительно-монтажных работ на реконструкции Челябинская ТЭЦ 3</div>
							</div>
						</div>
					</div>
					<div class="dots">
						<div class="active"><span></span></div>
						<div><span></span></div>
					</div>
				</div>
				<div class="desc">От крепления для светового оборудования до траверсов,<br>которые используют для строительства мостов, космодромов и АЭС.</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowTimer" id="rowTimer">
			<div class="main">
				<div class="titleWithLine">Мы сокращаем ваше время на погрузку-разгрузку<br>используя наши <b>эксклюзивные разработки</b></div>
				<div class="box">
					<div class="img"></div>
					<div class="form">
						<form>
							<div class="colLeft">
								<label class="ico phone"><input type="tel" class="inputText forSuccess" name="USER_PHONE" placeholder="Номер телефона"></label>
								<label class="submit"><input type="submit" class="btn btnRed jqSend" data-send="form" value="Оставить заявку"></label>
								<input type="hidden" name="TYPE" value="APP">
								<input type="hidden" name="FORM_ID" value="2">
							</div>
							<div class="colRight">
								Закажите звонок и мы расчищаем<br>реальное время до разгрузки<br>заказа на ваш склад
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowScheme" id="rowScheme">
			<div class="main">
				<div class="titleWithLine">Мы ценим ваше время,<br>поэтому выполняем заказы в срок</div>
				<div class="items">
					<div class="item item_1">
						<div class="box">
							<div class="img"></div>
							<div class="txt">Заказ</div>
						</div>
					</div>
					<div class="arrow"></div>
					<div class="item item_2">
						<div class="box">
							<div class="img"></div>
						</div>
					</div>
					<div class="arrow"></div>
					<div class="item item_3">
						<div class="box">
							<div class="img"></div>
							<div class="txt">Разгрузка на <br><b>вашем складе</b></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowCustomers" id="rowCustomers">
			<div class="main">
				<div class="titleWithLine">Мы работаем с известными гос. заказчиками</div>
				<div class="subtitle">Наша мощность позволяет выполнять крупные гос. заказы</b></div>
				<div class="prSlider">
					<div class="items">
						<div class="nav navLeft" data-type="left"></div>
						<div class="nav navRight" data-type="right"></div>
						<div class="item item_1 animated active">
							<div class="img animated">
								<div class="bg"></div>
							</div>
							<div class="text animated">
								<div class="name">870 тонн для Олимпийских объектов в Сочи</div>
								<div class="txt">
									<b>Использовалось наших строп</b><br>
									123123<br>
									142431<br>
									12412<br>
									<br>
									<b>В чем сложность</b><br>
									Удаленность объекта, высокие требования безопасности,<br>
									высокие требования к прочности изделий.
								</div>
							</div>
						</div>
					</div>
					<div class="dots">
						<div class="active"><span></span></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowWarranty" id="rowWarranty">
			<div class="main">
				<div class="title">
					<div class="titleWithLine left ico">Гарантия на все изделия</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowDoc" id="rowDoc">
			<div class="main">
				<div class="titleWithLine">Каждое изделие имеет паспорт качества</div>
				<div class="subtitle">Мы несем ответсвенность за наши изделия перед заказчиком</div>
				<div class="img">
					<div class="ico">До 1 года гарантии</div>
				</div>
				<div class="action">
					<div class="txt">Все прописано на уровне договора!</div>
					<a href="#" class="btn btnRed jqLoad" data-data='{"TYPE":"DOCUMENT", "FORM_ID" : "3"}'>Скачать пример<br>договора</a>
					<div class="desc">*.doc, 3.5mb</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowDelay" id="rowDelay">
			<div class="main">
				<div class="titleWithLine left">Отсрочка платежа</div>
				<div class="text">
					Гибкая работа по оплате с компаниями с проверенной деловой<br> репутацией.<br>
					<br>
					Подробнее об условиях вы можете узнать в нашем коммерческом<br> предложении
				</div>
				<a href="#" class="btn btnRed jqLoad" data-data='{"TYPE":"DOCUMENT", "FORM_ID" : "4"}'>Скачать КП</a>
				<div class="desc">*.doc, 3.5mb</div>
				<div class="img">
					<div class="txt">Возможность<br>отсрочки</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowLaboratory" id="rowLaboratory">
			<div class="main">
				<div class="text">
					<div class="titleWithLine">Собственная лаборатория<br>неразрушающего контроля</div>
					<div class="subtitle">Мы проверяем качество каждого нашего изделия</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowConditions" id="rowConditions">
			<div class="main">
				<div class="titleWithLine">Производим с учетом агрессивных условий</div>
				<div class="items">
					<?foreach(prConditions() AS $ID => $DATA):?>
					<div class="item item_<?=$ID?>">
						<div class="box">
							<a href="#" class="jqLoad" data-data='{"TYPE":"CONDITIONS", "ID":"<?=$ID?>"}'></a>
							<div class="desc">
								<?=$DATA['DESC']?>
							</div>
							<div class="img"></div>
							<div class="name"><?=$DATA['TITLE']?></div>
							<div class="more">Подробнее»</div>
						</div>
					</div>
					<?endforeach?>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowAssortment" id="rowAssortment">
			<div class="main">
				<div class="box">
					<div class="img"></div>
					<div class="text">
						<div class="name">Весь ассортимент всегда в наличии</div>
						<div class="txt">Вам не нужно ждать</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowSmallOrders" id="rowSmallOrders">
			<div class="main">
				<div class="titleWithLine">У вас не большие заказы?</div>
				<div class="items">
					<div class="item item_1">
						<div class="box">
							<div class="img"></div>
							<div class="txt">Нарезка троса от 1 метра</div>
						</div>
					</div>
					<div class="item item_2">
						<div class="box">
							<div class="img"></div>
							<div class="txt">Мы продаем изделия поштучно</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="form">
					<form>
						<div class="colLeft">
							<label class="ico phone"><input type="tel" class="inputText forSuccess" name="USER_PHONE" value="" placeholder="Номер телефона"></label>
							<label class="submit"><input type="submit" class="btn btnRed jqSend" data-send="form" value="Оставить заявку"></label>
							<input type="hidden" name="TYPE" value="APP">
							<input type="hidden" name="FORM_ID" value="5">
						</div>
						<div class="colRight">
							При заказе текстильных строп<br>чехлы в ПОДАРОК
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowLogos" id="rowLogos">
			<div class="main">
				<div class="titleWithLine">Наши постоянные клиенты</div>
				<div class="items">
					<div class="item"><img src="images/logos/1.jpg" alt=""></div>
					<div class="item"><img src="images/logos/2.jpg" alt=""></div>
					<div class="item"><img src="images/logos/3.jpg" alt=""></div>
					<div class="item"><img src="images/logos/4.jpg" alt=""></div>
					<div class="item"><img src="images/logos/5.jpg" alt=""></div>
					<div class="item"><img src="images/logos/6.jpg" alt=""></div>
					<div class="item"><img src="images/logos/7.jpg" alt=""></div>
					<div class="item"><img src="images/logos/8.jpg" alt=""></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowAccordeon" id="rowAccordeon">
			<div class="main">
				<div class="titleWithLine">Чаще всего к нам обращаются</div>
				<div class="items">
					<?foreach(prAccordeon() AS $ID => $DATA):?>
					<div class="item">
						<div class="title">
							<div class="name"><span><?=$DATA['TITLE']?></span></div>
						</div>
						<div class="arrow"></div>
						<div class="content">
							<div class="txt"><?=$DATA['TEXT']?></div>
							<div class="form">
								<form>
									<label class="ico phone"><input type="tel" class="inputText forSuccess" name="USER_PHONE" value="" placeholder="Номер телефона"></label>
									<label class="submit"><input type="submit" class="btn btnRed jqSend" data-send="form" value="Заказать звонок"></label>
									<input type="hidden" name="ID" value="<?=$ID?>">
									<input type="hidden" name="TYPE" value="APP">
									<input type="hidden" name="FORM_ID" value="6">
									<input type="hidden" name="ADDITIONAL" value="Y">
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
					</div>
					<?endforeach?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowDelivery" id="rowDelivery">
			<div class="main">
				<div class="titleWithLine">Доставка удобным способом</div>
				<div class="subtitle">Наш транспортный отдел позволяет доставить продукцию любым<br>удобным для вас способом</div>
				<div class="img"></div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowWorkScheme" id="rowWorkScheme">
			<div class="main">
				<div class="titleWithLine">Схема взаимодействия с клиентом</div>
				<div class="items">
					<div class="item item_1">
						<div class="box">
							<div class="ico"></div>
							<div class="name">Вы оставляете заявку и<br>высылаете техническое<br>задание</div>
						</div>
					</div>
					<div class="item item_2">
						<div class="box">
							<div class="ico"></div>
							<div class="name">Мы оцениваем стоимость<br>изделия и высылаем вам <br>коммерческое предложение</div>
						</div>
					</div>
					<div class="item item_3">
						<div class="box">
							<div class="ico"></div>
							<div class="name">Заключаем договор</div>
						</div>
					</div>
					<div class="item item_4">
						<div class="box">
							<div class="ico"></div>
							<div class="name">Мы загружаем, доставляем<br>и разгружаем</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowSert" id="rowSert">
			<div class="main">
				<div class="titleWithLine">Лицензии и сертификаты</div>
				<div class="col">
					<div class="name">Членство в торгово<br>промышленной палате</div>
					<div class="slider">
						<div class="jqSwiper" data-data='{"type":"rowSert"}'>
							<a href="#" class="nav button-prev"></a>
							<a href="#" class="nav button-next"></a>
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slide" style="background-image: url('images/rowSert_1.jpg')"><a href="images/rowSert_1.jpg"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="name">Сертификаты<br>соответсвия</div>
					<div class="slider">
						<div class="jqSwiper" data-data='{"type":"rowSert"}'>
							<a href="#" class="nav button-prev"></a>
							<a href="#" class="nav button-next"></a>
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="slide" style="background-image: url('images/rowSert_2.jpg')"><a href="images/rowSert_2.jpg"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowMap" id="rowMap">
			<div class="main">
				<div class="titleWithLine">Мы доставляем:</div>
				<div class="subtitle">Заказы по всей Росии, в Казахстан, Белоруссию, Узбекистан, Армению и другие страны</div>
				<div class="img"></div>
				<div class="box">
					<div class="txt">… мы доставляли нашу<br> продукцию даже в Антарктику и<br> на остров Франца-Иосифа.</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowContacts" id="rowContacts">
			<div class="main">
				<div class="titleWithLine">Адрес и контактные данные</div>
				<div class="colLeft">
					<div class="txt">У вас остались вопросы?</div>
					<a href="#" class="btn btnRed jqLoad" data-data='{"TYPE":"CALLBACK", "FORM_ID":"7"}'>Заказать звонок</a>
				</div>
				<div class="colRight">
					<b>ООО "СтальПром"</b>
					Адрес: 450027, РФ, РБ, г. Уфа,<br>
					Индустриальное шоссе 112/1, оф. 304.<br>
					Пн-Пт с 8:30 до 19:00<br>
					<a href="tel:89639002729">+7 /963/ 900 27 29</a><br>
					<a href="mailto:salimov@steel-prom.ru">salimov@steel-prom.ru</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row rowFooter" id="rowFooter">
			<div class="main">
				<div class="logo"></div>
				<div class="slogan">Сертифицированный производитель<br>грузоподъемного оборудования</div>
				<div class="contacts">
					<a href="tel:89639002729">+7 /963/ 900 27 29</a><br>
					<a href="mailto:msk@steel-prom.ru">msk@steel-prom.ru</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>

	<link rel="stylesheet" href="css/fonts/fonts.min.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css?<?=time()?>" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css?ver=4.6.1" type="text/css" media="all" />
	<link rel="stylesheet" href="js/fancyapps/jquery.fancybox.css" type="text/css" media="all" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js?ver=4.6.1"></script>
	<script type="text/javascript" src="js/maskedinput.js"></script>
	<script type="text/javascript" src="js/action.js?<?=time()?>"></script>
	<script type="text/javascript" src="js/desctop.js?<?=time()?>"></script>
	<script type="text/javascript" src="js/fancyapps/jquery.fancybox.pack.js"></script>
</body>
</html>