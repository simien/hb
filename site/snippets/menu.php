<?php if (isset($pages) && is_object($pages)): ?>
  <?php $visiblePages = $pages->visible() ?? []; ?>
  <?php foreach($visiblePages as $item): ?>
    <li class="<?= r($item->isOpen(), ' uk-active') ?>"><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
  <?php endforeach ?>
<?php endif ?>
