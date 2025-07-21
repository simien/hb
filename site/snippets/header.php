<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- meta -->
	<?php echo $page->metaTags() ?>
	<!-- favicon -->
	<?php if($favicon = $site->favicon()->toFile()): ?>
		<link rel="icon" href="<?= $favicon->url() ?>" type="image/png">
	<?php endif ?>
	<!-- css -->
	<?= css('assets/css/main.min.css') ?>
	<?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
	<?php echo css($css->url()) ?>
	<?php endforeach ?>
	<!-- analytics -->
	<?php echo analytics() ?>
	<!-- drift -->
	<?php snippet('drift') ?>

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div id="hbnav" style="z-index: 5;" uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom">
		<nav class="uk-navbar-container uk-box-shadow-small" uk-navbar="dropbar: true;" style="position: relative;">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item uk-logo" href="<?= url() ?>"><img src="<?php echo url('assets/images/logos/hb-logo-wd.svg') ?>" alt="" class="uk-preserve" uk-svg></a>
			</div>
			<div class="uk-navbar-right">

				<ul class="uk-navbar-nav uk-visible@s uk-flex-middle">
					<?php snippet('menu') ?>
					<li><a class="uk-text-bold hb-text-dark uk-border-rounded uk-hidden" href="tel:<?= $site->phone()->html() ?>"><?= $site->phone()->html() ?></a></a>
					<li><a class="uk-button uk-button-default uk-border-rounded hb-text-dark" href="#modal-tour" uk-toggle>Book a Tour</a></li>
				</ul>

				<?php snippet('tour') ?>

				<ul class="uk-navbar-nav uk-hidden@s">
					<li>
						<a class="uk-navbar-toggle" href="#">
								<span uk-navbar-toggle-icon></span>
						</a>
						<div class="uk-navbar-dropdown uk-background-default">
								<ul class="uk-nav uk-navbar-dropdown-nav uk-text-right">
										<?php snippet('menu') ?>
										<li><a class="uk-text-bold hb-text-dark" href="tel:<?= $site->phone()->html() ?>"><?= $site->phone()->html() ?></a></li>
										<li><a class="uk-text-bold hb-text-dark" href="#modal-tour" uk-toggle>Book a Tour</a></li>
								</ul>
						</div>
					</li>
				</ul>

			</div>
		</nav>
		<div class="uk-navbar-dropbar"></div>
</div>

<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section"></div>
</div>
