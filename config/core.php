<?php 

	require 'db.php';
	require 't.php';
	require 'fun.php';

	class core {
	   public function __construct() {
			session_start();
			new db; new t; new fun;
	   }
	}

	// data
	$core = new core;
	$site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));
	$ver = 2.771;
	$site_set = [
		'preload' => true,
		'header' => true,
		'menu' => true,
		'footer' => true,
		'bl10' => true,
		'bl11' => true,
		'bl12' => true,
	];
	$css = [];
	$js = [];

	// lang
	$lang = 'ru';
	if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
	if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];

	// 
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];