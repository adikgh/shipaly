<?php include '../config/core.php';

	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sanatorium where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $sana = mysqli_fetch_array($sql); else  header('location: /catalog/');
	} else header('location: /catalog/');

	// site setting
	$share_txt = 'https://shipaly.kz/sanatorium/?id='.$id;
	$menu_name = 'sanatorium';
	// $site_set = [];
	$site_set['swiper'] = true;
	$css = ['sanatorium'];
	$js = ['sanatorium'];
?>
<? include '../block/header.php'; ?>

	<? include 'sana_header.php'; ?>

	<div class="sana_bl">
		<div class="blc1">
			<div class="bl_c">
				<div class="head_c">
					<div class="head_star"><?=fun::rank($sana['rank'])?></div>
					<h3 class="txt_tu"><?=$sana['name_'.$lang]?></h3>
					<div class="head_ln">
						<ul>
							<li><a href="/">Главная</a></li>
							<span><i class="fal fa-angle-right"></i></span>
							<li><a href="/catalog/">Выбор санаторий</a></li>
							<span><i class="fal fa-angle-right"></i></span>
							<li><?=$sana['name_'.$lang]?></li>
						</ul>
					</div>
					<div class="head_share disb_zab5"><i class="far fa-sign-out"></i></div>
				</div>
			</div>
		</div>

		<div class="sana_bl1">
			<div class="sana_bl1t swiper-container">
				<div class="swiper-wrapper">
					<? $data_img = db::query("select * from sanatorium_img where sana_id = '$id' and number_id is null"); ?>
					<?	while ($img = mysqli_fetch_array($data_img)): ?>
						<div class="swiper-slide sana_bl1ti">
							<div class="lazy_sana_img" data-src="/assets/uploads/sanatorium/<?=$sana['name'].'/'.$img['img']?>"></div>
						</div>
					<? endwhile ?>
				</div>
				<div class="swiper-pagination sana_bl1t_pag"></div>
				<div class="swiper-button-prev sana_bl1t_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
				<div class="swiper-button-next sana_bl1t_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
			</div>
		</div>
	</div>

	<div class="sana_btn">
		<div class="bl_c">
			<a href="numbers.php?id=<?=$id?>"><div class="btn"><span>Показать номера</span></div></a>
		</div>
	</div>

	<div class="sana_bl2"> <? include 'number_sn.php'; ?> </div>

	<div class="sana_bl3">
		<div class="bl_c">
			<div class="head_c txt_tu"><h5>об санаторий</h5></div>
			<div class="sana_bl3_c">
				<div class="sana_bl3_ct"><p><?=fun::txt($id)?></p></div>
				<div class="sana_bl3_cb">
					<i class="fas fa-angle-down"></i>
					<span class="sana_bl3_cb1">Подробнее</span>
					<span class="sana_bl3_cb2">Скрыть</span>
				</div>
			</div>
		</div>
	</div>

	<? $data_serv = db::query("select * from sanatorium_service_item where sanatorium_id = '$id'"); ?>
	<?	if (mysqli_num_rows($data_serv)): ?>
		<div class="sana_bl4">
			<div class="bl_c">
				<div class="head_c txt_tu"><h5>услуги санаторий</h5></div>
				<div class="num_bl2_c">

					<? $service_type = db::query("select * from sanatorium_service_type"); ?>
					<? while ($service_type_d = mysqli_fetch_array($service_type)): ?>
						<? $service_type_id = $service_type_d['id']; ?>
						<? $data_serv2 = db::query("select * from sanatorium_service_item where sanatorium_id = '$id' and type_id = '$service_type_id'"); ?>
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

	<? $data_serv = db::query("select * from sanatorium_service_pay where sana_id = '$id'");?>
	<?	if (mysqli_num_rows($data_serv) != 0): ?>
		<div class="sana_bl5">
			<div class="bl_c">
				<div class="head_c txt_tu"><h5>платные услуги</h5></div>
				<div class="sana_bl5_c">
					<? while ($serv = mysqli_fetch_array($data_serv)): ?>
						<div class="sana_bl5_i">
							<div class="sana_bl5_in"><?=fun::serv($serv['service_id'])?></div>
							<div class="sana_bl5_ip"><?=substr_replace($serv['price'],' ',-3, 0)?> <i class="far fa-tenge"></i></div>
						</div>
					<? endwhile ?>
				</div>
			</div>
		</div>
	<? endif ?>

<? include '../block/footer.php'; ?>