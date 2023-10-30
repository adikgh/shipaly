<? $menu = mysqli_fetch_array(db::query("select * from `site_menu` where name = '$menu_name' and type = 'main'")); ?>
<? if ($menu_name == 'sana') $menu['title'] = t::w('sana').$sana['name'].t::w('sana1'); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?=$menu['title_'.$lang]?> | <?=$site['name']?></title>
<meta name="description" content="<?=$menu['disc_'.$lang]?> <?=$site['phone_view']?>">
<meta name="keywords" content="<?=$menu['keyw_'.$lang]?>">
<meta name="theme-color" content="#">

<!-- icon -->
<link rel="icon" href="/assets/img/logo/favicon.png" type="image/x-icon">
<link rel="shortcut icon" type="image/icon" href="/assets/img/logo/favicon.png">

<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://<?=$site['site']?>" />
<meta property="og:site_name" content="<?=$site['name']?>" />
<meta property="og:title" content="<?=$menu['title_'.$lang]?> | <?=$site['name']?>" />
<meta property="og:description" content="<?=$menu['disc_'.$lang]?> <?=$site['phone_view']?>" />
<meta property="og:image" content="/assets/img/logo/logo.jpg" />

<!-- apple -->
<meta name="application-name" lang="<?=$lang?>" content="www.<?=$site['site']?>">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<!-- ms -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="cleartype" content="on">
<meta name="msapplication-tooltip" content="<?=$menu['title_'.$lang]?> | <?=$site['name']?>">
<meta name="msapplication-TileColor" content="#">
<meta name="msapplication-starturl" content="https://<?=$site['site']?>">

<!-- css -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" />
<link rel="stylesheet" href="/assets/pl/fontawesome/css/all.min.css" />
<? if ($site_set['swiper']): ?> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" /> <? endif ?>
<? if ($site_set['aos']): ?> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" /> <? endif ?>

<!-- main css -->
<link rel="stylesheet" type="text/css" href="/assets/css/anim.css?v=<?=$ver?>" />
<link rel="stylesheet" type="text/css" href="/assets/css/norm.css?v=<?=$ver?>" />
<? foreach ($css as $i): ?> <link rel="stylesheet" type="text/css" href="/assets/css/<?=$i?>.css?v=<?=$ver?>" /> <? endforeach ?>

<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
<script src="/assets/js/func.js?v=<?=$ver?>"></script>
<? if ($site_set['swiper']): ?> <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"></script> <? endif ?>
<? if ($site_set['aos']): ?> <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> <? endif ?>


<? if ($site['metrika']): ?>
	<!-- Yandex.Metrika counter -->
	<script type='text/javascript'>
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');
		ym(<?=$site['metrika']?>, 'init', {clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});
	</script>
<? endif ?>
<? if ($site['pixel']): ?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '<?=$site['pixel']?>');
	fbq('track', 'PageView');
	</script>
<? endif ?>