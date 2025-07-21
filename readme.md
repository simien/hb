# Kirby

Kirby is a file-based CMS.
Easy to setup. Easy to use. Flexible as hell.

## Trial

You can try Kirby on your local machine or on a test
server as long as you need to make sure it is the right
tool for your next project.

## Buy a license

You can purchase your Kirby license at
<https://getkirby.com/buy>

A Kirby license is valid for a single domain. You can find
Kirby's license agreement here: <https://getkirby.com/license>

## The Starterkit

Kirby's Starterkit comes with a small demo website and a fully
configured panel. Feel free to modify it and play with it as
much as you like.

There's also the [Langkit](https://github.com/getkirby/langkit.git)
in case you need a multi-language installation.

## The Panel

You can find the login for Kirby's admin interface at
http://yourdomain.com/panel. You will be guided through the signup
process for your first user, when you visit the panel
for the first time.

## Installation

Kirby does not require a database, which makes it very easy to
install. Just copy Kirby's files to your server and visit the
URL for your website in the browser.

**Please check if the invisible .htaccess file has been
copied to your server correctly**

### Requirements

Kirby runs on PHP 5.4+, Apache or Nginx.

### Download

You can download the latest version of the Starterkit
from https://download.getkirby.com

### With Git

If you are familiar with Git, you can clone Kirby's
Starterkit repository from Github.

    git clone https://github.com/getkirby/starterkit.git

## Documentation

<https://getkirby.com/docs>

## Issues and feedback

If you have a Github account, please report issues
directly on Github:

- <https://github.com/getkirby/kirby/issues>
- <https://github.com/getkirby/panel/issues>
- <https://github.com/getkirby/starterkit/issues>

Otherwise you can use Kirby's forum: https://forum.getkirby.com
or send us an email: <support@getkirby.com>

## Support

<https://getkirby.com/support>

## Copyright

© 2009-2016 Bastian Allgeier (Bastian Allgeier GmbH)
<http://getkirby.com>

# Kirby 2 Docker Environment

This project includes a Docker setup for running the legacy Kirby 2 CMS.

## Requirements
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/)

## Usage

### 1. Start the environment

To build and run the site:

```sh
docker-compose up --build
```

- The site will be available at: [http://localhost:8080](http://localhost:8080)
- The Kirby Panel: [http://localhost:8080/panel](http://localhost:8080/panel)

### 2. Clean Rebuild (if you change Dockerfile or have issues)

If you update the Dockerfile or want to ensure all changes are applied:

```sh
docker-compose down
# Remove old containers and networks
# Then build from scratch and start

docker-compose build --no-cache

docker-compose up
```

### 3. Stopping the environment

```sh
docker-compose down
```

## Docker Details
- Uses PHP 7.2 with Apache.
- Enables `mod_rewrite` and sets `AllowOverride All` for proper Kirby routing.
- Mounts your project directory into the container for live editing.
- Automatically sets permissions for `content/` and `site/` folders on startup.

## Troubleshooting

If only the homepage works and subpages return a plain Apache 404:

1. **.htaccess**: Ensure `.htaccess` exists in your project root (it should be there by default).
2. **mod_rewrite**: The Dockerfile enables this, but if you change the Dockerfile, always rebuild with `--no-cache`.
3. **AllowOverride All**: The Dockerfile sets this for both `/var/www/` and `/var/www/html`.
4. **Rebuild**: Always run a clean rebuild after Dockerfile changes.

To verify inside the running container:

```sh
docker exec -it kirby2-web ls -la /var/www/html/.htaccess
# Should show the .htaccess file

docker exec -it kirby2-web apache2ctl -M | grep rewrite
# Should show 'rewrite_module (shared)'
```

## Notes
- The codebase is mounted as a volume, so changes on your host are reflected in the container.
- If you add new plugins or make changes to the `site/` or `content/` folders, you may need to restart the container.
- For production, use a more secure setup and consider using a specific PHP version image.