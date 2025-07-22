<?php snippet('header') ?>

	<main class="main" role="main">

		<section class="uk-section-secondary uk-padding-remove hb-sticky" style="z-index: 3;" uk-sticky="top: true;">
			<div class="uk-container uk-container-expand">
				<div class="uk-flex uk-flex-row uk-flex-center uk-flex-middle">
						<ul class="uk-width-1-1@s uk-margin-remove uk-flex-inline uk-overflow-auto uk-flex-nowrap" uk-scrollspy-nav="closest: li; scroll: true" uk-tab>

							<li><a action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="hb-text-light uk-link-reset uk-padding-remove-left" uk-tooltip="title: Back to <?= html($page->parent()->title()) ?>; pos: bottom-left;">
							  <span uk-icon="chevron-left"></span> <span class="uk-hidden-touch"><?= html($page->parent()->title()) ?></span></a></li>
							<li><a href="#hbnav" class="hb-text-light" uk-scroll><?= $page->title()->html() ?></a></li>
							<li><a href="#details" uk-scroll>Details</a></li>
							<li><a href="#gallery" uk-scroll>Gallery</a></li>
						</ul>
						<div class="uk-flex-right uk-margin-medium-right">
							<p class="uk-block-pricing uk-flex-middle uk-margin-remove uk-display-inline">
								<span><sup>$</sup><?= $page->price()->html() ?><sup>/<?= $page->interval()->html() ?></sup></span>
							</p>
						</div>
						<div class="uk-flex-last"><a href="#register" class="hb-link-register" uk-scroll>Register</a><span uk-icon="icon: arrow-down; ratio: 1"></span></div>
				</div>
			</div>
		</section>

		<div class="uk-section uk-section-<?= $site->bkgd()->html() ?> uk-padding-remove uk-position-relative ">
		    <div class="uk-background-cover uk-flex uk-flex-column uk-flex-center uk-blend-<?= $site->blend()->html() ?>" style="background-image: url(<?php if($image = $page->cover()->toFile()): ?>
					<?= $image->url() ?><?php else: ?>
					<?php if ($cover = $site->file('cover.png')): ?>
    <?php echo $cover->url(); ?><?php endif ?>
					<?php endif ?>)" uk-parallax="bgy: -50" uk-height-viewport="offset-top: true">
					<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"></div>
					<div class="uk-overlay uk-position-center uk-position-large uk-text-center">
						<div class="uk-padding">
							<h1 class="uk-heading-primary rohn-b hb-text-light uk-text-uppercase hb-text-shadow-light"><?= $page->title()->html() ?></h1>
							<p class="uk-h3 uk-margin-remove hb-text-light hb-text-secondary"><?= $page->intro()->html() ?></p>
							<div class="uk-padding-large"><a href="#details" class="uk-icon-button uk-button-secondary" uk-icon="icon: chevron-down; ratio: 1.5" uk-scroll ></a></div>
						</div>
					</div>
		    </div>
		</div>

		<section class="uk-section uk-padding-remove">
				<div  class="uk-flex-center" uk-grid>

					<div class="uk-width-1-1@s">
						<div class="hb-content hb-content-sticky">

							<div id="details" class="uk-background-muted hb-content-stuck uk-column-1-1@s uk-column-1-3@m" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false">
								<?= $page->description()->kirbytext() ?>
							</div>

							<div id="gallery" class="uk-background-default hb-content-stuck uk-padding-remove">
									<div class="uk-grid-collapse uk-child-width-1-3" uk-grid uk-lightbox="animation: fade">
											<?php foreach($page->images() as $img): ?>
												<div><a class="uk-inline" href="<?php echo $img->url() ?>" caption="<?php echo $img->title() ?>">
														<img src="<?php echo $img->url() ?>" alt="<?php echo $img->title() ?>">
												</a></div>
											<?php endforeach ?>
									</div>
							</div>

							<div id="share" class="hb-content-stuck uk-hidden">
								<div class="uk-flex uk-flex-between">
									<?php snippet('share') ?>
								</div>
							</div>

							<div id="register" class="hb-content-stuck" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;">
								<script src="https://static.airtable.com/js/embed/embed_snippet_v1.js"></script><iframe class="airtable-embed airtable-dynamic-height" src="https://airtable.com/embed/<?= $page->airtable()->html() ?>" frameborder="0" onmousewheel="" width="100%" height="1376" style="background: transparent; border: none;"></iframe>
							</div>

						</div>
					</div>

				</div>
		</section>

		<div class="uk-grid-collapse uk-child-width-1-2@s uk-text-center hb-pagination" uk-grid>
			<?php snippet('pntip', ['flip' => true]) ?>
		</div>

	</main>

<?php snippet('footer') ?>
