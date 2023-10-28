<?php

use app\controller\controller;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri){
	case '/':
		include "view/form.php";
	break;

	case '/form/save':
		controller::save();
	break;
}