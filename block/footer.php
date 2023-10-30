		<? if ($site_set['bl12'] == true): ?>
			<div class="bl12">
				<div class="bl_c">
					<div class="head_c txt_c" data-aos="fade-up"><h3><?=t::w('bl12_off')?></h3></div>
					<div class="bl12_r2c">
						<? $sql = db::query("select * from `word_blocks` where type = 'bl12' and lang = '$lang' ORDER BY number ASC"); ?>
						<?	while($ana = mysqli_fetch_array($sql)): ?>
							<div class="bl12_r2ci" data-aos="fade-up">
								<div class="bl12_r2cimg"><?=$ana['img']?></div>
								<h6 class="bl12_r2cic"><?=$ana['txt1']?></h6>
							</div>
						<? endwhile ?>
					</div>
					<div class="bl12_b" data-aos="fade-up">
						<p><?=t::w('bl12_b')?></p>
						<div class="btn disb_zab3"><span><?=t::w('Get a discount')?></span></div>
					</div>
				</div>
			</div>
		<? endif ?>

		<? if ($site_set['bl11'] == true): ?>
			<div class="bl11">
				<div class="bl_c">
					<div class="bl11_c">
						<div class="bl11_l">
							<div class="head_c"><h4><?=t::w('Frequently asked Questions')?></h4></div>
							<p><?=t::w('bl11_disc')?></p>
							<div class="bl11_btn"><div class="btn disb_zab"><span><?=t::w('submit your')?></span></div></div>
							<div class="bl11_a lazy_bag" data-src="/assets/img/bag/doc2.png"></div>
						</div>
						<div class="bl11_r">
							<div class='faq'>
								<? $sql = db::query("select * from `word_blocks` where type = 'bl11' and lang = '$lang' ORDER BY number ASC"); ?>
								<? while($ana = mysqli_fetch_array($sql)): ?>
									<div class="faq-a">
										<div class="faq-ah">
											<div class="faq-arrow"><i class="far fa-plus"></i></div>
											<h6 class="faq-heading"><?=$ana['txt1']?></h6>
										</div>
										<p class="faq-text"><?=$ana['txt2']?></p>
									</div>
								<? endwhile ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? endif ?>

		<? if ($site_set['bl10'] == true): ?>
			<div class="bl10">
				<div class="bl10_a lazy_bag" data-src="/assets/img/bag/bl11bag2.jpg"></div>
				<div class="bl10_abc">
					<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:1"></div>
					<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:2"></div>
					<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:3"></div>
					<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:4"></div>
					<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:5"></div>
				</div>
				<div class="bl10_c" data-aos="fade-up">
					<div class="head_c txt_c">
						<h4><?=t::w('Still have questions?')?></h4>
						<p><?=t::w('bl10_w')?></p>
					</div>
					<div class="form_c">
						<div class="form_im dsp_n"><input type="text" class="sms" value="Консультация 2"></div>
						<div class="form_im"><input type="tel" placeholder="+7 (___) ___-__-__" class="form_im_txt phone ms_phone"></div>
						<div class="form_im"><div class="btn send"><span><?=t::w('submit your')?></span></div></div>
					</div>
				</div>
			</div>
		<? endif ?>
		
	<!-- end body -->
	</div>

	<? if ($site_set['footer'] == true): ?>
		<footer class="footer">
			<div class="bl_c">
				<div class="foot_c">
					<div class="foot_i">
						<div class="foot_logo">
							<a href="/">
								<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo_bl.png"></div>
								<div class="logo_txt"><?=t::w('Center booking sanatorium Saryagash')?></div>
							</a>
						</div>
					</div>
					<div class="foot_i">
						<div class="bl1_sos">
							<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><div class="bl1_si"><i class="fab fa-instagram"></i></div></a>
							<a target="_blank" href="https://facebook.com/<?=$site['facebook']?>"><div class="bl1_si"><i class="fab fa-facebook"></i></div></a>
							<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="bl1_si"><i class="fab fa-whatsapp"></i></div></a>
						</div>
					</div>
					<div class="foot_i">
						<div class="foot_n">
							<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
							<span><?=t::w('calc_al')?></span>
						</div>
					</div>
				</div>

				<div class="footer_b">
					<div class="footer_bi"><span>© 2021 SHIPALY. <?=t::w('All rights reserved')?></span></div>
					<div class="footer_bi2">
						<div class="footer_bic">
							<div class="footer_bici">
								<span><?=t::w('Developed by:')?></span><a target="_blank" href="https://gprog.kz/">G prog</a>
							</div>
							<div class="footer_bici footer_bici2">
								<a target="_blank" href="https://gprog.kz/"><?=t::w('order site')?></a>
							</div>
						</div>
						<a target="_blank" href="https://gprog.kz/"><div class="footer_bim lazy_bag" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></a>
					</div>
				</div>
			</div>
		</footer>
	<? endif ?>

	<!--  -->
	<? if ($site['metrika'] != null): ?> <noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript> <? endif ?>
	<? if ($site['pixel'] != null): ?> <noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript> <? endif ?>

	<!-- main js -->
	<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$ver?>"></script> <? endforeach ?>

</body>
</html>

	<? include 'modal.php'; ?>