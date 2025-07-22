<div class="uk-position-relative uk-light uk-visible-toggle" uk-slideshow="autoplay: true; animation: fade; pause-on-hover: true">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 15">
      <?php foreach($page->slideshow()->yaml() as $image): ?>
        <li class="uk-flex uk-flex-center uk-flex-middle hb-carousel-container uk-cover-container">
            <?php if($image = $page->image($image)): ?>
              <img class="uk-animation-kenburns uk-position-cover" src="<?= $image->url(); ?>" alt="<?= $image->alt()->kirbytext() ?>"  uk-cover>
            <?php endif ?>
            <?php if($image->caption()->isNotEmpty()): ?>
              <div class="uk-transition-fade uk-padding hb-overlay-content">
                <h1 class="uk-h1 hb-text-secondary uk-text-bold uk-margin-remove">
                  <?= $image->caption()->kirbytext() ?>
                </h1>
              </div>
            <?php endif ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-slidenav-large uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-slidenav-large uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
