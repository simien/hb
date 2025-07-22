<?php snippet('header') ?>

	<main class="main" role="main" uk-height-viewport="expand:true">

		<section class="uk-section-secondary uk-padding-remove hb-sticky" style="z-index: 3;" uk-sticky="top: hbnav;">
			<div class="uk-container uk-container-expand uk-width-1-1@s">
				<div class="uk-flex uk-flex-row uk-flex-between uk-flex-middle">
						<ul class="uk-margin-remove uk-flex-inline uk-overflow-auto uk-flex-nowrap"  uk-scrollspy-nav="closest: li; scroll: true" uk-tab>
							<li><a href="#hbnav" class="uk-text-bold hb-text-light" uk-scroll><?= $page->title()->html() ?></a></li>
							<li><a href="#bases" uk-scroll>Memberships</a></li>
							<li><a href="#floorplan" uk-scroll>Floorplan</a></li>
							<li><a href="#info" uk-scroll>Details</a></li>
							<li><a href="#features" uk-scroll>Amenities</a></li>
							<li><a href="#gallery" uk-scroll>Gallery</a></li>
							<li><a href="#contact" uk-scroll>Contact</a></li>
						</ul>
				</div>
			</div>
		</section>

		<div class="uk-section uk-section-<?= $site->bkgd()->html() ?> uk-padding-remove uk-position-relative ">
			<div class="uk-background-cover uk-inline-clip uk-padding uk-text-center uk-flex uk-flex-middle uk-flex-center uk-light uk-blend-<?= $site->blend()->html() ?>" uk-height-viewport="offset-top: true">

				<div class="hb-slideshow" uk-cover>

					<?php $images = $page->images(); ?>
					<?php foreach($images as $image): ?>
						<?php if($images = $page->slideshow()): ?>
							<div class="hb-slideshow-image" style="background-image: url('<?= $image->url() ?>')"></div>
						<?php endif ?>
					<?php endforeach ?>

				</div>

				<div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle hb-slideshow-overlay"></div>
				<div class="uk-display-block uk-inline-clip hb-slideshow-content">
					<h1 class="uk-heading-primary rohn-b hb-text-light uk-text-uppercase hb-text-shadow-dark"><?= $page->title()->html() ?></h1>
					<p class="uk-h3 uk-margin-remove hb-text-light hb-text-secondary"><?= $page->intro()->html() ?></p>
					<div class="uk-padding-large"><a href="#bases" class="uk-icon-button uk-button-secondary" uk-icon="icon: chevron-down; ratio: 1.5" uk-scroll ></a></div>
				</div>
			</div>
		</div>

		<section class="uk-section uk-padding-remove">
				<div class="uk-flex-center" uk-grid>
					<div class="uk-width-1-1@s">
						<div class="hb-content hb-content-sticky" style="z-index: 4;">


							<div id="bases" class="hb-content-stuck uk-background-muted uk-padding-large uk-padding-small-top" uk-scrollspy style="z-index: 4;" >
								<div class="uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
									<?php snippet('pricing-location') ?>
								</div>
							</div>

							<div id="floorplan" class="hb-content-stuck uk-background-defaut uk-dark uk-padding-large uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;" >
								<h1 class="uk-h1 uk-text-bold hb-text-secondary uk-margin-small-bottom">Discover your HomeBase</h1>
								<p class="uk-h4 uk-margin-remove-top uk-margin-large-bottom">Availability can rapidly change</p>
								<?php if ($plan = $page->find('plans/hb-prattst-floorplan.png')): ?>
								    <img src="<?php echo $plan->url(); ?>">
								<?php endif ?>
							</div>

							<div id="info" class="hb-content-stuck uk-background-default uk-padding-large" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;" >
								<div class="uk-column-1-1@s uk-column-1-2@m uk-column-1-3@l">
									<?= $page->description()->kirbytext() ?>
								</div>
							</div>

							<div id="features" class="hb-content-stuck uk-background-muted uk-padding-large" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;" >
								<div class="uk-grid-small uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
									<?php foreach($page->features()->toStructure() as $item): ?>
										<div class="uk-card">
											<div class="uk-card-body uk-padding-remove uk-margin-medium-top">
												<div class="uk-grid-small uk-child-width-expand uk-flex-top" uk-grid>
													<div class="uk-width-auto">
														<span uk-icon="icon: <?= $item->featureicon()->html() ?>; ratio: 1"></span>
													</div>
													<div>
														<h4 class="uk-margin-remove-bottom"><?= $item->featuretitle()->html() ?></h4>
													</div>
												</div>
												<p class="uk-text-meta uk-margin-small-top uk-margin-medium-right"><?= $item->featuredesc()->html() ?></p>
											</div>
										</div>
									<?php endforeach ?>
								</div>
							</div>

							<div id="gallery" class="hb-content-stuck uk-background-default uk-padding-remove" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;" >
								<div>
									<div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid uk-lightbox="animation: fade">

										<?php foreach($page->slideshow()->yaml() as $image): ?>
											<div>
											<?php if($image = $page->image($image)): ?>
												<a class="uk-inline" href="<?php echo $image->url() ?>" caption="<?php echo $image->caption() ?>">
														<img src="<?= $image->crop(1200,700)->url(); ?> " alt="<?php echo $image->alt() ?>">
													</a>
											<?php endif ?>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>

							<div id="contact" class="hb-content-stuck uk-background-muted uk-padding-large" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false" style="z-index: 4;" >
									<div class="uk-flex uk-flex-between" uk-grid>
										<div>
												<div class="uk-padding-remove uk-margin-medium-right">
													<dl class="uk-description-list uk-text-small">
														<dt>Service Hours</dt>
														<hr class="uk-divider-small">
														<dd>
															Mon-Fri: 8am-6pm<br>
															Sat-Sun: Closed<br>
														</dd>
													</dl>
												</div>
										</div>
										<div>
												<div class="uk-padding-remove uk-margin-medium-right">
													<dl class="uk-description-list uk-text-small">
														<dt>Address</dt>
														<hr class="uk-divider-small">
														<dd><?= $page->street()->html() ?>, <?= $page->suite()->html() ?></dd>
														<dd><?= $page->city()->html() ?>, <?= $page->state()->html() ?>, <?= $page->zip()->html() ?></dd>
													</dl>
												</div>
										</div>
										<div>
												<div class="uk-padding-remove uk-margin-medium-right">
													<dl class="uk-description-list uk-text-small">
														<dt>Direct</dt>
														<hr class="uk-divider-small">
														<dd><?= $page->phone()->html() ?></dd>
														<dd><?= $page->email()->html() ?></dd>
													</dl>
												</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
		</section>

		<div id="map" class="uk-border-rounded" uk-height-viewport="offset-top: true; offset-bottom: 25"></div>
			<script>
				function initMap() {
					var uluru = {lat: <?= $page->lat()->html() ?>, lng: <?= $page->long()->html() ?>};
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: 12,
						center: uluru
					});
					var marker = new google.maps.Marker({
						position: uluru,
						map: map
					});
				}
			</script>
			<script async defer
			<?php /* Inject Google API keys for JS use */ ?>
			<script>
			window.GOOGLE_CALENDAR_API_KEY = "<?= c::get('google.calendar.api_key') ?>";
			window.GOOGLE_MAPS_API_KEY = "<?= c::get('google.maps.api_key') ?>";
			</script>
			src="https://maps.googleapis.com/maps/api/js?key=<?= c::get('google.maps.api_key') ?>&callback=initMap"></script>
		</div>

		<div class="uk-grid-collapse uk-child-width-1-2 uk-text-center hb-pagination uk-flex uk-flex-middle" uk-grid>
			<?php snippet('pn', ['flip' => true]) ?>
		</div>

	</main>

<?php snippet('footer') ?>
