<?php include 'config/core.php';

	// site setting
	$menu_name = 'catalog';
	// $site_set = [];
	$css = ['catalog'];
	$js = ['catalog'];
?>
<? include 'block/header.php'; ?>

	<div class="blc1">
		<div class="bl_c">
			<div class="head_c">
				<h4>Выбор санаторий</h4>
			</div>
		</div>
	</div>

	<div class="blc2">
		<div class="bl_c">
			<div class="blc2_c">
				<div class="blc2_b">
					<? $sql = db::query("select * from `sanatorium` where number is not null ORDER BY number ASC"); ?>
					<? while($ana = mysqli_fetch_array($sql)): ?>
						<a href="/sanatorium/?id=<?=$ana['id']?>" class="bl5_i">
							<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/<?=$ana['name'].'/'.$ana['img']?>"></div>
							<div class="bl5_ic">
								<div class="bl5_ict">
									<div class="bl5_icn"><?=$ana['name_'.$lang]?></div>
									<div class="bl5_icts"><?=fun::rank($ana['rank'])?></div>
								</div>
								<div class="bl5_icb">
									<div class="bl5_icp"><?=t::w('from1').fun::p($ana['id'])?> <i class="far fa-tenge"></i> <?=t::w('from2')?></div>
									<div class="bl5_icbtn"><div class="btn btn_sqr"><i class="fal fa-long-arrow-right"></i></div></div>
								</div>
							</div>
						</a>
					<? endwhile ?>
				</div>
			</div>
		</div>
	</div>

<? include 'block/footer.php'; ?>