<div class="uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
<?php

$locationsPage = page('locations');
$bases = $locationsPage ? $locationsPage->grandChildren()->slice(0, 4)->visible() : [];

?>
	<div>
		<div class="uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>

			<?php foreach($bases as $base): ?>

				<div class="hb-card uk-card uk-card-default uk-width-1-2@m uk-width-1-4@l uk-box-shadow-small uk-box-shadow-hover-large">
			    <div class="uk-card-header uk-background-muted">
			        <div class="uk-grid-small uk-flex">
			            <div class="uk-width-expand">
			                <p class="uk-card-title uk-margin-remove-bottom uk-margin-small-top"><?= $base->title()->html() ?></p>
			                <p class="uk-text-meta uk-margin-remove-bottom uk-margin-remove-top uk-padding-bottom-small"><?= $base->subtitle()->html() ?></p>
			            </div>
							<div class="uk-width-auto uk-hidden">
			               	<p class="uk-card-title uk-margin-remove-bottom uk-margin-small-top">
									<strong>
										<?= $base->price()->html() ?>
									</strong>
									<sup><small>/
										<?= $base->interval()->html() ?>
									</small></sup>
								</p>
			            </div>
			        </div>
			    </div>
			    <div class="uk-card-body hb-card-body">
						<p><?= $base->description()->excerpt(125) ?></p>

						<dl>
							<?php foreach($base->featureoptions()->toStructure() as $item): ?>
								<dt><span uk-icon="icon: check; ratio: 1"></span></dt>
								<dd><?= $item->title()->html() ?></dd>
							<?php endforeach ?>
						</dl>
			    </div>
			    <div class="uk-card-footer uk-text-center">
			        <a href="<?= $base->url() ?>" class="uk-button uk-button-secondary uk-button-large uk-border-rounded uk-width-1-1">Explore</a>
			    </div>
				</div>

			<?php endforeach ?>

		</div>
	</div>
</div>
