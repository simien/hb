<section class="uk-section uk-padding-remove" uk-height-viewport="offset-top: true">
	<div class="uk-background-<?= $site->bkgd()->html() ?> uk-grid-collapse uk-child-width-expand@s uk-text-center uk-height-1-1" uk-grid>
				<div class="uk-background-cover uk-inline-clip uk-padding uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">

					<div class="hb-slideshow" uk-cover>

						<?php $images = page('locations/pratt-st')->images(); ?>
						<?php foreach($images as $image): ?>
							<?php if($images = $page->slideshow()): ?>
								<div class="hb-slideshow-image" style="background-image: url('<?= $image->url() ?>')"></div>
							<?php endif ?>
						<?php endforeach ?>

					</div>

					<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
					<div class="uk-display-block uk-inline-clip hb-slideshow-content">
						<p class="uk-heading-primary uk-text-bold uk-text-uppercase uk-font-primary hb-text-light uk-spacing-medium">Pratt St</p>
						<a href="<?= $pages->find('locations/pratt-st')->url() ?>" class="uk-button uk-button-default uk-button-large uk-border-rounded uk-text-bold"><span uk-icon="icon: chevron-left"></span> Discover Pratt St</a>
					</div>

				</div>
				<div class="uk-background-cover uk-inline-clip uk-padding uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">
					<div class="hb-slideshow" uk-cover>

						<?php $images = page('locations/clipper-mill')->images(); ?>
						<?php foreach($images as $image): ?>
							<?php if($images): ?>
								<div class="hb-slideshow-image" style="background-image: url('<?= $image->url() ?>')"></div>
							<?php endif ?>
						<?php endforeach ?>

					</div>
					<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
					<div class="uk-display-block uk-inline-clip hb-slideshow-content">
						<p class="uk-heading-primary uk-text-bold uk-text-uppercase uk-font-primary hb-text-light uk-spacing-large">Clipper Mill</p>
						<a href="<?= $pages->find('locations/clipper-mill')->url() ?>" class="uk-button uk-button-default uk-button-large uk-border-rounded uk-text-bold">Discover Clipper Mill <span uk-icon="icon: chevron-right"></span></a>
					</div>
				</div>
	</div>
	<div class="uk-position-absolute uk-transform-center uk-hidden-touch" style="left: 50%; top: 50%">
		<div class="uk-padding-large uk-light"><a href="#nextscroll" class="uk-icon-button uk-button-primary uk-box-shadow-small uk-box-shadow-hover-large" uk-icon="icon: chevron-down; ratio: 1.5" uk-scroll  uk-tooltip="title: Learn More"></a></div>
	</div>
</section>
