<?php foreach($pages->visible() as $item): ?>
	<li class="<?= r($item->isOpen(), ' uk-active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>
