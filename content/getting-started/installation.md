---
title: Installation
index: 20
published: true
description: How to create a new librarian Application using Composer.
---

To get started with Librarian, first you'll need to bootstrap a new application using [Composer](https://getcomposer.org).

From your development machine, where you have PHP and Composer installed, run:

```command
composer create-project librarianphp/librarian myblog
```
This will install Librarian's dependencies and create a new `config.php` file in the root of the application folder.

Once the dependencies are installed, you can run Librarian with the built-in PHP server:

```command
cd myblog
php -S 0.0.0.0:8000 -t web/
```

Then you can access the app from your browser at `http://localhost:8000`. You'll see a page like this:

![Librarian Default Page](/img/librarian_default_page.png)

The included about page is located at `content/_p/about.md` in case you want to update its contents.

### Configuring Librarian

The `librarian.php` file in the `/config` folder contains settings that you'll want to change. Here you can configure things such as the site name and description, the amount of posts per page, as well as social links and whether you want to use a custom index page instead of the default post listing.

To update basic site information, open the `config/librarian.php` file on your code editor of choice and look for the "Site Information" section. You can also set up your social links.

```php
<?php

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/

    # Site Information
    'site_name' => envconfig('SITE_NAME', 'Librarian'),
    'site_author' => envconfig('SITE_AUTHOR', '@erikaheidi'),
    'site_description' => envconfig('SITE_DESC', 'Librarian is a static site generator inspired by Hugo and built in PHP.'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8000'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_about' => envconfig('SITE_ABOUT', '_p/about'),
    # Set site_index if you want a custom index page
    #'site_index' => 'getting-started/introduction',

    'posts_per_page' => 10,

    # Optional: Social links that show up on the top right
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER'),
        'Github'  => envconfig('LINK_GITHUB', 'https://github.com/minicli/librarian'),
        'YouTube' => envconfig('LINK_YOUTUBE'),
        'LinkedIn' => envconfig('LINK_LINKEDIN'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],
];

```

It's worth noting that you can also use environment variables to set up your configuration. The `envconfig` helper function will look for an environment variable with the provided name, using the second argument as default variable in case the env variable is not defined.
