<?php
class Lang
{
		
	private function __construct() {
	
	}
	
	public static function init($lang_session)
	{
		if ($lang_session == true){$lang = Session::get('lang');}else {$lang = "fr";}
		switch($lang) {
			case 'fr':require('views/Lang/Fr-lang.php');break;
			case 'en':require('views/Lang/En-lang.php');break;
			case 'ar':require('views/Lang/Ar-lang.php');break;
		}
	}
		
}
