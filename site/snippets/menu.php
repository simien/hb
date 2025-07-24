<?php $visiblePages = $site->children()->listed(); ?>
<?php // DEBUG: Output all site children info ?>
<ul>
<?php foreach($site->children() as $child): ?>
  <li>ID: <?= $child->id() ?> | Slug: <?= $child->slug() ?> | Template: <?= $child->intendedTemplate() ?> | Title: <?= $child->title() ?></li>
<?php endforeach ?>
</ul>
<?php // END DEBUG ?>
<?php foreach($visiblePages as $item): ?>
	<li class="<?= r($item->isOpen(), ' uk-active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>
