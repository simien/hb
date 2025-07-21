<?php

$locations = page('locations')->children()->visible();

if(isset($limit)) $locations = $locations->limit($limit);

?>

<?php foreach($locations as $location): ?>

	<a href="<?= $location->url() ?>" class="uk-link-reset uk-margin-medium-top">
		<div class="uk-box-shadow-small uk-box-shadow-hover-medium uk-card uk-grid-collapse uk-flex uk-flex-column" uk-grid>
				<div class="uk-background-<?= $site->bkgd()->html() ?> uk-card-media-top uk-inline-clip">

					<div class="uk-background-cover uk-inline-clip uk-padding uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>">

						<div class="hb-slideshow" uk-cover>
							<?php foreach($location->images() as $image) :?>
								<div class="hb-slideshow-image" style="background-image: url('<?php echo $image->url() ?>')"></div>
							<?php endforeach ?>
						</div>

						<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
						<div class="uk-display-block uk-inline-clip hb-slideshow-content">
							<p class="uk-heading-primary uk-text-bold uk-text-uppercase uk-font-primary hb-text-light uk-spacing-medium"><?= $location->title()->html() ?></p>
							<p class="hb-text-secondary"><?= $location->intro()->html() ?></p>
						</div>

					</div>
				</div>
				<div class="uk-card-body uk-background-default uk-transition-toggle" tabindex="0">
						<p><?= $location->description()->html()->excerpt(200) ?></p>
						<hr>
						<div class="uk-grid-small uk-child-width-1-2@m uk-child-width-1-1@s" uk-grid>
							<?php	$bases = $location->children()->slice(0, 7)->visible(); ?>
							<?php foreach($bases as $base): ?>
							<div class="uk-margin-bottom-small uk-divider-small">
								<div class="uk-grid-collapse uk-flex" uk-grid>
										<div class="uk-width-expand">
												<p class="uk-text-bold uk-margin-small-bottom uk-margin-small-top"><?= $base->title()->html() ?></p>
												<p class="uk-text-meta uk-margin-remove-bottom uk-margin-remove-top uk-padding-bottom-small"><?= $base->subtitle()->html() ?></p>
										</div>
										<div class="uk-width-auto uk-margin-small-right">
												<p class="uk-card-title uk-card-pricing uk-margin-remove-bottom uk-margin-remove-top">
													<sup>$</sup>
													<span><?= $base->price()->html() ?></span>
													<sup>/<?= $base->interval()->html() ?></sup>
												</p>
										</div>
								</div>
							</div>
							<?php endforeach ?>
						</div>
						<p class="uk-margin-medium-top uk-text-small uk-transition-slide-bottom-small">
							More Details
							&nbsp;
							<span uk-icon="icon: chevron-right; ratio: 1"></span>
						</p>
				</div>
		</div>
	</a>

<?php endforeach ?>
