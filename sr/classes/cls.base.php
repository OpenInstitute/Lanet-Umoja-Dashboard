<?php
	$configTime = '2016-09-07';
	
	$adminConfig = array(
		'SITE_ALIAS' 	  => "",
		'SITE_FOLDER' 	  => "petition",
		'SITE_TITLE_LONG'  => "POMAC",	
		'SITE_TITLE_SHORT' => "POMAC",
		'SITE_DOMAIN_URI'  => "pomac.online",
		'SITE_MAIL_SENDER' => "POMAC",
		'SITE_MAIL_TO_BASIC' => "info@pomac.online",
		'SITE_MAIL_FROM_BASIC' => "info@pomac.online",
		'SITE_LOGO' => "image/logo.png",
		'COLOR_BG_SITE' => "#FBF2DF",
		'COLOR_BG_HEADER' => "#FFF",
		'upload_max_filesize' => "5",
		'GALLTHMB_WIDTH' => "250",
		'GALLTHMB_HEIGHT' => "150",
		'GALLIMG_WIDTH' => "1200",
		'GALLIMG_HEIGHT' => "900",
		
		'SOCIAL_ID_FACEBOOK' => "#",
		'SOCIAL_ID_TWITTER' => "#",
		'SOCIAL_ID_TWITTER_WIDGET' => "774485859802484736",
		'SOCIAL_ID_YOUTUBE' => "#",
		'SOCIAL_ID_LINKEDIN' => "#",
		'SOCIAL_ID_GOOGLE' => "#",
		
		'_lists_date_format' => "%b %e %Y",
		'_lists_time_format' => "%l:%i %p",
		'MySQLDateFormat' => "%m/%d/%Y",
		'PHPDateFormat' => "n/j/Y",
		'PHPDateTimeFormat' => "m/d/Y, h:i a"
		
		,'ADM_STYLE_BG' => '#00C0CC'
	);
	
	if($_SERVER['HTTP_HOST'] == "localhost") { 
		//$adminConfig['SITE_ALIAS'] = "/";
		$adminConfig['SITE_FOLDER'] = "oi_pomac";
	}
