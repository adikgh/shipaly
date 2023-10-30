<div class="bl5">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('OUR RECOMMENDATION')?></div>
				<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl5_of')?></h4>
			</div>
		</div>
		<div class="bl5_c">
			<? $sql = db::query("select * from `sanatorium` where sel is not null ORDER BY number ASC");
		      while ($ana = mysqli_fetch_array($sql)) {
		      	echo '
							<a href="/sana/?id='.$ana['id'].'" class="bl5_i" data-aos="fade-up">
								<div class="bl5_ia lazy_bag" data-src="https://sah.kz/assets/uploads/sanatorium/'.$ana['name'].'/'.$ana['img'].'"></div>
								<div class="bl5_ic">
									<div class="bl5_ict">
										<div class="bl5_icn">'.$ana['name'].'</div>
										<div class="bl5_icts">'.t::rank($ana['rank']).'</div>
									</div>
									<div class="bl5_icb">
										<div class="bl5_icp">'.t::w('from1').t::p($ana['id']).' <i class="far fa-tenge"></i> '.t::w('from2').'</div>
										<div class="bl5_icbtn"><div class="btn btn_sqr"><i class="fal fa-long-arrow-right"></i></div></div>
									</div>
								</div>
							</a>
						';
		      }
			?>
		</div>
		<div class="bl5_b" data-aos="fade-up">
			<p><?=t::w('bl5_of2')?></p>
			<a href="/catalog"><div class="btn"><span><?=t::w('View all')?></span><i class="far fa-long-arrow-right"></i></div></a>
		</div>
	</div>
</div>