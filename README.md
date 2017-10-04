# Composer for SunLight CMS

Yeah, we are create composer support for this legacy system.

## Install instructions

1. save this json to your site root and as `composer.json`:

    ```
    {
      "name": "studioartcz/yoursite",
      "type": "project",
      "description": "Your site composer",
      "homepage": "https://www.studioart.cz",
      "private": true,
      "require": {
        "php": ">=5.6.0",
        "sasedev/composer-plugin-filecopier": "^1.1"
      },
      "extra": {
        "filescopier": [
          {
            "source": "vendor/studioartcz/sl_composer/plugins",
            "destination": "plugins",
            "debug": "true"
          }
        ]
      },
      "config": {
        "bin-dir": "bin/",
        "discard-changes": true
      }
    }
    
    ```


2. create (edit) file `.gitignore` in project root contains:

    
    ```
    vendor/*
    bin
    config.php
    .idea
    data/*
    !data/cron.lock
    !data/installer
    pictures/*
    !pictures/pr
    !pictures/avatars
    !pictures/web
    upload/*
    ```


3. open command line at path where you have project's root
4. type: `composer install studioartcz/sl_composer master-dev`
5. yeah and you have composer your lucky human!