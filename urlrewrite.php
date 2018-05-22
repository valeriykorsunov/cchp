<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/poliklinika/centri-i-otdeleniya/(.*)/(.*)/oborudovanie/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&SECTION_CODE=\$2&CODE=\$3",
		"ID" => "",
		"PATH" => "/poliklinika/centri-i-otdeleniya/oborudovanie/index.php",
	),
	array(
		"CONDITION" => "#^/poliklinika/centri-i-otdeleniya/(.*)/(.*)/sotrudniki/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&SECTION_CODE=\$2&CODE=\$3",
		"ID" => "",
		"PATH" => "/poliklinika/centri-i-otdeleniya/sotrudniki/index.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/centri-i-otdeleniya/(.*)/(.*)/oborudovanie/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&SECTION_CODE=\$2&CODE=\$3",
		"ID" => "",
		"PATH" => "/bolnitsa/centri-i-otdeleniya/oborudovanie/index.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/centri-i-otdeleniya/(.*)/(.*)/sotrudniki/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&SECTION_CODE=\$2&CODE=\$3",
		"ID" => "",
		"PATH" => "/bolnitsa/centri-i-otdeleniya/sotrudniki/index.php",
	),
	array(
		"CONDITION" => "#^/poliklinika/centri-i-otdeleniya/(.*)/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&CODE=\$2",
		"ID" => "",
		"PATH" => "/poliklinika/centri-i-otdeleniya/detail.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/centri-i-otdeleniya/(.*)/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&CODE=\$2",
		"ID" => "",
		"PATH" => "/bolnitsa/centri-i-otdeleniya/detail.php",
	),
	array(
		"CONDITION" => "#^/poliklinika/sluzhby-obespecheniya/(.*)/(.*)#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/poliklinika/sluzhby-obespecheniya/detail.php",
	),
	array(
		"CONDITION" => "#^/poliklinika/centri-i-otdeleniya/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&CODE=\$2",
		"ID" => "",
		"PATH" => "/poliklinika/centri-i-otdeleniya/centr_detail.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/sluzhby-obespecheniya/(.*)/(.*)#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/bolnitsa/sluzhby-obespecheniya/detail.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/centri-i-otdeleniya/(.*)/(.*)#",
		"RULE" => "CENTR_CODE=\$1&CODE=\$2",
		"ID" => "",
		"PATH" => "/bolnitsa/centri-i-otdeleniya/centr_detail.php",
	),
	array(
		"CONDITION" => "#^/poliklinika/vedushchie-spetsialisty/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/poliklinika/vedushchie-spetsialisty/index.php",
	),
	array(
		"CONDITION" => "#^/bolnitsa/vedushchie-spetsialisty/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/bolnitsa/vedushchie-spetsialisty/index.php",
	),
	array(
		"CONDITION" => "#^/informatsiya/rukovodstvo/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/informatsiya/rukovodstvo/index.php",
	),
	array(
		"CONDITION" => "#^/informatsiya/conference/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/informatsiya/conference/index.php",
	),
	array(
		"CONDITION" => "#^/informatsiya/novosti/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/informatsiya/novosti/index.php",
	),
	array(
		"CONDITION" => "#^([^/]+?)\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&\$2",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/informatsiya/conference/conference.php",
	),
	array(
		"CONDITION" => "#^#",
		"RULE" => "",
		"ID" => "bitrix:news.detail",
		"PATH" => "/bolnitsa/centri-i-otdeleniya/oborudovanie/index.php",
	),
);

?>