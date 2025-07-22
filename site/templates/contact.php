<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<section class="uk-section uk-section-muted uk-section-xsmall">
			<div class="uk-container uk-container-expand uk-padding-bottom-small">
				<h1 class="uk-h1 uk-margin-remove"><?= $page->title()->html() ?></h1>
			</div>
		</section>

		<section class="uk-section">
			<div class="uk-container uk-container-expand">
				<h2>Get in Touch</h2>

				<ul class="contact-options" uk-grid>
					<?php foreach($page->contactoptions()->toStructure() as $item): ?>
						<?php $icon = $page->image($item->icon()); ?>
						<li class="contact-item uk-width-1-3@s uk-width-1-3@m">
							<div class="contact-item-content">
								<img src="<?= $icon->url() ?>" width="<?= $icon->width() ?>" alt="<?= $item->title()->html() ?> icon" class="contact-item-icon" />
								<h3 class="contact-item-title"><?= $item->title()->html() ?></h3>
								<p class="contact-item-text">
									<?= $item->text()->html() ?>
								</p>
							</div>
							<p class="contact-item-action">
								<a href="<?= $item->url()->html() ?>" class="button m-b-lg"><?= $item->linktext()->html() ?></a>
							</p>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</secion>

		<div class="uk-section uk-section-large">
			<div class="uk-text-center">
				<?= $page->text()->kirbytext() ?>
			</div>
		</div>

	</main>

<?php snippet('footer') ?>
