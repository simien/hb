<?php snippet('header') ?>

	<main class="main" role="main">

		<?php snippet('intro') ?>

		<div id="nextscroll"></div>

		<section class="uk-section uk-section-xlarge">
			<div class="uk-container uk-column-1-1@s uk-column-1-3@m uk-margin-auto">
				<p class="uk-h1 hb-text-secondary uk-text-bold">Hello :)</p>
				<hr class="uk-divider-small">
				<?= $page->texta()->kirbytext() ?>
			</div>
		</section>

		<section class="uk-section-default uk-section-xlarge">
			<div class="uk-container uk-text-center uk-padding-bottom-small">
				<h1 class="uk-h1 uk-text-bold hb-text-secondary uk-margin-small-bottom">Latest Articles</h1>
				<p class="uk-h4 uk-margin-remove-top uk-margin-large-bottom">News, Events &amp; Community</p>
			</div>
			<div class="uk-container">
				<div class="uk-child-width-1-3@m" uk-grid  uk-height-match="target: > a > .uk-card">
						<?php snippet('latest', ['limit' => 3]) ?>
				</div>
			</div>
			<div class="uk-container uk-margin-large-top">
				<div class="uk-flex uk-flex-center">
					<?php $blogPage = $pages->find('blog'); ?>
					<?php if ($blogPage): ?>
						<a href="<?= $blogPage->url() ?>" class="uk-button uk-button-default uk-border-rounded">More Articles</a>
					<?php else: ?>
						<span class="uk-text-muted">Blog not found</span>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="uk-section uk-background-<?= $site->bkgd()->html() ?> uk-text-center uk-padding-remove">
			<div class="uk-background-cover uk-height-large uk-inline-clip uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">
				<video autoplay playsinline muted loop controls uk-video="automute: true" uk-cover>
					<source src="<?php echo url('content/home/homebase-works.mp4') ?>" type="video/mp4">
					<source src="<?php echo url('content/home/homebase-works.webm') ?>" type="video/webm">
					<source src="<?php echo url('content/home/homebase-works.ogg') ?>" type="video/ogg">
				</video>
				<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
				<div class="uk-display-block uk-inline-clip uk-padding-large">
					<p class="uk-heading-primary hb-text-secondary uk-text-capitalize hb-text-light">Join <span class="uk-text-muted uk-text-small uk-text-middle uk-text-uppercase hb-text-primary"><i><u>and</u></i></span> Try</p>
					<p class="uk-width-1-2 uk-margin-auto">Work three consecutive days for free at Homebase. Browse our Locations then Download our app to try&nbsp;out&nbsp;the&nbsp;space.</p>
					<a class="uk-button uk-button-medium uk-button-default uk-dark uk-border-rounded uk-margin-small-bottom" href="<?php echo url('/locations') ?>">Browse Locations</a>
				</div>
			</div>
		</section>

		<section class="uk-section uk-section-xlarge uk-padding-remove-bottom">
			<div class="uk-container uk-column-1-1@s uk-column-1-3@m uk-margin-auto">
				<p class="uk-h1 hb-text-secondary uk-text-bold">Did you know...</p>
				<hr class="uk-divider-small">
				 <?= $page->textb()->kirbytext() ?>
			</div>
		</section>

		<section class="uk-section uk-section-xlarge uk-padding-remove-top">
			<div class="uk-width-1-1@s uk-width-3-4@m uk-margin-auto quote-box">
				<div id="container">
					<div id="quoteContainer" class="quote-text">
						<p></p>
						<p id="quoteGenius"></p>
					</div>
					<div id="buttonContainer" class="uk-flex-bottom uk-margin-medium-top uk-text-center">
				    <button class="uk-button uk-button-default uk-button-large uk-border-rounded" id="quoteButton">Wise Words</button>
				  </div>
				</div>
			</div>
		</section>

		<?php snippet('gallery') ?>

	</main>

<?php snippet('footer') ?>
