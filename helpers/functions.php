<?php

// JavaScript File
function getjs(){
	$page = $_GET['page'];
	$filejs = $page.'.js';
	if(file_exists($filejs)){
		require_once($filejs);
	}
	return $filejs;
}

// Get Token
function token(){
	$r1 = bin2hex(random_bytes(10));
	$r2 = bin2hex(random_bytes(10));
	$r3 = bin2hex(random_bytes(10));
	$token = 'TKN-'.date('y').'-'.$r1.'-'.$r2.'-'.$r3;
	return $token;
}

// Money Format
function formatMoney($money){
	$money = number_format($money,2,SPD,SPM);
	return $money;
}

// Dep
function dep($data){
	$format  = print_r('<pre>');
	$format .= print_r($data);
	$format .= print_r('</pre>');
	return $format;
}

?>