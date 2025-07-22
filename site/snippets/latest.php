<?php

$blogPage = page('blog');
$blog = $blogPage ? $blogPage->children()->visible() : [];

if (is_array($blog)) {
    $blog = new Kirby\Cms\Pages([]);
}

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $blog = $blog->limit($limit);

?>

<?php foreach($blog as $article): ?>

<a href="<?= $article->url() ?>" class="uk-link-reset">
	<article class="hb-card hb-card-latest uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-medium uk-transition-toggle">
			<div class="uk-card-media-top uk-responsive-width uk-background-muted uk-inline-clip" tabindex="0"  uk-height-match="target: > img">
				<?php if($image = $article->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
					<img src="<?= $thumb->crop(800, 600)->url() ?>" alt="Thumbnail for <?= $article->title()->html() ?>" class="uk-height-large uk-transition-scale-up uk-transition-opaque" uk-responsive/>
				<?php endif ?>
				<div class="uk-overlay-primary uk-position-cover"></div>
				<div class="uk-overlay uk-position-cover uk-padding-remove">
					<div class="uk-padding">
            <p class="uk-card-title hb-text-light"><?= $article->title()->html() ?></p>
						<p class="hb-text-muted uk-hidden"><?php echo excerpt($article->text(), 40) ?></p>
					</div>
				</div>
			</div>
			<div class="uk-card-footer uk-padding-remove-bottom uk-flex uk-flex-between uk-flex-middle">
				<div class="uk-hidden"><p>Homebase</p></div>
				<div><p><?= $article->date('F jS, Y') ?></p></div>
				<div><p class=" uk-transition-slide-bottom-small">
					Read More
					<span uk-icon="icon: chevron-right; ratio: 1"></span>
				</p></div>
			</div>
	</article>
</a>

<?php endforeach ?>
