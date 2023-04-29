---
title: Importing Posts from DEV.to
published: true
description: How to Import your posts from dev.to with Librarian
tags: devto, commands
---

Librarian used to have a built-in command to import posts from a given DEV user. Since version 4, this is an optional feature that we moved to a separate repository.

To enable this feature, first you'll need to require the `librarianphp/command-import` package with Composer:

```shell
composer require librarianphp/command-import
```

Next, edit your `config/minicli.php` to include the new command in the list of application paths. Look for the `app_path` directive and include the import command as follows:

```php
    'app_path' => [
        __DIR__ . '/../app/Command',
        '@librarianphp/command-help',
        '@librarianphp/command-create',
        '@librarianphp/command-cache',
        '@librarianphp/command-web',
        '@librarianphp/command-build',
        '@librarianphp/command-import'
    ],
```

Then, edit your `config.php` file to include your DEV username:

```php
'devto_username' => 'myDevUsername',
```

Next, you'll need to register the `DevtoServiceProvider`

```php

```

```command
php librarian import:devto
```

This will import all your published posts on the DEV.to platform. Once the import is finished, you can reload your main page and you should see all posts listed within your blog.