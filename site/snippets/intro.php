<section class="uk-section uk-padding-remove" uk-height-viewport="offset-top: true">
	<div class="uk-background-<?= $site->bkgd()->html() ?> uk-grid-collapse uk-child-width-expand@s uk-text-center uk-height-1-1" uk-grid>
				<div class="uk-background-cover uk-inline-clip uk-padding uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">

					<div class="hb-slideshow" uk-cover>

						<?php $prattPage = page('locations/pratt-st'); ?>
						<?php $images = $prattPage ? $prattPage->images() : []; ?>
						<?php foreach($images as $image): ?>
							<?php if ($image): ?>
								<div class="hb-slideshow-image" style="background-image: url('<?= $image->url() ?>')"></div>
							<?php endif ?>
						<?php endforeach ?>

					</div>

					<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
					<div class="uk-display-block uk-inline-clip hb-slideshow-content">
						<p class="uk-heading-primary uk-text-bold uk-text-uppercase uk-font-primary hb-text-light uk-spacing-medium">Pratt St</p>
						<?php $prattLocation = $pages->find('locations/pratt-st'); ?>
						<?php if ($prattLocation): ?>
							<a href="<?= $prattLocation->url() ?>" class="uk-button uk-button-default uk-button-large uk-border-rounded uk-text-bold"><span uk-icon="icon: chevron-left"></span> Discover Pratt St</a>
						<?php endif ?>
					</div>

				</div>
				<div class="uk-background-cover uk-inline-clip uk-padding uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">
					<div class="hb-slideshow" uk-cover>

						<?php $clipperPage = page('locations/clipper-mill'); ?>
						<?php $images = $clipperPage ? $clipperPage->images() : []; ?>
						<?php foreach($images as $image): ?>
							<?php if ($image): ?>
								<div class="hb-slideshow-image" style="background-image: url('<?= $image->url() ?>')"></div>
							<?php endif ?>
						<?php endforeach ?>

					</div>
					<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
					<div class="uk-display-block uk-inline-clip hb-slideshow-content">
						<p class="uk-heading-primary uk-text-bold uk-text-uppercase uk-font-primary hb-text-light uk-spacing-large">Clipper Mill</p>
						<?php $clipperLocation = $pages->find('locations/clipper-mill'); ?>
						<?php if ($clipperLocation): ?>
							<a href="<?= $clipperLocation->url() ?>" class="uk-button uk-button-default uk-button-large uk-border-rounded uk-text-bold">Discover Clipper Mill <span uk-icon="icon: chevron-right"></span></a>
						<?php endif ?>
					</div>
				</div>
	</div>
	<div class="uk-position-absolute uk-transform-center uk-hidden-touch" style="left: 50%; top: 50%">
		<div class="uk-padding-large uk-light"><a href="#nextscroll" class="uk-icon-button uk-button-primary uk-box-shadow-small uk-box-shadow-hover-large" uk-icon="icon: chevron-down; ratio: 1.5" uk-scroll  uk-tooltip="title: Learn More"></a></div>
	</div>
</section>
