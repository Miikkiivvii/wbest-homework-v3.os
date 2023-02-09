<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
					<h4><?=GetMessage('About_Store')?></h4>
					<ul>
						<li><a href=""><?=GetMessage('Reviews')?></a></li>
						<li><a href=""><?=GetMessage('Contacts')?></a></li>
						<li><a href=""><?=GetMessage('Management')?></a></li>
						<li><a href=""><?=GetMessage('Story')?></a></li>
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
						<span class="adr">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/local/templates/Main/components/footer-addres.php"
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