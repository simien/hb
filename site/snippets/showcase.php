<?php

$projectsPage = page('projects');
$projects = $projectsPage ? $projectsPage->children()->visible() : [];

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="showcase">

	<?php foreach($projects as $project): ?>

	<div class="showcase-item column">
		<a href="<?= $project->url() ?>" class="uk-link-reset">
			<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
				<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image is-rounded" />
			<?php endif ?>
			<div class="showcase-caption">
				<h3 class="showcase-title"><?= $project->title()->html() ?></h3>
			</div>
		</a>
	</div>

	<?php endforeach ?>

</div>
