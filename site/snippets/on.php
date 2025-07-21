<?php

$directionPrev = @$flip ? 'left' : 'right';
$directionNext = @$flip ? 'right'  : 'left';

if($articles->pagination()->hasPages()): ?>

		<?php if($articles->pagination()->hasPrevPage()): ?>

				<a class="uk-background-default" href="<?php echo $articles->pagination()->prevPageURL() ?>">
		      <div class="uk-padding uk-text-uppercase rohn-b">
						<span uk-icon="icon: chevron-<?= $directionPrev ?>; ratio: 2"></span>
						&nbsp;&nbsp;Newer
					</div>
		    </a>
				<?php else: ?>
					<a class="uk-background-default uk-text-uppercase rohn-b" href="#mcsub" rel="prev" title="Occasional. No spam." uk-tooltip="pos: top" uk-scroll>
			      <div class="uk-padding">
							Subscribe for more&nbsp;&nbsp;
							<span uk-icon="icon: arrow-down; ratio: 2"></span>
			      </div>
					</a>

		<?php endif ?>

		<?php if($articles->pagination()->hasNextPage()): ?>

			<a class="uk-background-default" href="<?php echo $articles->pagination()->nextPageURL() ?>">
	      <div class="uk-padding uk-text-uppercase rohn-b">
					Older&nbsp;&nbsp;
					<span uk-icon="icon: chevron-<?= $directionNext ?>; ratio: 2"></span>
	      </div>
			</a>
		<?php else: ?>
			<a class="uk-background-default uk-dark uk-text-uppercase rohn-b uk-padding" href="#mcsub" rel="prev" title="Occasional. No spam." uk-tooltip="pos: top" uk-scroll>
		      <div class="hb-text-dark">
						Subscribe for more&nbsp;&nbsp;
						<span uk-icon="icon: arrow-down; ratio: 2"></span>
		      </div>
			</a>
		<?php endif ?>

<?php endif ?>
