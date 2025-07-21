<?php if($image = $item->coverimage()->toFile()): ?>
	<figure class="p-b-sm">
		<img src="<?= $image->url() ?>" alt="" class="is-rounded" />
	</figure>
<?php endif ?>
