<?php $visiblePages = $site->children()->listed(); ?>
<?php foreach($visiblePages as $item): ?>
  <li class="<?= r($item->isOpen(), ' uk-active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
<?php endforeach ?>
