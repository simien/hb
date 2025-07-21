	<div id="disqus_thread"></div>
	<script>
	var disqus_config = function () {
	this.page.url = '<?php echo $page->dirurl() ?>';
	this.page.identifier = '<?php echo $page->title() ?>';
	this.page.title = '<?php echo $page->title() ?>';
	};
	(function() {
	var d = document, s = d.createElement('script');
	s.src = 'https://' + '<?php echo $site->disqus() ?>' + '.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
