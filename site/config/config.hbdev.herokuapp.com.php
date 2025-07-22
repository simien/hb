<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby.

If you have no license yet, please buy one:
http://getkirby.com/buy and support an indie developer.

You are not allowed to run a website without a valid license key.
Please read the End User License Agreement for more information:
http://getkirby.com/license

*/


/*

---------------------------------------
URL Setup
---------------------------------------

By default kirby tries to detect the correct url
for your site if this is set to false, but if this should fail
or you need to set it on your own, do it like this:

c::set('url', 'http://yourdomain.com');

Make sure to write the url without a trailing slash.

To work with relative URLs, you can set the URL like this:

c::set('url', '/');

*/


/*

---------------------------------------
Subfolder Setup
---------------------------------------

Kirby will automatically try to detect the subfolder

i.e. http://yourdomain.com/subfolder

This might fail depending on your server setup.
In such a case, please set the correct subfolder here.

You must also set the right url then:

c::set('url', 'http://yoururl.com/subfolder');

if you are using the .htaccess file, make sure to
set the right RewriteBase there as well:

RewriteBase /subfolder

*/


/*

---------------------------------------
Rewrite URL Setup
---------------------------------------

Kirby uses apache's mod_rewrite to build nice
urls like http://yourdomain.com/about by default.
If you can't use mod_rewrite disable rewriting here.
Kirby will then switch to urls like this:

http://yourdomain.com/index.php/about

*/


/*

---------------------------------------
Homepage Setup
---------------------------------------

By default the folder/uri for your homepage is "home".
Sometimes it makes sense to change that to make your blog
your homepage for example. Just change it here in that case.

*/


/*

---------------------------------------
Force SSL
---------------------------------------

If you want to make sure to force SSL on every
page, just set this setting to true.

Also make sure to include https in your url setup:
c::set('url', 'https://yourdomain.com');

*/


/*

---------------------------------------
Kirbytext Setup
---------------------------------------

set the default video width and height for
embedded flash videos from youtube or vimeo

*/


/*

---------------------------------------
Markdown Setup
---------------------------------------

You can globally switch Markdown parsing
on or off here.

To disable automatic line breaks in markdown
set markdown.breaks to false.

You can also switch between regular markdown
or markdown extra: http://michelf.com/projects/php-markdown/extra/

*/


/*

---------------------------------------
Smartypants Setup
---------------------------------------

Smartypants is a typography plugin, which
helps to improve things like quotes and ellipsises
and all those nifty little typography details.

You can read more about it here:
http://michelf.com/projects/php-smartypants/typographer/

Smartypants is switched off by default.
As soon as it is switched on it will affect all
texts which are parsed by kirbytext()

*/


/*

---------------------------------------
Tinyurl Setup
---------------------------------------

KirbyCMS has built in tiny urls for every
page. Tinyurls look like this:

http://yourdomain.com/x/asd2qd1c

the /x/ in the url is needed to detect tinyurls,
you can change the x to anything else but an existing page uri.

If you don't want to use tiny urls for your site
disable them here

*/


/*

---------------------------------------
Cache
---------------------------------------

Enable or disable the cache.
It is disabled by default.

If you enable it, you need to make
sure that the site/cache
directory is writable.

You can also decide to disable/enable
either caching of the data structure
or the final html. If you are caching
the final html, make sure to clean
the cache, once you've modified your
templates. It's better to keep this
off until your site is ready for production.

With c::set('cache.autoupdate') you can set if
Kirby will automatically check for updates in your
content folder. Depending on the size of your site
this can slow down the performance, because the
filesystem is accessed a lot. Switch this off to
disabled autoupdating of cache files, but then you
need to make sure to delete cache files yourself after
each update.

With c::set('cache.ignore', array()); you can speficy
an array of URIs which should be skipped for caching.
If you got a search page for example you might not want
to cache each search result so you can add the URI of your
search site to the ignore array:

c::set('cache.ignore', array('search', 'some/other/uri/to/ignore'));

*/


/*

---------------------------------------
Timezone Setup
---------------------------------------

You can change the default timezone used for all
date functions here. It is set to UTC by default.

Please read more about it at: http://php.net/manual/en/function.date-default-timezone-set.php

*/


/*

---------------------------------------
Troubleshooting
---------------------------------------

Kirby has a built-in troubleshooting screen
with loads of information about your setup.

It's there to help you out when things don't work
as expected. Set it to true to activate it and
go to your homepage afterwards to display it on refresh.

*/


/*

---------------------------------------
Debug
---------------------------------------

Set this to true to enable php errors.
Make sure to keep this disabled for your
production site, so you won't get nasty
php errors there.

*/


/*

---------------------------------------
Your custom config file
---------------------------------------

this is your custom config file for your site.
you can set any variable here, which you want to reuse later.
setting custom config variables works like this:

c::set('yourvar', 'yourvalue');

you can access them later in your code like this

c::get('yourvar', 'some default value if the var is not set');

please be careful with existing config rules to not
overwrite them accidentally. Maybe just namespace them
in doubt like:

c::set('yourproject.yourvar', 'yourvalue');

*/


/*

---------------------------------------
Custom host setup
---------------------------------------

I've added a nice way to add different
config files for different environments

Let's say you run a development version of your
site at http://dev.yoursite.com and a production
version of your site at http://yoursite.com, you
can easily setup two different config files
by adding two more files in this directory and name them
like this:

config.dev.yoursite.com.php
config.yoursite.com.php

What happens is, that this global config.php
will be loaded first and afterwards only the
config file for the matching hostname will be
attached. So you can easily overwrite your global
custom config by specific rules for that host.

*/


/*

---------------------------------------
Multi-Language support setup
---------------------------------------

If you want to run a site with multiple languages,
enable support for it here. As soon as you set

c::set('lang.support', true);

Kirby will automatically create language-dependent
URLs like:

http://yourdomain.com/en/blog

or

http://yourdomain.com/de/blog

Make sure to set the default language code and
also the available language codes.

If you keep…

c::set('lang.detect', true);

Kirby will try to detect the default language
from the user agent string instead of using the
default language.

Use c::set('lang.locale', 'en_US'); for example
to set the default locale settings for all PHP functions

*/


/*

---------------------------------------
Content File Extension
---------------------------------------

Change the default file extension for your
content files here if you'd rather use something
else than txt. For example md or mdown.

*/


/*

---------------------------------------
Ignore Content Files
---------------------------------------

Sometimes it's necessary to ignore particular
content files/folders in all content folders.
Just add them to the array here. By default
the following files are being ignored:

array('.', '..', '.DS_Store', '.svn', '.git', '.htaccess');

…so you don't have to add them.

*/

return [
  'license' => 'your license key',
  'url' => '/',
  'subfolder' => false,
  'rewrite' => true,
  'home' => 'home',
  'ssl' => true,
  'kirbytext.video.width' => 480,
  'kirbytext.video.height' => 358,
  'markdown' => true,
  'markdown.breaks' => true,
  'markdown.extra' => false,
  'smartypants' => false,
  'smartypants.attr' => 1,
  'smartypants.doublequote.open' => '&#8220;',
  'smartypants.doublequote.close' => '&#8221;',
  'smartypants.space.emdash' => ' ',
  'smartypants.space.endash' => ' ',
  'smartypants.space.colon' => '&#160;',
  'smartypants.space.semicolon' => '&#160;',
  'smartypants.space.marks' => '&#160;',
  'smartypants.space.frenchquote' => '&#160;',
  'smartypants.space.thousand' => '&#160;',
  'smartypants.space.unit' => '&#160;',
  'smartypants.skip' => 'pre|code|kbd|script|math',
  'tinyurl.folder' => 'x',
  'tinyurl.enabled' => true,
  'cache' => false,
  'cache.autoupdate' => true,
  'cache.data' => true,
  'cache.html' => true,
  'cache.ignore' => [],
  'timezone' => 'EST',
  'troubleshoot' => false,
  'debug' => true,
  'panel.install' => true,
  'cachebuster' => false,
  'panel.favicon' => 'content/favicon.ico',
  'language.detect' => true,
  'ka.cookie.link' => 'privacy-policy',
  'analytics' => false,
  'analytics.id' => 'UA-103018571-1',
  'analytics.anonymize' => true,
  'plugin.compress' => true,
  'meta-tags.default' => function(Page $page, Site $site) {
    $description = $page->isHomePage()
      ? $site->description()->html()
      : $page->description()->html();
    $title = $page->isHomePage()
      ? $site->title().' | '.$description
      : $page->title().' | '.$site->title();
    return [
      'title' => $title,
      'meta' => [
        'description' => $description,
        ['content' => $site->title(), 'name' => 'application-name'],
        ['content' => $site->title(), 'name' => 'apple-mobile-web-app-title'],
        ['content' => '#FDB813', 'name' => 'apple-mobile-web-app-status-bar-style'],
        ['content' => '#FDB813', 'name' => 'theme-color'],
        ['content' => '#FDB813', 'name' => 'msapplication-TileColor'],
        ['content' => 'Tooltip', 'name' => 'msapplication-tooltip'],
        ['content' => url('assets/images/icons/mstile-144x144.png'), 'name' => 'msapplication-TileImage']
      ],
      'link' => [
        'stylesheet' => url('assets/css/main.min.css'),
        'canonical' => $page->url(),
        'ico' => [
          ['href' => url('assets/images/icons/favicon.ico')]
        ],
        'icon' => [
          ['href' => url('assets/images/icons/favicon-16x16.png'), 'sizes' => '16x16', 'type' =>'image/png'],
          ['href' => url('assets/images/icons/favicon-32x32.png'), 'sizes' => '32x32', 'type' =>'image/png'],
          ['href' => url('assets/images/icons/favicon-96x96.png'), 'sizes' => '96x96', 'type' =>'image/png'],
          ['href' => url('assets/images/icons/favicon-128x128.png'), 'sizes' => '128x128', 'type' =>'image/png'],
          ['href' => url('assets/images/icons/favicon-196x196.png'), 'sizes' => '196x196', 'type' =>'image/png']
        ],
        'mask-icon' => [
          ['href' => url('assets/images/icons/safari-pinned-tab.svg'), 'color' => '#FDB813']
        ],
        'apple-touch-icon' => [
          ['href' => url('assets/images/icons/apple-touch-icon-57x57.png'), 'sizes' => '57x57', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-60x60.png'), 'sizes' => '60x60', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-76x76.png'), 'sizes' => '76x76', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-114x114.png'), 'sizes' => '114x114', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-120x120.png'), 'sizes' => '120x120', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-144x144.png'), 'sizes' => '144x144', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
          ['href' => url('assets/images/icons/apple-touch-icon-152x152.png'), 'sizes' => '152x152', 'type' =>'image/png', 'rel'=>'apple-touch-icon-precomposed'],
        ]
      ],
      'og' => [
        'title' => $page->isHomePage()
          ? $site->title()
          : $page->title(),
        'type' => 'website',
        'site_name' => $site->title(),
        'url' => $page->url(),
        'image' => url('content/cover.png')
      ],
      'twitter' => [
        'card' => 'summary',
        'site' => $site->twitter(),
        'title' => $page->title(),
        'image' => url('content/cover.png')
      ]
    ];
  },
  'lang.support' => false,
  'lang.default' => 'en',
  'lang.available' => ['en', 'de'],
  'lang.detect' => true,
  'lang.locale' => false,
  'content.file.extension' => 'txt',
  'content.file.ignore' => [],
];
