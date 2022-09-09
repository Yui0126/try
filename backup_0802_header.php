<!DOCTYPE html>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="description" content="<?php echo get_description(); ?>">

	<!-- ここからOGP -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php bloginfo('name'); ?> | <?php the_title(); ?>" />
	<meta property="og:url" content="<?php echo ("https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>" />
	<meta property="og:description" content="<?php echo get_description(); ?>">
	<?php
	$str = $post->post_content;
	$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
	if (has_post_thumbnail() && !is_archive()) {
		$image_id = get_post_thumbnail_id();
		$image = wp_get_attachment_image_src($image_id, 'full');
		echo '<meta property="og:image" content="' . $image[0] . '" />';
		echo "\n";
	} else {
		echo '<meta property="og:image" content="';
		bloginfo('template_directory');
		echo '/images/og-image.png" />';
		echo "\n";
	}
	?>
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@icyejapan">
	<meta name="twitter:creator" content="@icyejapan">
	<!-- ここまでOGP -->

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?<?php echo date('Ymd-Hi'); ?>" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php bloginfo('template_directory'); ?>/slick/slick.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory'); ?>/slick/slick-theme.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/img-switch.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/slick/slick.js"></script>
	<script type="text/javascript">
		window.onload = function() {
			jQuery(function() {
				$("#loadContainer").hide();
				$("#wrapper").fadeIn();
			});

		}

		$(document).ready(function() {
			var headerHeight = $('.site-header').outerHeight(true);
			var ancherHeight = $('.ancher-link').outerHeight(true);
			//var headerHeight = 100;
			var urlHash = location.hash;
			if (urlHash) {
				$('body,html').stop().scrollTop(0);
				setTimeout(function() {
					var target = $(urlHash);
					var position = target.offset().top - (headerHeight + ancherHeight);
					$('body,html').stop().animate({
						scrollTop: position
					}, 1000);
				}, 20);
			}
			$('a[href^="#"]').click(function() {
				var href = $(this).attr("href");
				var target = $(href);
				var position = target.offset().top - (headerHeight + ancherHeight);
				$('body,html').stop().animate({
					scrollTop: position
				}, 1000);
			});
		});



		$(window).on('load scroll', function() {
			if ($(window).scrollTop() > 195 && $(window).width() >= 769) {

				$('.ancher-link').addClass('fixed');
				$('.contentsArea.top.anchor').addClass('fixed');

			} else {

				$('.ancher-link').removeClass('fixed');
				$('.contentsArea.top.anchor').removeClass('fixed');
			}
		})



		$(document).ready(function() {
			$('.slider').slick({
				dots: true,
				infinite: true,
				autoplay: true,
				arrows: true,
				speed: 600,
				autoplaySpeed: 5000,
				slidesToShow: 1,
				centerMode: false,
				centerPadding: '0',
				variableWidth: false,
				prevArrow: '<button class="slide-arrow prev-arrow"><img src="<?php bloginfo('template_directory'); ?>/images/arrow_pre.png" class="slide-arrow prev-arrow"></button>',
				nextArrow: '<button class="slide-arrow next-arrow"><img src="<?php bloginfo('template_directory'); ?>/images/arrow_nxt.png" class="slide-arrow next-arrow"></button>'
			});
		});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="loadContainer">
		<div id="loading"><span></span></div>
	</div>
	<div id="wrapper">
		<a name="pageTop" id="pageTop"></a>
		<header id="header" class="site-header">
			<div id="head-inner" class="clearfix">
				<div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="ICYE ジャパン"></a></div>
				<div id="tagline">現地度120%の国際ボランティア</div>
				<ul id="login">
					<li><a href="https://area31.smp.ne.jp/area/p/ncpb1oilgp5ldpeqh7/6fErac/login.html">マイページ</a></li>
					<li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=ncpb-ldpgpi-32e1c0323806271bebbeb297e1a6ea54">新規登録</a></li>
				</ul>
				<a class="menu"><span class="bar" id="bar01"></span> <span class="bar" id="bar02"></span> <span class="bar" id="bar03"></span></a>
				<nav id="nav">
					<div id="nav-wrap">
						<ul class="nav-column clearfix">
							<li class="home"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo_wh.png" width="200" alt="ICYEジャパン"></a></li>
							<li class="parent"><a href="<?php echo home_url(); ?>/program/">プログラムを選ぶ</a></li>
							<li class="parent"><a href="<?php echo home_url(); ?>/materials/">パンフレット・チラシ・資料</a></li>
							<li class="parent"><a href="<?php echo home_url(); ?>/contact/document/">お問い合わせ・説明会・個別相談</a></li>
							<li class="parent"><a href="<?php echo home_url(); ?>/application/">申込から出発までの流れ</a></li>
							<li class="parent end"><a href="<?php echo home_url(); ?>/returnee/">参加者の声</a></li>
							<li>
								<ul class="other">
									<li><a href="https://area31.smp.ne.jp/area/p/ncpb1oilgp5ldpeqh7/6fErac/login.html">マイページ</a> | <a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=ncpb-ldpgpi-32e1c0323806271bebbeb297e1a6ea54">新規登録</a></li>
								</ul>
								<ul class="other">
									<li><a href="<?php echo home_url(); ?>/about/">ICYEジャパンとは</a> | <a href="<?php echo home_url(); ?>/news/">ニュース</a></li>
								</ul>
								<ul class="social clearfix">
									<li><a href="https://instagram.com/icyejapan/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico_insta.png" width="24" alt="ICYE ジャパンInstagram "></a></li>
									<li><a href="https://twitter.com/icyejapan" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico_tw.png" width="24" alt="ICYE ジャパン Twitter"></a></li>
									<li><a href="https://www.facebook.com/icyejapan" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico_fb.png" width="12" alt="ICYE ジャパンFacebook"></a></li>
								</ul>

							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<div id="black-bg"></div>
		<!-- header End -->