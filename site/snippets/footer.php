	<div id="mcsub" class="uk-section uk-section-primary uk-section-large uk-text-center uk-preserve-color">
		<p class="uk-h2 uk-text-bold hb-text-secondary">Subscribe to our newsletter.</p>
		<p class="uk-h4 uk-margin-small-top uk-padding-medium uk-padding-remove-vertical">Occassional Goodies, Updates, Events and <u>No Spam</u>.</p>
		<div id="mc_embed_signup" class="uk-flex uk-flex-center uk-flex-middle">
			<form action="https://works.us16.list-manage.com/subscribe/post?u=d22bbba28007455d0f7559b78&amp;id=7a39006079" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">

					<div class="mc-field-group">
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						<div class="uk-margin" uk-margin>
								<div style="position: absolute; left: -5000px;" aria-hidden="true">
									<input type="text" name="b_d22bbba28007455d0f7559b78_7a39006079" tabindex="-1" value="">
								</div>
								<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="uk-button uk-button-secondary uk-border-rounded">Subscribe</button>
						</div>
					</div>


				</div>
			</form>
		</div>
	</div>

	<footer class="uk-section uk-section-secondary uk-section-large">
		<div class="uk-container uk-container-expand uk-flex uk-flex-between uk-flex-wrap">
			<div class="uk-width-auto">
				<a href="<?= url() ?>"><img src="<?php echo url('assets/images/logos/hb-logo-dw.svg') ?>" alt="" class="uk-logo-footer uk-preserve"uk-svg></a>
				<div class="uk-margin-medium-top uk-margin-medium-bottom uk-link-reset">
					<a class="uk-margin-right" href="<?= $site->twitterlink()->html() ?>">
						<span uk-icon="icon: twitter; ratio: 0.75"></span>
					</a>
					<a class="uk-margin-right" href="<?= $site->facebooklink()->html() ?>">
						<span uk-icon="icon: facebook; ratio: 0.75"></span>
					</a>
					<a class="uk-margin-right" href="<?= $site->instagramlink()->html() ?>">
						<span uk-icon="icon: instagram; ratio: 0.75"></span>
					</a>
					<a class="uk-margin-right" href="https://itunes.apple.com/ca/app/homebase-works/id1327598158?mt=8">
						<i class="fa fa-apple"></i>
					</a>
					<a class="uk-margin-right" href="https://play.google.com/store/apps/details?id=sharedesk.net.optixapp.homebase">
						<i class="fa fa-android"></i>
					</a>
					<br><br>
					<a id="bbblink" class="sehzbas" href="https://www.bbb.org/greater-maryland/business-reviews/office-space-rental/homebase-coworking-in-baltimore-md-90286417#bbbseal" title="Homebase Coworking, Office Space Rental, Baltimore, MD" style="display: block;position: relative;overflow: hidden; width: 100px; height: 38px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="https://seal-greatermd.bbb.org/logo/sehzbas/homebase-coworking-90286417.png" width="200" height="38" alt="Homebase Coworking, Office Space Rental, Baltimore, MD" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); (function(){var s=document.createElement('script');s.src=bbbprotocol + 'seal-greatermd.bbb.org' + unescape('%2Flogo%2Fhomebase-coworking-90286417.js');s.type='text/javascript';s.async=true;var st=document.getElementsByTagName('script');st=st[st.length-1];var pt=st.parentNode;pt.insertBefore(s,pt.nextSibling);})();</script>
				</div>
			</div>
			<div class="uk-footer-column">
				<h4>Latest Articles</h4>
				<ul class="footer-links uk-list">
					<?php foreach($pages->find('blog')->children()->visible()->limit(3) as $subpage): ?>
					<li>
						<time datetime="<?php echo $subpage->date('c') ?>">
							<?php echo $subpage->date('d/m/y') ?>
						</time>
						<a href="<?php echo $subpage->url() ?>">
							</date> <?php echo html($subpage->title()) ?>
						</a>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="uk-footer-column">
				<h4>Locations</h4>
				<ul class="footer-links uk-list">
					<?php foreach($pages->find('locations')->children()->visible() as $subpage): ?>
					<li>
						<a href="<?php echo $subpage->url() ?>">
							<?php echo html($subpage->title()) ?>
						</a>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="uk-footer-column">
				 <h4>Contact</h4>
				 <ul class="footer-links uk-list">
					 <li><a href="mailto:<?= $site->email()->html() ?>"><?= $site->email()->html() ?></a></li>
					 <li><a href="tel:<?= $site->phone()->html() ?>"><?= $site->phone()->html() ?></a></li>
				 </ul>
			</div>
			<div>
				<a href="#" class="uk-float-right" uk-totop uk-scroll></a>
			</div>
		</div>
		<div class="uk-container uk-container-expand uk-margin-medium-top">
			<hr>
			<div class="uk-flex uk-flex-between uk-flex-middle">
				<div class="uk-text-small">
					<?php echo html::decode($site->copyright()->kirbytext()) ?> | <a href="#modal-install" uk-toggle>Download</a> <?php snippet('install') ?> | <a href="<?= $pages->find('privacy-policy')->url() ?>">Privacy Policy</a> | <a href="<?= $pages->find('terms-of-use')->url() ?>">Terms of Use</a>
				</div>
				<div class="uk-text-small">
					Made with
					 <span uk-icon="icon: heart; ratio: 0.75"></span>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" ></script>

	<!-- uikit -->
	<?php echo js('assets/js/uikit.min.js') ?>
	<?php echo js('assets/js/uikit-icons.min.js') ?>
	<!-- js -->
	<?php foreach($page->files()->filterBy('extension', 'js') as $js): ?>
	<?php echo js($js->url()) ?>
	<?php endforeach ?>
	<?php echo js('assets/js/main.js') ?>
	<!-- cookie -->
	<?= cookie(); ?>

</body>
</html>
