<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<section class="uk-section uk-section-muted uk-section-xsmall uk-hidden">
			<div class="uk-container uk-container-expand">
				<h1 class="uk-h1 uk-margin-remove"><?= $page->title()->html() ?></h1>
			</div>
		</section>

		<section class="uk-section uk-padding-remove uk-margin-small-top uk-margin-medium-bottom">
			<div class="uk-container uk-container-expand">
				<div class="frame-container" uk-height-viewport="offset-top: true">
					<iframe class="airtable-embed" src="https://airtable.com/embed/shrhCJdHz7TsQeukC?backgroundColor=orange" onmousewheel="" style="background: transparent; border: none;"></iframe>
				</div>
			</div>
		</section>
	</main>

<?php snippet('footer') ?>
