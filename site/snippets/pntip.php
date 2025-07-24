
<?php

$directionPrev = @$flip ? 'left' : 'right';
$directionNext = @$flip ? 'right'  : 'left';

if($page->hasNextListed() || $page->hasPrevListed()): ?>

	<?php if($page->hasPrevListed()): ?>
    <a class="uk-background-default uk-padding" href="<?= $page->prevListed()->url() ?>" rel="prev" title="<?= $page->prevListed()->subtitle()->html() ?>" uk-tooltip="pos: top">
      <div class="uk-text-uppercase rohn-b">
				<span uk-icon="icon: chevron-<?= $directionPrev ?>; ratio: 2"></span>
				&nbsp;&nbsp;<?= $page->prevListed()->title()->html() ?>
			</div>
    </a>
	<?php else: ?>
		<a class="uk-background-default hb-text-dark uk-text-uppercase rohn-b uk-padding" href="#mcsub" rel="prev" title="Occasional emails. No spam." uk-tooltip="pos: top" uk-scroll>
      <div>
				Subscribe for More&nbsp;&nbsp;
				<span uk-icon="icon: arrow-down; ratio: 2"></span>
      </div>
		</a>
	<?php endif ?>

	<?php if($page->hasNextListed()): ?>
    <a class="uk-background-default uk-padding" href="<?= $page->nextListed()->url() ?>" rel="prev" title="<?= $page->nextListed()->subtitle()->html() ?>" uk-tooltip="pos: top">
      <div class="uk-text-uppercase rohn-b">
				<?= $page->nextListed()->title()->html() ?>&nbsp;&nbsp;
				<span uk-icon="icon: chevron-<?= $directionNext ?>; ratio: 2"></span>
      </div>
		</a>
	<?php else: ?>
    <a class="uk-background-default hb-text-dark uk-text-uppercase rohn-b uk-padding" href="#mcsub" rel="prev" title="Occasional emails. No spam." uk-tooltip="pos: top" uk-scroll>
      <div>
				Subscribe for More&nbsp;&nbsp;
				<span uk-icon="icon: arrow-down; ratio: 2"></span>
      </div>
		</a>
	<?php endif ?>

<?php endif ?>
