<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
								<div class="menu_top_inner whitelink">									
									<ul id="topnav">

<?
$counter = 1;
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
											<li id="topnav-<?=$counter?>"><a href="<?=$arItem["LINK"]?>" class="active whitelink"><p class="navtext"></p><?=$arItem["TEXT"]?></a></li>
	<?else:?>
											<li id="topnav-<?=$counter?>"><a href="<?=$arItem["LINK"]?>" class="whitelink"><p class="navtext"></p><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?
	$counter++;
endforeach?>

									</ul>
								</div>
<?endif?>