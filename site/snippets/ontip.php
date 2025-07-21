
<?php

$directionPrev = @$flip ? 'left' : 'right';
$directionNext = @$flip ? 'right'  : 'left';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>

	<?php if($page->hasPrevVisible()): ?>
    <a class="uk-background-default uk-padding" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>" uk-tooltip="pos: top">
      <div class="uk-text-uppercase rohn-b">
				<span uk-icon="icon: chevron-<?= $directionPrev ?>; ratio: 2"></span>
				&nbsp;&nbsp;Older
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

	<?php if($page->hasNextVisible()): ?>
    <a class="uk-background-default uk-padding" href="<?= $page->nextVisible()->url() ?>" rel="prev" title="<?= $page->nextVisible()->title()->html() ?>" uk-tooltip="pos: top">
      <div class="uk-text-uppercase rohn-b">
				Newer&nbsp;&nbsp;
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
