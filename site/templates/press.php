<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<section class="uk-section uk-section-muted uk-section-small uk-hidden">
			<div class="uk-container uk-container-expand">
				<div class="uk-flex uk-flex-row uk-flex-middle uk-flex-stretch" uk-grid>
						<div class="uk-width-1-1">
								<h1 class="uk-h1 uk-margin-remove"><?= $page->title()->html() ?></h1>
						</div>
				</div>
			</div>
		</section>

		<div class="uk-hidden">
			<?php
			if($image = $page->cover()->toFile()): ?>
			<img src="<?= $image->url() ?>">
			<?php else: ?>
			<?php if ($cover = $site->file('cover.png')): ?>
    <img src="<?php echo $cover->url(); ?>">
<?php endif ?>
			<?php endif ?>
		</div>

		<section class="uk-section uk-padding-remove">
			<div class="uk-container uk-container-expand uk-padding-remove-vertical  uk-margin-medium-bottom">

				<div class="uk-container uk-text-center uk-margin-small-top uk-padding-bottom-small">
					<h1 class="uk-heading-line uk-h1 uk-text-bold hb-text-secondary uk-margin-medium-top uk-margin-small-bottom"><span>Newsworthy</span></h1>
					<p class="uk-h4 uk-margin-remove-top uk-margin-medium-bottom">See what others are saying</p>
				</div>

				<div class="uk-container uk-container-expand uk-padding-remove-vertical  uk-margin-medium-bottom">
					<div class="uk-child-width-1-3@m" uk-grid uk-height-match="target: > a > .uk-card">
						<?php if($articles = $page->children()->listed()->flip()->paginate(3)): ?>
							<?php foreach($articles as $article): ?>
								<a href="<?= $article->url() ?>" class="uk-link-reset">
									<article class="uk-card uk-card-default">
											<div class="uk-card-body">
												<p class="uk-article-meta uk-heading-bullet">Written on <span class="hb-text-dark"><date><?= $article->date('F jS, Y') ?></date></span></p>
												<p class="uk-h4 hb-text-secondary hb-spacing-small uk-text-capitalize uk-text-bold uk-margin-remove-top"><?= $article->title()->html() ?></p>
												<hr>
												<p><?php echo excerpt($article->text(), 125) ?></p>
											</div>
											<div class="uk-card-footer">
														<p class="uk-button uk-button-text" href="#">Read more</p>
												</div>
									</article>
								</a>
							<?php endforeach ?>
						<?php else: ?>
							<p>This blog does not contain any articles yet.</p>
						<?php endif ?>
					</div>
				</div>

				<div class="uk-child-width-1-2@m" uk-grid>
					<?php if($articles = $page->children()->listed()->flip()->paginate(2)): ?>
						<?php foreach($articles as $article): ?>
							<a href="<?= $article->url() ?>" class="uk-link-reset uk-margin-medium-top">
								<article class="uk-card uk-card-default">
									<div class="uk-card-media-top uk-cover-container">
										<?php if($image = $article->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(1200, 800); ?>
											<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $article->title()->html() ?>" uk-cover/>
										<?php endif ?>
											<canvas width="1200" height="500"></canvas>
									</div>
										<div class="uk-card-body">
											<p class="uk-article-meta uk-heading-bullet">Written on <span class="hb-text-dark"><date><?= $article->date('F jS, Y') ?></date></span></p>
											<p class="uk-h2 hb-text-secondary hb-spacing-small uk-text-capitalize uk-text-bold uk-margin-remove-top"><?= $article->title()->html() ?></p>
											<hr>
											<p><?php echo excerpt($article->text(), 200) ?></p>
										</div>
										<div class="uk-card-footer">
													<p class="uk-button uk-button-text" href="#">Read more</p>
											</div>
								</article>
							</a>
						<?php endforeach ?>
					<?php else: ?>
						<p>This blog does not contain any articles yet.</p>
					<?php endif ?>
				</div>
			</div>

		</section>

		<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center hb-pagination" uk-grid>
			<?php snippet('on', ['flip' => true]) ?>
		</div>

	</main>

<?php snippet('footer') ?>
