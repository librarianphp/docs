---
title: Importing Posts from DEV.to
published: true
description: How to Import your posts from dev.to with Librarian
tags: devto, commands
---

Librarian used to have a built-in command to import posts from a given DEV user. Since version 4, this is an optional feature that we moved to a separate repository.

To enable this feature, you'll follow the process to add an external command and register an additional service provider within Librarian. This process basically consists of the following:

1. Require the external command with Composer,
2.Add a line to the `config/minicli.php` config file including the command in the `app_path` list,
2. Register any additional service providers within the main application file (the `librarian` entrypoint script), and
3. Add or update required configuration options within your `config.php` file.

## 1. Requiring the import command

To get started, first you'll need to require the `librarianphp/command-import` package with Composer:

```shell
composer require librarianphp/command-import
```

## 2. Adding the command to the app_path

Next, edit your `config/minicli.php` to include **@librarianphp/command-import** in the list of application paths. The `@` notation tells Librarian to look for the command source files in the vendor folder instead of the application path.

Look for the `app_path` directive and include the import command as follows:

```php
# config/minicli.php
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

## 3. Registering the DevtoServiceProvider

Next, you'll need to register the `DevtoServiceProvider` within the main application instance. Open the `librarian` executable in the root of the application folder and look for the lines where service providers are registered. Add the following line just before the `$app->librarian-boot()` line:

```php
# librarian
$app->addService('devto', new \Librarian\Provider\DevtoServiceProvider());

# make sure you add your services before the app is booted
$app->librarian->boot(); 
```

Once you're finished, when you run `./librarian help` you should be able to get the `import` command included in the list of available commands:

```shell
./librarian help
```
```shell
...
import                                  
           ./librarian import
          
           ./librarian import dev

```

This should confirm that the command is now functional.

## 4. Setting up your DEV username and datadir

The only thing left to do now is to configure your DEV username and where to save your posts. 

Edit your `config.php` file to include your `devto_username` and the `devto_datadir` (must be a top-level directory inside your configured data_path):

```php
# config.php
'devto_username' => 'myDevUsername',
'devto_datadir' => '_dev'
```

## Importing your posts

Once you have completed the previous steps, you can run the import command with:

```command
./librarian import dev
```

This operation may take some time to complete depending on the number of posts you have on DEV.

This will import all your published posts on the DEV.to platform. Once the import is finished, you can reload your main page, and you should see all posts listed within your Librarian installation.
