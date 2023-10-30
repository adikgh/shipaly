<? if ($site_set['preload'] == true): ?>
	<div class="preload">
		<div class="preload_c">
			<div class="preload_logo"></div>
			<div class="preload_animate"><?=t::w('loading')?></div>
		</div>
	</div>
	<script>
		window.onload =()=> {
			setTimeout(function () {
				$(".preload").addClass('preloader_act')
				setTimeout(function(){ $(".preload").addClass('dsp_n') }, 300)
			}, 500)
		}
	</script>
<? endif ?>