<?php include 'config/core.php';

	// site setting
	$menu_name = 'about';
	// $site_set['tabs'] = true;
	$site_set['swiper'] = true;
	$site_set['aos'] = true;
	$js = ['main'];
?>
<? include 'block/header.php'; ?>

	<div class="blc1">
		<div class="bl_c">
			<div class="head_c">
				<h2>О нас</h2>
				<div class="head_ln">
					<ul>
						<li><a href="/">Главная</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li>о нас</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<? include 'standart/bl8.php'; ?>
	<? include 'standart/bl9.php'; ?>

<? include 'block/footer.php'; ?>