<?php include 'config/core.php';

	// site setting
	$menu_name = 'home';
	$site_set['visible'] = 'after';
	$site_set['header_wh'] = true;
	$site_set['header_logo'] = 'cl';
	$site_set['swiper'] = true;
	$site_set['aos'] = true;
	$js = ['main'];
?>
<? include 'block/header.php'; ?>

	<div class="bl1">
		<div class="bl1_a" style="background-image:url(/assets/img/bag/tashkent1.jpg)"></div>

		<div class="bl_c">
			<div class="bl1_c <?=($lang=='kz'?'bl1_c2':'')?>">
				<div class="bl1_offer" data-aos="fade-up" data-aos-delay="700"><h1><?=t::w('bl1_offer')?></h1></div>
				<div class="bl1_disc" data-aos="fade-up" data-aos-delay="800"><p><?=t::w('bl1_disc')?></p></div>

				<div class="bl1_btn" data-aos="fade-up" data-aos-delay="900">
					<div class="btn disb_zab">
						<span><?=t::w('To get the consultation')?></span>
						<div class="bl1_btn_a" data-aos="fade-up" data-aos-offset="0" data-aos-delay="1000">
							<div class="bl1_btn_ab" style="background-image:url(/assets/img/icons/19384_12.png)"></div>
							<span><?=t::w('bl1_sale')?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bl7" id="bl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('Our advantages')?></div>
					<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl7_of2')?></h3>
				</div>
			</div>
			<div class="bl7_c">
				<? $sql = db::query("select * from `word_blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC"); ?>
				<?	while($ana = mysqli_fetch_array($sql)): ?>
					<div class="bl7_i" data-aos="fade-up">
						<div class="bl7_img lazy_bag" data-src="/assets/img/bag/<?=$ana['img']?>"></div>
						<h6 class="bl7_in"><?=$ana['txt1']?></h6>
						<p class="bl7_it"><?=$ana['txt2']?></p>
					</div>
				<? endwhile ?>
			</div>
			<div class="bl7_b" data-aos="fade-up">
				<p><?=t::w('bl7_of3')?></p>
				<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
					<div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></div>
				</a>
			</div>
		</div>
	</div>

	<div class="bl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('bl2_of1')?></div>
					<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl2_of2')?></h3>
				</div>
			</div>
			<div class="bl2_con">
				<? $sql = db::query("select * from `word_blocks` where type = 'bl2' and lang = '$lang' ORDER BY number ASC"); ?>
				<?	while($ana = mysqli_fetch_array($sql)): ?>
					<div class="bl2_i" data-aos="fade-up">
						<div class="bl2_img lazy_bag" data-src="/assets/img/icons/<?=$ana['img']?>"></div>
						<h6 class="bl2_l"><?=$ana['txt1']?></h6>
						<div class="bl_raz"><?=$ana['txt2']?></div>
						<p class="bl2_r"><?=$ana['txt3']?></p>
					</div>
				<? endwhile ?>
			</div>
			<div class="bl2_b" data-aos="fade-up">
				<p><?=t::w('bl2_of3')?></p>
				<a href="/catalog">
					<div class="btn"><span><?=t::w('View the sanatorium')?></span><i class="far fa-long-arrow-right"></i></div>
				</a>
			</div>
		</div>
	</div>

	<? include 'standart/bl8.php'; ?>
	<? // include 'standart/bl13.php'; ?>
	<? include 'standart/bl4.php'; ?>
	
	<div class="bl5">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('OUR RECOMMENDATION')?></div>
					<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl5_of')?></h4>
				</div>
			</div>
			<div class="bl5_c">
				<? $sql = db::query("select * from `sanatorium` where sel is not null ORDER BY number ASC"); ?>
				<?	while ($ana = mysqli_fetch_array($sql)): ?>
					<a href="/sanatorium/?id=<?=$ana['id']?>" class="bl5_i" data-aos="fade-up">
						<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/<?=$ana['name'].'/'.$ana['img']?>"></div>
						<div class="bl5_ic">
							<div class="bl5_ict">
								<div class="bl5_icn"><?=$ana['name']?></div>
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
			<div class="bl5_b" data-aos="fade-up">
				<p><?=t::w('bl5_of2')?></p>
				<a href="/catalog.php"><div class="btn"><span><?=t::w('View all')?></span><i class="far fa-long-arrow-right"></i></div></a>
			</div>
		</div>
	</div>

	<div class="bl3">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('Rest stages')?></div>
					<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl3_p')?></h4>
				</div>
			</div>
		</div>
		<div class="bl3s">
			<div class="bl3_c swiper-container">
				<div class="swiper-wrapper">
					<? $sql = db::query("select * from `word_blocks` where type = 'bl3' and lang = '$lang' ORDER BY number ASC"); ?>
					<?	while($ana = mysqli_fetch_array($sql)): ?>
						<div class="swiper-slide bl3_i" data-aos="fade-up">
							<div class="bl3_img lz_bl3" data-src="/assets/img/bag/<?=$ana['img']?>"></div>
							<div class="bl3_ic">
								<div class="bl3_icn"><?=$ana['number']?></div>
								<h6 class="bl3_ich"><?=$ana['txt1']?></h6>
							</div>
						</div>
					<? endwhile ?>
				</div>
			</div>
			<div class="swiper-button-prev bl3_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
			<div class="swiper-button-next bl3_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
		</div>
	</div>

	<? include 'standart/bl9.php'; ?>

<? include 'block/footer.php'; ?>