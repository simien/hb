# Kirby Migration Guide

## Migration from Kirby 2/3 to 4

- Preserve all original content fields when migrating.
- Add required Kirby 4 fields (`Status`, `Template`, `Title`) at the top of each content file.
- Use Kirby's Content API for reading/writing content to avoid formatting issues.
- Validate all content files after migration.
- Backup and use version control for all changes.

## References
- [Kirby Upgrade Guide](https://getkirby.com/docs/guide/upgrade) 