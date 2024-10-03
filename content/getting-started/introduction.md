---
title: About Librarian
published: true
index: 10
description: Librarian is a static site generator written in PHP. It uses the same format as DEV.to for markdown files with a front matter and liquid tags for custom functionality.
---

Librarian is a static site builder written in PHP on top of [Minicli](https://github.com/minicli/minicli). It uses the same format as DEV.to for markdown files with a front matter and liquid tags for custom functionality.
The front matter is fluid and doesn't have a fixed spec, meaning you can include any custom fields you want and fetch them from your templates.

Librarian aims to be a simple solution to document open source projects and for blogging. Inspired by Hugo, but written in PHP.

Librarian supports themes, and the default theme setup uses [TailwindCSS](https://tailwindcss.com/).

![Librarian default index page screenshot](https://librarianphp.dev/img/librarian_default_page.png)

Librarian doesn't use databases, sessions, or users. Administration is made from the command-line. It is also possible to write custom CLI commands to extend Librarian to your own needs.
For multiple authors, author information must be defined as metadata within the front matter.

Liquid tags supported at the moment:

| Tag | Example | Description |
|-----|---------|-------------|
| `audio` | `{% audio path_to_mp3.mp3 %}` | embeds mp3 audio |
| `video` | `{% video path_to_mp4.mp4 %}` | embeds mp4 video |
| `youtube` | `{% youtube video_ID %}` | embeds a YouTube video |
| `github` | `{% github file_url %}` | embeds File from GitHub (Gists aren't supported at the moment) |

Librarian can also serve a dynamic website from its `/web` directory, and that was the former default way of using Librarian; Since version 4, however, we're favoring the static site build mechanism as new recommended default, while the dynamic setup can be used for development and preview. 

## Requirements

- PHP 8.2+: `cli` is enough to generate the static build; for development you can use the built-in PHP web server to get instant previews.
- [Composer](https://getcomposer.org): for installing the PHP dependencies.
- [NPM](https://docs.npmjs.com/cli/v7): recommended due to Tailwind, but only required if you're modifying templates.

Librarian uses [Tailwind css](https://tailwindcss.com/docs) for its front-end, but the pre-built `app.css` is included to facilitate usage.
You are only required to run `npm` if you make significant changes to the layout, or if you want to include additional CSS in the assets build pipeline.


