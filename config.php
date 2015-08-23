<?php
define("CMS_API_URL", "http://cms.devzila.com");
if(strpos($_SERVER['HTTP_HOST'], 'localhost')!==false){
	// your local installed wordpress path
	define("CMS_PATH", "/Users/nilayanand/workspace/wordpress/");
}
else{
	define("CMS_PATH", "/home/cms/public_html/");
}