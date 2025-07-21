<div>
	<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @homebaseworks')?>" target="blank" title="Tweet this" class="uk-icon-link" uk-icon="icon: twitter; ratio: 1"></a>
</div>
<div class="uk-margin-small-left">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook" class="uk-icon-link" uk-icon="icon: facebook; ratio: 1"></a>
</div>
<div class="uk-margin-small-left">
	<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+" class="uk-icon-link" uk-icon="icon: google-plus; ratio: 1"></a>
</div>
