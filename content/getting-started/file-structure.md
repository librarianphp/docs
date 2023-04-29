---
title: Understanding Librarian's File Structure
published: true
index: 40
description: Librarian organizes markdown files into content types or category folders.
tags: structure, getting-started
---

Librarian uses a two-level structure where directories inside its `data` dir are indexed as content types or categories, and the content inside each of these directories is indexed as entries in those categories.
Consider the following structure:

```
content/
  posts/
    - 01-my-post-title.md
    - 02-another-post.md
  pages/
    - about.md
    - sponsors.md
```

This data structure yields the following URLs:

```
/pages
/pages/about
/pages/sponsors
/posts
/posts/01-my-post-title
/posts/02-another-post
```

## The _index file

New in Librarian 4, the `_index` file can be used to provide additional metadata about content types and customize the ordering in which content types are listed.

This file, which is not mandatory, should live alongside the markdown content files for each content type.

Here's the included `_index` file from the `post` content type:

```markdown
---
title: Blog
description: Your posts can go here
index: 1
---
```

The `index` property is used to order content types in page listings. 

### Getting a List of Content Types

You can fetch the ordered list of content types in theme views by using the `content_types()` Twig function.

For instance, this is how we build the table of contents for this documentation on the left sidebar:

```html
<h3 class="text-2xl px-4 py-6 mt-2">Table of Contents</h3>
            <ul class="shadow-md rounded-md">
                {% for type in content_types() %}
                    <li><a class="py-2 px-2 bg-violet-600 text-gray-100 font-bold block" href="/{{ type.slug }}">{{ type.title|replace({'_': ' '}) }}</a></li>
                    <li>
                        <ul class="divide-y divide-gray-200">
                            {% for article in table_of_contents(type.slug) %}
                                <li><a class="py-2 px-2 pl-6 block" href="{{ site_root() }}{{ article.getLink() }}">{{ article.frontMatterGet('title') }}</a></li>
                            {% endfor %}
                        </ul>
                    </li>
                {% endfor %}
            </ul>
```
