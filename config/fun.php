<?php

class fun {

	public function __construct() {}

	public static function p($id) {
		$sql = mysqli_fetch_array(db::query("select MIN(price) as min from `sanatorium_number` where sana_id = '$id' and arh is null"));
		$sn = substr_replace($sql[0], ' ', -3, 0);
		return $sn;
	}

	public static function t($id) {
		$sql = mysqli_fetch_array(db::query("select * from `sanatorium_number_type` where id = '$id'"));
		return $sql['name'];
	}

	public static function d($id) {
		$sql = mysqli_fetch_array(db::query("select * from `sanatorium_door` where id = '$id'"));
		return $sql['name'];
	}

	public static function dn($id) {
		$sql = mysqli_fetch_array(db::query("select * from `sanatorium_door` where id = '$id'"));
		return $sql['number'];
	}

	public static function txt($id) {
		if (isset($_SESSION['lang'])) $lang = $_SESSION['lang']; else $lang = 'ru';
		$sql = mysqli_fetch_array(db::query("select * from `sanatorium_info` where sana_id = '$id' and lang = '$lang'"));
		return $sql['txt'];
	}

	public static function rank($n) {
		$res = '';
		for ($i=1;$i<=$n;$i++) $res .= '<i class="fas fa-star"></i>';
		return $res;
	}

	public static function serv($id) {
		$sql = mysqli_fetch_array(db::query("select * from `sanatorium_service` where id = '$id'"));
		if ($_SESSION['lang'] == 'kz') return $sql['name_kz']; else return $sql['name_ru'];
	}
    
}