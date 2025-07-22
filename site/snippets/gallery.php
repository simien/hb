<section class="uk-section-muted uk-padding-remove">
		<div class="uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-1@s uk-flex-center" uk-grid uk-height-match="target: > div > a.uk-inline" uk-lightbox="animation: fade" uk-scrollspy="cls: uk-animation-fade; target: > div > a; delay: 200; repeat: false">
			<?php foreach($page->gallery()->yaml() as $image): ?>
				<div>
				<?php if($image = $page->image($image)): ?>
					<a class="uk-inline uk-flex-wrap-stretch" href="<?php echo $image->url() ?>" caption="<?php echo $image->caption() ?>">
							<img src="<?= $image->crop(1920, 1080)->url(); ?> " alt="<?php echo $image->alt() ?>">
					</a>
				<?php endif ?>
				</div>
			<?php endforeach; ?>
		</div>
</section>
