<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<section class="uk-section uk-section-muted uk-section-xsmall">
			<div class="uk-container uk-container-expand uk-padding-bottom-small">
				<h1 class="uk-h1 uk-margin-remove"><?= $page->title()->html() ?></h1>
			</div>
		</section>

		<div class="uk-hidden">
			<img src="<?php if($image = $page->cover()->toFile()): ?>
				<?= $image->url() ?>
			<?php else: ?>
				<?php echo url('/content/cover.png') ?>
			<?php endif ?>">
		</div>

		<section class="uk-section">
			<div class="uk-container uk-container-expand">

				<ul uk-grid>
					<?php foreach($page->children()->visible() as $member): ?>
						<li class="uk-width-1-3">

							<figure class="team-portrait">
								<img src="<?= $member->image()->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
							</figure>

							<div class="team-info">
								<h3 class="team-name"><?= $member->title()->html() ?></h3>
								<p class="team-position"><?= $member->position()->html() ?></p>
								<div class="team-about text">
									<?= $member->about()->kirbytext() ?>
								</div>
							</div>

							<div class="team-contact text">
								<i>Phone:</i><br />
								<?= kirbytag(['tel' => $member->phone()->html()]) ?><br />
								<i>Email:</i><br />
								<a href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a><br />
							</div>
						</li>
					<?php endforeach ?>
				</ul>

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

	</main>

<?php snippet('footer') ?>
