---
title: Building Librarian
published: true
index: 100
description: Learn how to build your Librarian site for publishing
---

Once you're satisfied with how your Librarian installation looks in development mode, you can build the static version of your site using the `build` command.

The builder settings are defined within the `config/static.php` config file:

```php
    'output_path' => __DIR__ . '/../public',
    'assets_path' => __DIR__ . '/../app/Resources/public'
```

Where `output_path` defines where the content will be saved, and the `assets_path` defines where to find the resources that should be copied into the public document root, such as images and scripts. You don't need to change these values.

## Building your Static Site

To build your site, run the following command:

```php
./librarian build
```

You should get output showing each step of the build process:

```
Starting Build

Cleaning up output dir...

Building content type 'getting-started'

Building content type 'writing-content'

Building content type 'customizing-librarian'

Building content type 'deploying-librarian'

Building content type 'extras'

Building tag pages

Building devto pages...

Building commands pages...

Building structure pages...

Building getting-started pages...

Building index

Copying Resources

Building RSS feed

Finished building static website at /home/erika/Projects/librarian-docs/public.

```

When the build is finished, you can check your `public/` directory for the static output. This should be your `document_root` if you are deploying your site on a regular web server.
