# Installing PHP on macOS

Choose an installation method based on how you plan to use PHP.

## Homebrew (recommended for command-line use)

Install [Homebrew](https://brew.sh/) if needed, then install PHP:

```sh
brew update
brew install php
php -v
```

## MAMP or Laravel Herd (graphical development environment)

[MAMP](https://www.mamp.info/) and [Laravel Herd](https://herd.laravel.com/) provide graphical tools for local web development that include PHP. Install using the official installer and consult its documentation if you want to use the bundled PHP from Terminal. The PHP version bundled with an app may differ from the one available to your shell.

## Docker (isolated per-project version)

With Docker Desktop installed, run PHP in a container without installing it directly on macOS:

```sh
docker run --rm -it -v "$PWD":/app -w /app php:8.3-cli php -v
```

Replace `8.3` with the version required by your project.

## Verify your setup

For a PHP installation available in Terminal, run:

```sh
php -v
which php
```

If `php` is not found, restart Terminal or follow your installer’s instructions to update `PATH`.
