<div id="cookie_banner-wrapper" class="uk-alert uk-padding-remove uk-margin-remove uk-flex-middle uk-hidden-touch" uk-alert>
		<div class="cookie_container uk-border-rounded">
        <p class="cookie_message uk-width-expand uk-margin-remove"><?= $text; ?> <a href="<?= $link; ?>"><?= $linkText; ?></a></p>
        <button class="cookie_btn_accept_all uk-button uk-button-default uk-button-small uk-border-rounded uk-margin-medium-right" onclick="closeCookie()"><?= $buttonText; ?></button>
        <a class="uk-alert-close uk-width-auto" uk-close></a>
		</div>
</div>

<script>
		function closeCookie(){document.cookie="cookie-note=1;path=/;max-age=864000",banner.style.display="none"}var banner=document.getElementById("cookie_banner-wrapper");-1!==document.cookie.indexOf("cookie-note=1")&&(banner.style.display="none");
</script>
