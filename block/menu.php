<? if ($site_set['header'] == true): ?>
	<div class="header <?=($site_set['header_wh'] == 'true'?'header_wh':'')?> <?=($site_set['header2'] == 'true'?'header2':'')?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="header_l">
					<a href="/" class="logo">
						<div class="logo_i lazy_logo" data-src="/assets/img/logo/<?=($site_set['header_logo']=='cl'?'logo_wh.png':'logo_bl.png')?>"></div>
					</a>
					<? if ($site_set['menu'] == true): ?>
						<div class="cmenu">
							<? $sql = db::query("select * from `site_menu` where number is not null ORDER BY number ASC"); ?>
							<? while ($ana = mysqli_fetch_array($sql)): ?>
								<a href="<?=$ana['href']?>" class="cmenu_i"><?=$ana['name_'.$lang]?></a>
							<? endwhile ?>
						</div>
					<? endif ?>
				</div>
				<div class="header_r">
					<div class="lang">
						<?=($lang=='kz'?'<div class="lang_i"><span>Қазақша</span><span>ҚАЗ</span></div>':'<a href="'.$url.'?lang=kz" class="lang_ia"><span>Қазақша</span><span>ҚАЗ</span></a>')?>
						<?=($lang=='ru'?'<div class="lang_i"><span>Русский</span><span>РУС</span></div>':'<a href="'.$url.'?lang=ru" class="lang_ia"><span>Русский</span><span>РУС</span></a>')?>
					</div>
					<!-- <div class="bl1_sos" data-aos="fade-right" data-aos-delay="100" data-aos-offset="100">
						<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><div class="bl1_si"><i class="fab fa-instagram"></i></div></a>
						<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="bl1_si"><i class="fab fa-whatsapp"></i></div></a>
					</div> -->
					<a href="tel:<?=$site['phone']?>" class="phone_nm"><?=$site['phone_view']?></a>

					<? if ($site_set['menu'] == true): ?>
						<div class="menu">
							<div class="menu_bars menu_bars_clc"><div class="menu_bars_i"></div></div>
							<div class="menu_c">
								<? $sql = db::query("select * from `site_menu` where number is not null ORDER BY number ASC"); ?>
								<? while ($ana = mysqli_fetch_array($sql)): ?>
									<a class="menu_ci" href="<?=$ana['href']?>">
										<div class="menu_cin"><?=$ana['icon']?></div>
										<div class="menu_cih"><?=$ana['name_'.$lang]?></div>
									</a>
								<? endwhile ?>
							</div>
						</div>
					<? endif ?>
				</div>
			</div>
		</div>
	</div>
<? endif ?>