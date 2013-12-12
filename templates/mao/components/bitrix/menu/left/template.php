<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="left_vmenu">
<h3>Меню раздела:</h3>
	<ul class="nav nav-tabs nav-stacked">
<?foreach($arResult as $arItem):?>
	<?if($arItem["SELECTED"]):?>
		<li class="active"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?endforeach?>
	</ul>
</div>
<br/>
<?endif?>