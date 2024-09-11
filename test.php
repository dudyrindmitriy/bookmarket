<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><main>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"sections",
	Array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "sections",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "Books",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?><?$APPLICATION->IncludeComponent("bitrix:search.title", "search", Array(
	"CATEGORY_0" => array(	// Ограничение области поиска
			0 => "iblock_Books",
			1 => "iblock_Chandeliers",
		),
		"CATEGORY_0_TITLE" => "",	// Название категории
		"CATEGORY_0_iblock_Books" => array(	// Искать в информационных блоках типа "iblock_Books"
			0 => "10",
		),
		"CATEGORY_0_iblock_Chandeliers" => array(	// Искать в информационных блоках типа "iblock_Chandeliers"
			0 => "11",
		),
		"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
		"CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
		"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
		"NUM_CATEGORIES" => "1",	// Количество категорий поиска
		"ORDER" => "date",	// Сортировка результатов
		"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
		"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
		"TOP_COUNT" => "5",	// Количество результатов в каждой категории
		"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
	),
	false
);?>
<div class="main">
 <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"new_books",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "Books",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("AUTHOR",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <!--     <div class="large__container">
            <button class="prev" id="newsPrev"><img src="/local/templates/main/assets/images/Mark L.svg" alt="Предыдущее"></button>
            <div class="container">
                <h1>НОВИНКИ</h1>
                <ul class="news">
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            1Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            2Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            3Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            4Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            5Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                    <li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка"> <button class="news__save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
                        <p>
                            Странные игры
                        </p>
                        <p class="extra-text">
                            Майк Омер
                        </p>
                    </li>
                </ul>
            </div>
            <button class="next" id="newsNext"><img src="/local/templates/main/assets/images/Mark R.svg" alt="Следующее"></button>
        </div> -->
	<div class="container">
		<h1></h1>
		<h1>КАТЕГОРИИ</h1>
		<ul class="categories">
			<li><a href="../"></a><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
			<li><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
			<li><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
			<li><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
			<li><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
			<li><img src="/local/templates/main/assets/images/IMG_8099.png" alt="Картинка">
			<p class="blue-text">
				 Современная проза
			</p>
 </li>
		</ul>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"popular",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "Books",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("AUTHOR","PRICE",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <!-- <div class="large__container">
			<button class="prev" id="popularPrev"><img src="/local/templates/main/assets/images/Mark L.svg" alt="Предыдущее"></button>
			<div class="container">
				<h1>ПОПУЛЯРНЫЕ КНИГИ</h1>
				<ul class="popular">
					<li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка">
						<div class="description">
							<p class="blue-title">
								840₽
							</p>
							Современная проза
							<p class="extra-text">
								Майк Омер
							</p>
							<div class="buttons">
								<button class="buy" aria-label="Купить">Купить</button> <button class="save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
							</div>
						</div>
					</li>
					<li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка">
						<div class="description">
							<p class="blue-title">
								840₽
							</p>
							Современная проза
							<p class="extra-text">
								Майк Омер
							</p>
							<div class="buttons">
								<button class="buy" aria-label="Купить">Купить</button> <button class="save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
							</div>
						</div>
					</li>
					<li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка">
						<div class="description">
							<p class="blue-title">
								840₽
							</p>
							Современная проза
							<p class="extra-text">
								Майк Омер
							</p>
							<div class="buttons">
								<button class="buy" aria-label="Купить">Купить</button> <button class="save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
							</div>
						</div>
					</li>
					<li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка">
						<div class="description">
							<p class="blue-title">
								840₽
							</p>
							Современная проза
							<p class="extra-text">
								Майк Омер
							</p>
							<div class="buttons">
								<button class="buy" aria-label="Купить">Купить</button> <button class="save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
							</div>
						</div>
					</li>
					<li><img src="/local/templates/main/assets/images/image 168.png" alt="Картинка">
						<div class="description">
							<p class="blue-title">
								840₽
							</p>
							2Современная проза
							<p class="extra-text">
								Майк Омер
							</p>
							<div class="buttons">
								<button class="buy" aria-label="Купить">Купить</button> <button class="save"><img src="/local/templates/main/assets/images/Icon mark.svg" alt="Избранное"></button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<button class="next" id="popularNext"><img src="/local/templates/main/assets/images/Mark R.svg" alt="Следующее"></button>
		</div> -->
</div>
<div class="large__container">
	<div class="picture__left">
 <img src="/local/templates/main/assets/images/photo.png" alt="Фотография">
	</div>
	<div class="article">
		<h2 class="blue-title">ПОГРУЗИТЕСЬ В МИР ЗНАНИЙ И ВДОХНОВЕНИЯ ВМЕСТЕ С БУКМАРТ</h2>
		<p class="extra-text">
			 У нас на сайте вы найдете широкий ассортимент литературы на любой вкус — от классики до новинок, от художественной прозы до научно-популярных изданий на любой вкус.<br>
 <br>
			 Наша команда тщательно отбирает каждую книгу, чтобы предложить вам только лучшее. Откройте для себя новые горизонты с каждой прочитанной страницей!
		</p>
	</div>
</div>
<div class="container">
	<h1>ПОЧЕМУ ВЫБИРАЮТ НАС?</h1>
	<ul class="why">
		<li><img src="/local/templates/main/assets/images/Rectangle 35.png" alt="Картинка">
		<p class="blue-text">
			 Быстрая доставка
		</p>
		<p class="extra-text">
			 Доставим ваши любимые книги за 1-3 дня
		</p>
 </li>
		<li><img src="/local/templates/main/assets/images/Rectangle 35.png" alt="Картинка">
		<p class="blue-text">
			 Быстрая доставка
		</p>
		<p class="extra-text">
			 Доставим ваши любимые книги за 1-3 дня
		</p>
 </li>
		<li><img src="/local/templates/main/assets/images/Rectangle 35.png" alt="Картинка">
		<p class="blue-text">
			 Быстрая доставка
		</p>
		<p class="extra-text">
			 Доставим ваши любимые книги за 1-3 дня
		</p>
 </li>
		<li><img src="/local/templates/main/assets/images/Rectangle 35.png" alt="Картинка">
		<p class="blue-text">
			 Быстрая доставка
		</p>
		<p class="extra-text">
			 Доставим ваши любимые книги за 1-3 дня
		</p>
 </li>
	</ul>
</div>
 </main><?
		require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
		?>