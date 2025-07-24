# Kirby Content File Format

Each page, file, or site in Kirby is represented by a `.txt` file with fields separated by `----`.

## Example
```
Title: My Page Title
Status: listed
Template: default
----
description: This is a description field.
author: John Doe
```

## Required Fields
- `Title`: Always required.
- `Status`: (`listed`, `unlisted`, `draft`) — recommended for navigation and Panel visibility.
- `Template`: Recommended for clarity and migration safety.

## References
- [Kirby Content Files](https://getkirby.com/docs/guide/content/text-files) 