# Kirby Content API

The Content API allows you to read and write content fields for pages, files, and the site.

## Usage
```php
$page = page('about');
$title = $page->title();
$fields = $page->content()->toArray();
```

## Methods
- `content()->get('fieldname')`
- `content()->update([...])`
- `content()->toArray()`

## References
- [Kirby Content API](https://getkirby.com/docs/reference/panel/api/content) 