---
title: Writing Your First Post
published: true
index: 30
description: Writing Posts
---

In Librarian, posts are `.md` (markdown) files located in the `/content` folder, organized by directories that define your content types.

Creating a new post is as simple as creating a new file in those directories. To facilitate that, we have a `create` command that generates new markdown files using pre-defined templates per content type.

```shell
./librarian create content [contentType]
```

By default, the `create` command will generate a new markdown file using the `app/Resources/stencil/post.tpl` template, saving it to the `content/_p` directory. Locations and templates can be [customized](/customizing-librarian/custom-stencils) within your main config file.


Run the following command to create a new post at the default location:

```shell
./librarian create content
```

The command will prompt you to provide a title and a description for your post. You'll get output similar to this, pointing to the location of the newly generated markdown file:

```shell
Content Title: 
 My post title

Content Description: 
 My post description

Content generated at /home/erika/Projects/myblog/config/../content/_p/20230428_my-post-title.md
```

If you look into the generated markdown file, you'll see that it has only a basic structure to get you started:

```markdown
---
title: My post title
description: My post description
tags: post, example, sample, template
cover_image: https://picsum.photos/780/300
---

Your text content goes here.

You can have as many paragraphs as you want.

Extended markdown is supported.
```

You can customize how these posts are created by editing the Stencil templates or creating your own templates and setting them up within your config file. The [Customizing Librarian](/customizing-librarian) section explains how to [customize how new content is created](/customizing-librarian/custom-stencils) using Stencil templates.

Check also the [Writing Content](/writing-content) section for a quick refresher on Markdown syntax and how to use Librarian's liquid tags.