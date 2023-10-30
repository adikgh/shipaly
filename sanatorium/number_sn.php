<div class="bl_c">
	<div class="head_c"><h4 class="txt_tu">Выбрать номера</h4></div>
	<div class="sana_bl2_c">
		<? $sql = db::query("select * from `sanatorium_number` where sana_id = '$id' and arh is null ORDER BY type_id ASC"); ?>
	   <? while ($d = mysqli_fetch_array($sql)): ?>
			<a href="/sanatorium/number.php?id=<?=$id?>&price_id=<?=$d['id']?>" class="bl5_i">
				<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/<?=$sana['name'].'/'.$d['img']?>"></div>
				<div class="bl5_ic">
					<div class="bl5_ict">
						<div class="bl5_icn"><?=fun::t($d['type_id'])?></div>
						<div class="bl5_ictp">Номер на <?=fun::d($d['door_id'])?> чел.</div>
					</div>
					<div class="bl5_icb">
						<div class="bl5_icbn">
							<div class="bl5_ics"><i class="fas fa-user"></i><span>1 взрослых за ночь:</span></div>
							<div class="bl5_icp"><?=substr_replace($d['price'],' ',-3, 0)?> <i class="far fa-tenge"></i></div>
						</div>
						<div class="bl5_icbtn">
							<div class="btn btn_sqr"><i class="fal fa-long-arrow-right"></i></div>
						</div>
					</div>
				</div>
			</a>
		<? endwhile ?>
	</div>
</div>