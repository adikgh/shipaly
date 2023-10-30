// if (window.matchMedia("(max-width: 768px)").matches) { }

// 
$(document).ready(function() {


	// lazy load 
	$('.lazy_logo').lazy()
	$('.lazy_bag').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_img').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl3').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl7').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl13').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_rev').lazy({effect:"fadeIn",effectTime:500,threshold:0})


	// 
	$('.clc_top').click(function(){$('body,html').animate({scrollTop:0},1000)})


	$('.menu_bars_clc').on('click', function() {
		$(this).parent().toggleClass('menu_act');
	})


	// 
	$('.menu_pj').click(function(){
		$('.header').toggleClass('trs_act')
		$('.body').toggleClass('trs_act')
		$('.footer').toggleClass('trs_act')
		$('.menu_ph').toggleClass('trs_act')
	})
	$('.menu_back, .menu_phi a').click(function(){
		$('.header').removeClass('trs_act')
		$('.body').removeClass('trs_act')
		$('.footer').removeClass('trs_act')
		$('.menu_ph').removeClass('trs_act')
	})


	// 
	let scroll = $(window).scrollTop();
	if (scroll > 400) $('.tabs_f').addClass('tabs_act'); else $('.tabs_f').removeClass('tabs_act');
	$(window).scroll(function() {
    	scroll = $(window).scrollTop();
		if (scroll > 400) $('.tabs_f').addClass('tabs_act'); else $('.tabs_f').removeClass('tabs_act');
	})








	// setting input
	$(".ms_phone").inputmask("+7 (999) 999-99-99");
	$('input[type=text]').on('input', function(){
		if ($(this).val().length < $(this).attr('data-lenght')) $(this).attr('data-pr', 0)
		else {
			$(this).attr('data-pr', '1')
			$(this).attr('data-val', $(this).val())
		}
	})
	$('input[type=tel]').on('input', function(){
		in_rez = $(this).val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')
		if (in_rez.length < $(this).attr('data-lenght'))  $(this).attr('data-pr', 0)
		else {
			$(this).attr('data-pr', 1)
			$(this).attr('data-val', in_rez)
		}
	})



	// СМС +
	$('.orderSend').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var name = $(this).parent().siblings().children('.name')
		var phone = $(this).parent().siblings().children('.phone')

		if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/config/send.php?mess",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),name:name.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
						name.val('')
						name.attr('data-pr', 0)
					} else mess('Пожалуйста, перезагрузите сайт <br> и попробуйте еще раз')
					console.log(data);
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})



	// 
	$('.send').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var phone = $(this).parent().siblings().children('.phone')

		if (phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/config/send.php?sms",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
					} else mess('Пожалуйста, перезагрузите сайт <br> и попробуйте еще раз')
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})


	$('.test1').on('click', function() {

		var msg = $('#test1').serialize();
		var phone = $('.phone2')

		if (phone.attr('data-pr') != 1) {
			mess('Введите свой данный')
		} else {
			$.ajax({
				url: "/config/send.php?test1",
				type: "POST",
				data: msg,
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						$(location).attr('href', '/catalog.php');
					} else mess('Пожалуйста, перезагрузите сайт <br> и попробуйте еще раз')
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})














   // 
	$('.disb_zab').click(function(){$('.fr').addClass('pop_bl_act')})
	$('.zabr_back').click(function(){$('.fr').removeClass('pop_bl_act')})

	// 
	$('.disb_zab2').click(function(){$('.fr2').addClass('pop_bl_act')})
	$('.zabr_back2').click(function(){$('.fr2').removeClass('pop_bl_act')})

	// 
	$('.disb_zab3').click(function(){$('.fr3').addClass('pop_bl_act')})
	$('.zabr_back3').click(function(){$('.fr3').removeClass('pop_bl_act')})

	// 
	$('.disb_zab4').click(function(){
		$('.fr4').addClass('pop_bl_act')
		$('.fr4 .sms1').val($(this).attr('data-name'))
		$('.fr4 .sms2').val($(this).attr('data-number'))
	})
	$('.zabr_back4').click(function(){$('.fr4').removeClass('pop_bl_act')})

	// 
	$('.disb_zab5').click(function(){$('.fr5').addClass('pop_bl_act')})
	$('.zabr_back5').click(function(){$('.fr5').removeClass('pop_bl_act')})



	// 
	$('.faq-a').each(function(){$(this).height($(this).children('.faq-ah').height())})
	$('.faq-a').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('faq-act') == true) {
			$(this).removeClass('faq-act')
			$(this).height($(this).children('.faq-ah').height())
		} else {
			$(this).addClass('faq-act')
			$(this).height($(this).children('.faq-text').height() + $(this).children('.faq-ah').height() + 30)
		}
	});




})