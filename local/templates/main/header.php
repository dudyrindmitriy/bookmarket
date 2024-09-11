<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html>

<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<!-- <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/style.css"> -->
	<!-- <script src="https://kit.fontawesome.com/2c6a275cfe.js" crossorigin="anonymous"></script> -->
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/scripts.js" defer></script>
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/style.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/scripts.js");

	?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>



	<body>
		<header>
			<div class="header">
				<div class="header__container">
					<a href="#">
						<div class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Logo big.png" alt="Логотип BookMart"></div>
						<div class="logo__small"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Logo.png" alt="Логотип BookMart"></div>
					</a>
					<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"search", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_Books",
			1 => "iblock_Chandeliers",
		),
		"CATEGORY_0_TITLE" => "",
		"CATEGORY_0_iblock_Books" => array(
			0 => "10",
		),
		"CATEGORY_0_iblock_Chandeliers" => array(
			0 => "11",
		),
		"CHECK_DATES" => "Y",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y",
		"COMPONENT_TEMPLATE" => "search"
	),
	false
);?>
					<!-- <div class="header__search">
						<input type="text" placeholder="Название книги или автор" aria-label="Поиск книги или автора">
						<button>Найти</button>
					</div> -->
					<div class="header__user-menu">
						<a href="#" aria-label="Профиль пользователя"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Avatar.png"
								alt="Аватар пользователя"></a>
						<a href="#" aria-label="Избранное"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Icon mark.svg" alt="Избранное"></a>
						<a href="#" aria-label="Уведомления"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Icon bell.svg" alt="Уведомления"></a>
						<a href="#" aria-label="Корзина"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/Icon cart.svg" alt="Корзина"></a>
						<div id="menu"><i class="fa-solid fa-bars"></i></div>

					</div>
				</div>
				<hr>

			</div>
			<nav class="navbar">
				<ul>
					<li><a href="#">Каталог</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Новинки</a></li>
					<li><a href="#">Бестселлеры</a></li>
					<li><a href="#">Подборки</a></li>
					<li><a href="#">Высокий рейтинг</a></li>
					<li><a href="#">Иностранные</a></li>
					<li><a href="#">Доставка и оплата</a></li>
				</ul>

			</nav>

		</header>