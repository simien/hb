<?php

function cookie()
{

	cookieLoadTranslation();

	$site = kirby()->site();
	$pages = $site->pages();

	$link = c::get('ka.cookie.link', 'privacypolicy');
	$url = str::isURL($link) ? $link : $pages->find($link);

	$data = array(
		'text' => l::get('ka.cookie.text'),
		'link' => ($url) ? $url->url() : null,
		'linkText' => l::get('ka.cookie.linkText'),
		'buttonText' => l::get('ka.cookie.buttonText')
	);

	// Return template HTML
	return tpl::load(__DIR__ . DS . 'templates/cookie.php', $data);
}

function cookieLoadTranslation()
{

	if (defined('KIRBY')) {
		$site = kirby()->site();
		$code = $site->multilang() ? $site->language()->code() : c::get('ka.cookie.language', 'en');

		try {
			include_once __DIR__ . DS . 'languages' . DS . $code . '.php';
		} catch (ErrorException $e) {
			try {
				include_once __DIR__ . DS . 'languages' . DS . 'en' . '.php';
			} catch (ErrorException $e) {
				throw new Exception("Uniform does not have a translation for the language '$code'.");
			}
		}
	}
}
