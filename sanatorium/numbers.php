<?php include '../config/core.php';

	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sanatorium where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $sana = mysqli_fetch_array($sql); else  header('location: /catalog.php');
	} else header('location: /catalog.php');

	// site setting
	$menu_name = 'sanatorium';
	// $site_set = [];
	$css = ['sanatorium'];
	$js = ['sanatorium'];
?>
<? include '../block/header.php'; ?>

	<? include 'sana_header.php'; ?>
	<? include 'sana_head.php'; ?>
	<div class="sana_bl2 sana_bl2n"> <? include 'number_sn.php'; ?></div>

<? include '../block/footer.php'; ?>