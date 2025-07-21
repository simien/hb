<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<img src="<?php if($image = $page->cover()->toFile()): ?>
			<?= $image->url() ?><?php else: ?>
			<?php echo url('/content/cover.png') ?><?php endif ?>" class="uk-hidden">

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
