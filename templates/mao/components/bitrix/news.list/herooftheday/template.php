<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="left_vmenu">
<h3>Герой дня:</h3>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<table width="100%" cellspacing="0" cellpadding="5">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<td valign="top" class="text-center" width="100%">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" hspace="0" vspace="3" title="<?=$arItem["NAME"]?>"  /></a>
			<?else:?>
				<img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" hspace="0" vspace="2" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>"  />
			<?endif;?>
		<?elseif(is_array($arItem["DISPLAY_PROPERTIES"]["DOC_TYPE"]) && file_exists($_SERVER['DOCUMENT_ROOT'].$templateFolder."/images/".strtolower($arItem["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_XML_ID"]).".gif")):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$templateFolder."/images/".strtolower($arItem["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_XML_ID"]).".gif"?>" width="19" height="19" alt="<?=$arItem["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"]?>" hspace="0" vspace="3" title="<?=$arItem["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"]?>" style="float:left" /></a>
		<?endif?>
	</td>
</tr>
<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<td valign="top" width="100%">
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
		<h4 class="text-center"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
			<?else:?>
		<h4 class="text-center"><?echo $arItem["NAME"]?></h4>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):
			if($pid=="DOC_TYPE")
				continue;
			?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</td>
</tr>
<?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<br/>
