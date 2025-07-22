<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<?php if ($cover = $site->file('cover.png')): ?>
			<img src="<?= $cover->url() ?>" class="uk-hidden">
		<?php endif ?>

		<section class="uk-section">

			<div class="uk-container">
				<header>
					<h1 class="d-none"><?= $page->title()->html() ?></h1>
					<div class="text">
						<?= $page->intro()->kirbytext() ?>
					</div>
				</header>

				<div class="text">
					<?= $page->text()->kirbytext() ?>
					<hr class="divider"/>
				</div>
			</div>

		</section>

	</main>

<?php snippet('footer') ?>
