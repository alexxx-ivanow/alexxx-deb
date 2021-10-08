<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Воостановление пароля");
$APPLICATION->SetPageProperty("title", "Воостановление пароля");
$APPLICATION->SetPageProperty("keywords", "Воостановление пароля");
$APPLICATION->SetPageProperty("description", "Воостановление пароля");
$APPLICATION->SetTitle("Воостановление пароля");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "get_password", Array(
	"AUTH_AUTH_URL" => "/personal/auth/index.php",	// Страница для авторизации
		"AUTH_REGISTER_URL" => "/personal/auth/registration.php",	// Страница для регистрации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>