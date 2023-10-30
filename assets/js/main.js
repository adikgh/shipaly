$(document).ready(function() {

	AOS.init({duration:500,once:true});


   // 
   var bl13_c = new Swiper('.bl13_c', {
      slidesPerView: 1,
      autoHeight: true,
      navigation:{nextEl:'.bl13_next',prevEl:'.bl13_prev'},
      pagination:{el:'.bl13_pagination',dynamicBullets:true},
      on:{slideChange:function(){$('.lz_bl13').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })
   var bl4_cls = new Swiper('.bl4_cls', {
   	effect: 'fade',
   	autoHeight: true,
   	allowTouchMove: false,
   	fadeEffect:{crossFade:true},
      navigation:{nextEl:'.gallery-next',prevEl:'.gallery-prev'},
      pagination:{el:'.bl4_pag',type:'progressbar'},
   })
	var bl9_con = new Swiper('.bl9_con', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      autoHeight: true,
      navigation:{nextEl:'.bl9_next',prevEl:'.bl9_prev'},
      on:{slideChange:function(){$('.lazy_rev').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })
	var bl3_c = new Swiper('.bl3_c', {
      slidesPerView: 'auto',
      grabCursor: true,
      centeredSlides: true,
      navigation:{nextEl:'.bl3_next',prevEl:'.bl3_prev'},
      on:{slideChange:function(){$('.lz_bl3').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })

})