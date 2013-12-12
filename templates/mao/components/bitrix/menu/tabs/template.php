<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<?foreach($arResult as $arItem):?>

				<?if ($arItem["PERMISSION"] > "D"):?>
					<li<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><a href="<?=$arItem["LINK"]?>"><nobr><?=$arItem["TEXT"]?></nobr></a></li>
				<?endif?>

				<?endforeach?>

			</ul>
		</div>
	</div>
<?endif?>