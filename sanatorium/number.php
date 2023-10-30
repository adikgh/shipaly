<?php include '../config/core.php';

	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sanatorium where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $sana = mysqli_fetch_array($sql); else header('location: /catalog.php');
	} else header('location: /catalog.php');

	if (isset($_GET['price_id']) || $_GET['price_id'] == '') {
		$number_id = $_GET['price_id'];
		$sql = db::query("select * from sanatorium_number where id = '$number_id'");
		if (mysqli_num_rows($sql) != 0) $price = mysqli_fetch_array($sql); else header('location: /catalog.php');
	} else  header('location: /catalog.php');

	// site setting
	$menu_name = 'sanatorium';
	// $site_set = [];
	$site_set['swiper'] = true;
	$css = ['sanatorium'];
	$js = ['sanatorium'];
?>
<? include '../block/header.php'; ?>

	<? include 'sana_header.php'; ?>

	<div class="sana_bl">
		<div class="sana_bl_c">

			<? include 'sana_head.php'; ?>

			<div class="num_bl1">
				<div class="bl_c">
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-bed"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Номер на <?=$price['door_id']?> человека</div>
							<h5 class="num_bl1_cnl"><?=fun::t($price['type_id'])?></h5>
						</div>
					</div>

					<div class="num_bl1_c2">
						<div class="num_bl1_c2i">
							<div class="num_bl1_ci"><i class="far fa-user"></i></div>
							<div class="num_bl1_cn">

								<div class="num_bl1_cni">
									<div class="num_bl1_cns">Цена на 1 взрослых за ночь</div>
									<h5 class="num_bl1_cnl"><?=substr_replace($price['price'],' ',-3,0)?> <i class="fas fa-tenge"></i></h5>
								</div>

								<?php if ($price['door_id'] > 1): ?>
									<div class="num_bl1_cni">
										<div class="num_bl1_cns">Цена на <?=fun::dn($price['door_id'])?> взрослых за ночь</div>
										<h5 class="num_bl1_cnl"><?=substr_replace($price['price'] * fun::dn($price['door_id']),' ',-3,0)?> <i class="fas fa-tenge"></i></h5>
									</div>
								<?php endif ?>

							</div>
						</div>
						<div class="num_bl1_c2n"><div class="btn disb_zab4" data-name="<?=$sana['name']?>" data-number="<?=fun::t($price['type_id'])?>"><span>забронировать</span></div></div>
					</div>
				</div>
			</div>
		</div>

		<div class="sana_bl1">
			<div class="sana_bl1t swiper-container">
				<div class="swiper-wrapper">
					<? $data_img = db::query("select * from sanatorium_img where number_id = '$number_id'"); ?>
					<?	while ($img = mysqli_fetch_array($data_img)): ?>
						<div class="swiper-slide sana_bl1ti">
							<div class="lazy_sana_img" data-src="https://shipaly1.kz/assets/uploads/sanatorium/<?=$sana['name'].'/'.$img['img']?>"></div>
						</div>
					<? endwhile ?>	
				</div>
				<div class="swiper-pagination sana_bl1t_pag"></div>
				<div class="swiper-button-prev sana_bl1t_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
				<div class="swiper-button-next sana_bl1t_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
			</div>
		</div>
	</div>

	<? $data_serv = db::query("select * from sanatorium_service_number where number_id = '$number_id'"); ?>
	<?	if (mysqli_num_rows($data_serv)): ?>
		<div class="sana_bl4">
			<div class="bl_c">
				<div class="head_c txt_tu"><h5>Услуги</h5></div>
				<div class="num_bl2_c">

					<? $service_type = db::query("select * from sanatorium_service_type where type = 'number'"); ?>
					<? while ($service_type_d = mysqli_fetch_array($service_type)): ?>
						<? $service_type_id = $service_type_d['id']; ?>
						<? $data_serv2 = db::query("select * from sanatorium_service_number where number_id = '$number_id' and type_id = '$service_type_id'"); ?>
						<?	if (mysqli_num_rows($data_serv2) != 0): ?>
							<div class="num_bl1_c">
								<div class="num_bl1_ci"><?=$service_type_d['icon']?></div>
								<div class="num_bl1_cn">
									<div class="num_bl1_cns"><?=$service_type_d['name_'.$lang]?></div>
									<? if (mysqli_num_rows($data_serv2) == 1): ?>
										<? $serv = mysqli_fetch_array($data_serv2); ?>
										<p class="num_bl1_cnl"><?=fun::serv($serv['service_id'])?></p>
									<? else: ?>
										<ul>
											<? while ($serv = mysqli_fetch_array($data_serv2)): ?>
												<li class="num_bl1_cnl"><?=fun::serv($serv['service_id'])?></li>
											<? endwhile ?>
										</ul>
									<? endif ?>
								</div>
							</div>
						<? endif ?>
					<? endwhile ?>

				</div>
			</div>
		</div>
	<? endif ?>

<? include '../block/footer.php'; ?>