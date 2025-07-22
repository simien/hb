<?php
$locationsPage = page('locations');
$locations = $locationsPage ? $locationsPage->children()->visible() : [];

if(isset($limit)) $locations = $locations->limit($limit);
?>

<?php foreach($locations as $location): ?>

	<a href="<?= $location->url() ?>" class="uk-link-reset uk-width-1-1">
		<div class="uk-card uk-box-shadow-small uk-box-shadow-hover-medium">
		        <div class="uk-card-body uk-transition-toggle" tabindex="0">
		            <p class="uk-h3 uk-text-bold uk-text-uppercase uk-font-primary"><?= $location->title()->html() ?></p>
				  <p><?= $location->street()->html() ?>, <?= $location->suite()->html() ?></br>
						<?= $location->city()->html() ?>, <?= $location->state()->html() ?> <?= $location->zip()->html() ?></br>
					</p>
							<ul uk-grid>
								<?php foreach($location->bases()->toStructure() as $item): ?>
									<li class="uk-width-1-1 uk-margin-remove-bottom uk-margin-small-top">
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-h5 uk-text-capitalize uk-width-expand" uk-leader><span class="uk-text-bold"><?= $item->basetitle()->html() ?></span>&emsp;<span class="uk-text-muted"><?= $item->basesub()->html() ?></span></div>
										    <div class="uk-h5 uk-margin-remove">$<span class="uk-text-bold"><?= $item->baseprice()->html() ?></span><sup class="uk-text-uppercase">/<?= $item->baseint()->html() ?></sup></div>
										</div>
									</li>
								<?php endforeach ?>
							</ul>
							<p class="uk-margin-medium-top uk-text-small uk-transition-slide-bottom-small">
								More Details
								&nbsp;
								<span uk-icon="icon: chevron-right; ratio: 1"></span>
							</p>
		        </div>
		</div>
	</a>

<?php endforeach ?>
