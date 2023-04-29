---
title: Customizing How New Content is Created
published: true
description: How to create custom Stencil Templates
---

Stencil is a simple template builder used to bootstrap new posts in Librarian.

The default configuration is defined as follows, on the `config/minicli.php` file:

```php
    'stencil_dir' => __DIR__ . '/../app/Resources/stencil',
    'stencil_locations' => [
        'post' => __DIR__ . '/../content/_p',
        'blog' => __DIR__ . '/../content/blog'
    ],
```

Where `stencil_dir` is the location for your Stencil templates (these work like Hugo's _archetypes_, not to confuse with your views).
The `stencil_locations` config defines your post content types and where to save new content generated. The **post** type is the default.

You can overwrite this configuration in your `config.php` configuration file.

When generating a new piece of content with the `create` command, it will look for a template with the same name as the requested type inside the `stencil_dir` directory.

This is what the default `post.tpl` template looks like:

```
---
title: {{ title }}
description: {{ description }}
tags: post, example, sample, template
cover_image: https://picsum.photos/780/300
---

Your text content goes here.

You can have as many paragraphs as you want.

Extended markdown is supported.

```

Let's say you have a custom content type called `device` that uses a specific content layout. You can configure Stencil to use a custom template when creating new posts of that type.

This is how a custom configuration based on that would like in your `config.php` file:

```php
    'stencil_locations' => [
        'device' => __DIR__ . '/content/devices'
    ],
```

Don't forget to set up a Stencil template called `device.tpl` at `app/Resources/stencil/`. You can copy the `post.tpl` to use as base for you custom template.

Then, you'll be able to create new "device" posts with:

```shell
./librarian create content device
```

And this will prompt you to provide the title and description for your new post, saving the resulting markdown file to the `content/devices` folder.