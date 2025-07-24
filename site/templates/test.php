<?php /** @var Kirby\Cms\Page $page */ ?>
<main>
  <h1><?= $page->title()->html() ?></h1>
  <div><?= $page->text()->kirbytext() ?></div>
</main> 