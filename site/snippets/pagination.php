<?php if($pagination->hasPages()): ?>
	<nav class="pagination wrap cf">

		<?php if($pagination->hasPrevPage()): ?>
			<a class="pagination-item left" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles" data-tooltip="Previous">
				<i class="fa fa-chevron-left"></i>
			</a>
		<?php else: ?>
			<span class="pagination-item left is-inactive">
				<i class="fa fa-chevron-left"></i>
			</span>
		<?php endif ?>

		<?php if($pagination->hasNextPage()): ?>
			<a class="pagination-item right" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles" data-tooltip="Next">
				<i class="fa fa-chevron-right"></i>
			</a>
		<?php else: ?>
			<span class="pagination-item right is-inactive">
				<i class="fa fa-chevron-right"></i>
			</span>
		<?php endif ?>

	</nav>
<?php endif ?>
