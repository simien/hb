<?php snippet('header') ?>

<main class="main" role="main">

	<div class="uk-section-secondary">
	    <div class="uk-section uk-light uk-background-cover hb-overlay-container uk-blend-screen" style="background-image: url(<?php if($image = $page->cover()->toFile()): ?>
				<?= $image->url() ?>
			<?php else: ?>
				<?php if ($cover = $site->file('cover.png')): ?>
    <?php echo $cover->url(); ?><?php endif ?>
			<?php endif ?>)">
	        <div class="uk-container uk-container-expand hb-overlay-content uk-flex uk-flex-center uk-padding-large">
						<div class="uk-width-2-3@m uk-width-1-1@s">
							<p class="uk-heading-primary hb-text-secondary hb-spacing-small uk-text-capitalize uk-text-bold hb-text-light hb-spacing-small uk-text-uppercase hb-text-shadow-light"><?= $page->title()->html() ?></p>
							<hr class="uk-margin-medium-top uk-margin-medium-bottom">
							<div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-top">
								<div class="uk-flex-first hb-text-light">
									<p class="uk-article-meta hb-text-secondary uk-text-muted uk-heading-bullet uk-margin-small-top">Written by <span class="hb-text-light">Homebase</span> on <span class="hb-text-light"><?= $page->date('F jS, Y') ?></span></p>
								</div>
								<div class="uk-flex-inline"><?php snippet('share') ?></div>
							</div>
						</div>
	        </div>
	    </div>
	</div>

	<section class="uk-section-small">
		<div class="uk-container uk-container-expand uk-flex uk-flex-center">
			<div  class="uk-flex-center" uk-grid>
				<div class="uk-width-2-3@m uk-width-1-1@s">
					<div class="hb-content">
						<?= $page->text()->kirbytext() ?>
						<hr class="uk-margin-medium-top uk-margin-medium-bottom">
						<div class="uk-margin-medium-top uk-margin-large-bottom">
							<div class="uk-flex uk-flex-between">
								<?php snippet('share') ?>
							</div>
						</div>
						<div class="uk-margin-large-bottom">
							<?php snippet('disqus') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center hb-pagination uk-flex uk-flex-middle" uk-grid>
		<?php snippet('ontip', ['flip' => true]) ?>
	</div>

</main>

<?php snippet('footer') ?>
