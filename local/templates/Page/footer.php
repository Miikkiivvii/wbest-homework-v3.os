<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
</div>
				</div>
				<div class="sb_sidebar">
					<div class="sb_nav">
						<ul>
							<li class="close"><a href=""><span><?=GetMessage('Catalog')?></span></a></li>
							<li class="close"><a href=""><span><?=GetMessage('Kitchens')?></span></a></li>
							<li class="close"><a href=""><span><?=GetMessage('Headsets')?></span></a></li>
							<li class="open current">
								<span class="sb_showchild"></span>
								<a href=""><span><span><?=GetMessage('Bedrooms')?></span></a>
								<ul>
									<li><a href=""><?=GetMessage('single')?></a></li>
									<li><a href=""><?=GetMessage('Double')?></a></li>
									<li><a href=""><?=GetMessage('Baby')?></a></li>
								</ul>
							</li>
							<li class="close"><a href=""><span><?=GetMessage('Kitchens')?></span></a></li>
							<li class="close"><a href=""><span><?=GetMessage('Headsets')?></span></a></li>
							<li class="close">
								<span class="sb_showchild"></span>
								<a href=""><span><?=GetMessage('Bedrooms')?></span></a>
								<ul>
									<li><a href=""><?=GetMessage('single')?></a></li>
									<li><a href=""><?=GetMessage('Double')?></a></li>
									<li><a href=""><?=GetMessage('Baby')?></a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="sb_event">
						<div class="sb_event_header"><h4><?=GetMessage('Upcoming_events')?></h4></div>
						<p><a href="">29 августа 2012, Москва</a></p>
						<p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
					</div>
					<div class="sb_action">
						<a href=""><img src="/local/templates/.default/content/11.png" alt=""/></a>
						<h4>Акция</h4>
						<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
						<a href="" class="sb_action_more">Подробнее &rarr;</a>
					</div>
					<div class="sb_reviewed">
							<img src="/local/templates/.default/content/8.png" class="sb_rw_avatar" alt=""/>
							<span class="sb_rw_name">Сергей Антонов</span>
							<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="sb_rw_arrow"></div>
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>

		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
					<h4><?=GetMessage('About_Store')?></h4>
					<ul>
						<li><a href=""><?=GetMessage('Reviews')?></a></li>
						<li><a href=""><?=GetMessage('Contacts')?></a></li>
						<li><a href=""><?=GetMessage('Management')?></a></li>
						<li><a href=""><?=GetMessage('Management')?></a></li>
					</ul>
				</div>
				<div class="ft_catalog">
					<h4><?=GetMessage('Catalog')?></h4>
					<ul>
						<li><a href=""><?=GetMessage('Kitchens')?></a></li>
						<li><a href=""><?=GetMessage('Beds_and_couches')?></a></li>
						<li><a href=""><?=GetMessage('Headsets')?></a></li>
						<li><a href=""><?=GetMessage('Bedside_tables_and_hallways')?></a></li>
						<li><a href=""><?=GetMessage('Bedrooms_and_mattresses')?></a></li>
						<li><a href=""><?=GetMessage('Accessories')?></a></li>
						<li><a href=""><?=GetMessage('Tables_and_chairs')?></a></li>
						<li><a href=""><?=GetMessage('Furniture_catalogs')?></a></li>
						<li><a href=""><?=GetMessage('Folding_sofas')?></a></li>
						<li><a href=""><?=GetMessage('chair')?></a></li>
					</ul>
					
				</div>
				<div class="ft_contacts">
					<h4><?=GetMessage('Contact_Information')?></h4>
					<!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
					<p class="vcard">
					<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/Page/components/footer-addres.php"
							)
						);?>
					</p>
					<ul class="ft_solcial">
						<li><a href="" class="fb"></a></li>
						<li><a href="" class="tw"></a></li>
						<li><a href="" class="ok"></a></li>
						<li><a href="" class="vk"></a></li>
					</ul>
					<div class="ft_copyright">© 2000 - 2012 "<?=GetMessage('Furniture_store')?>" </div>
					
					
				</div>
				
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
</body>
</html>