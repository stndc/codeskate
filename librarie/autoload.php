<?php

spl_autoload_register(function($class){
	if(file_exists('class/'.$class.'.php')){
		require_once 'class/'.$class.'.php';
	}
});

?>