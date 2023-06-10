<?php

/*
* CodeSkate
* Author: STNDC
* Version: 3.x
* Blog: https://ko-fi.com/stndc
*/

require_once 'helpers/config.php';
require_once 'helpers/functions.php';
require_once 'class/main.class.php';

$app = new Main();

require 'html/header.php';

if(isset($_GET['page']) && $_GET['page']){
	$file = 'phpfiles/'.$_GET['page'].'.php';
	if(file_exists($file)){
		include 'phpfiles/'.$_GET['page'].'.php';
	} else{
		include 'phpfiles/error.php';
	}
} else{
	include 'phpfiles/home.php';
}

require 'html/footer.php';

?>