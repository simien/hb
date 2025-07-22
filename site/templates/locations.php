<?php snippet('header') ?>

<main class="main" role="main" uk-height-viewport="expand:true">

	<section class="uk-section uk-section-muted uk-section-small uk-hidden">
		<div class="uk-container uk-container-expand uk-flex uk-flex-middle">
			<h1 class="uk-h1 uk-margin-remove"><?= $page->title()->html() ?></h1>
		</div>
	</section>

	<section class="uk-section uk-padding-remove">
		<div class="uk-container uk-container-expand uk-margin-medium-bottom">
			<div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
				<?php snippet('locations') ?>
			</div>
		</div>
	</section>

</main>

<?php snippet('footer') ?>
