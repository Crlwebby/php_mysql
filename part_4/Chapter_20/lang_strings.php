<?php
function defineStrings() {
	switch($_SESSION['lang']) {
		case "en":
			define("WELCOME_TXT","Welcome!");
			define("CHOOSE_TXT","Choose Language");
		break;

		case "ja":
			define("WELCOME_TXT","ようこそ！");
			define("CHOOSE_TXT","言語を選択");
		break;

		case "cn":
			define('WELCOME_TXT', '欢迎光临');
			define("CHOOSE_TXT","选择语言");
		break;
		
		default:
			define("WELCOME_TXT","Welcome!");
			define("CHOOSE_TXT","Choose Language");
		break;
	}
}
?>