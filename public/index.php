<?php

if( !session_id()) {
	session_start();
}
require_once '../aplikasi/init.php';

$app = new App;
