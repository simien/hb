<?php

$bases = $page->children()->slice(0, 7)->visible();

?>
<div>
	<div class="uk-grid-collapse uk-child-width-expand@s uk-grid-match uk-flex uk-flex-center" uk-grid>

		<?php foreach($bases as $base): ?>

		<div class="hb-card uk-card uk-card-default uk-width-1-2@m uk-width-1-2@l uk-width-1-3@xl uk-box-shadow-small uk-box-shadow-hover-medium uk-margin-medium-bottom">
			<div class="uk-card-header uk-background-default uk-padding-small">
					<div class="uk-grid-small uk-flex">
						<div class="uk-width-auto">
							<span class="hb-svg" uk-icon="icon: <?= $base->icon()->html() ?>; ratio: 2">
						</div>
						<div class="uk-width-expand">
								<p class="uk-card-title uk-margin-remove-bottom uk-margin-small-top"><?= $base->title()->html() ?></p>
								<p class="uk-text-meta uk-margin-remove-bottom uk-margin-remove-top uk-padding-bottom-small"><?= $base->subtitle()->html() ?></p>
						</div>
						<div class="uk-width-auto">
								<p class="uk-card-title uk-card-pricing uk-margin-remove-bottom uk-margin-small-top">
									<sup>$</sup>
									<span><?= $base->price()->html() ?></span>
									<sup>/<?= $base->interval()->html() ?></sup>
								</p>
						</div>
					</div>
			</div>
		    <div class="uk-card-body hb-card-body uk-padding-small">
					<dl>
						<?php foreach($base->features()->toStructure() as $item): ?>
							<dt><span uk-icon="icon: check; ratio: 1"></span></dt>
							<dd><?= $item->featuretitle()->html() ?></dd>
						<?php endforeach ?>
					</dl>
		    </div>
		    <div class="uk-card-footer uk-text-center uk-padding-small">
		        <a href="<?= $base->url() ?>" class="uk-button uk-button-secondary uk-button-large uk-border-rounded uk-width-1-1">Reserve&nbsp;<?= $base->title()->html() ?></a>
		    </div>
			</div>

		<?php endforeach ?>

	</div>
</div>
