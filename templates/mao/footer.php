
						</div>
					</div>
				</div>
			
				
				<div id="push"></div>					
			</div>
			<div id="footer-wide">
				<div class="footer-border">
				</div>	
				<footer>
					<div class="container">	
						<div class="row">		
							<div class="span9">	
								<div class="well">
									<?$APPLICATION->IncludeComponent("bitrix:main.map", "bottommenu", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"SET_TITLE" => "N",
	"LEVEL" => "3",
	"COL_NUM" => "6",
	"SHOW_DESCRIPTION" => "N"
	),
	false
);?>
									
								</div>
							</div>
							<div class="span3">						
								<div class="well"><p>Создание сайта&nbsp;&mdash; <a href="http://www.vt-soft.ru">Высокие технологии</a></p></div>
							</div>
						</div>											
					</div>					
				</footer>
			</div>		

			
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="<?=SITE_TEMPLATE_PATH?>/bootstrap/js/bootstrap.js"></script>

		</body>
    </html>