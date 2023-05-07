---
title: Librarian Liquid Tags
published: true
description: 
---

Librarian uses liquid tags to offer extended and customizable embeds in markdown, inspired by DEV.to. This is implemented as a standalone project that at [librarianphp/parsed](https://github.com/librarianphp/parsed).

Currently, we have a limited number of liquid tags implemented, but this collection is expected to grow in the future (contributions are welcome).

Liquid tags supported at the moment:

| Tag        | Example | Description |
|------------|---------|-------------|
| `audio`    | `{% audio path_to_mp3.mp3 %}` | embeds mp3 audio |
| `video`    | `{% video path_to_mp4.mp4 %}` | embeds mp4 video |
| `youtube`  | `{% youtube video_ID %}` | embeds a YouTube video |
| `github`   | `{% github file_url %}` | embeds a Gist or a Repository File |

_PS: The `tweet` liquid tag is no longer functional since latest changes to Twitter API. It is most likely going to be removed from Parsed in its next release._