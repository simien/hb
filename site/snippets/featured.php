<section class="uk-section-primary uk-preserve-color" uk-height-viewport="expand:true">
		<div class="uk-section uk-section-xxlarge uk-dark uk-background-cover hb-overlay-container-light uk-text-center uk-blend-multiply" style="background-image: url(<?php echo $page->file($page->featuredimg())->url() ?>)">
				<div class="uk-container uk-container-expand hb-overlay-content uk-flex uk-flex-center">
					<div class="uk-width-1-2@m uk-width-1-1@s">
						<h1 class="uk-h1 uk-text-bold hb-text-secondary uk-margin-small-bottom"><?= $page->featuredtitle()->html() ?></h1>
						<p class="uk-h4 uk-margin-remove-top uk-margin-large-bottom"><?= $page->featuredsubtitle()->html() ?></p>
						<div class="uk-button-group uk-border-rounded">
							<a href="<?= $pages->find('locations/pratt-st')->url() ?>" class="uk-button uk-button-secondary uk-button-large"><span uk-icon="icon: chevron-left; ratio: 1"></span>&nbsp;&nbsp; 300 W Pratt</a>
							<a href="<?= $pages->find('locations/clipper-mill')->url() ?>" class="uk-button uk-button-secondary uk-button-large">Clipper Mill &nbsp;&nbsp;<span uk-icon="icon: chevron-right; ratio: 1"></span></a>
						</div>
					</div>
				</div>
		</div>
</section>
