---
title: Librarian CLI
published: true
index: 50
description: Learn about the CLI commands included within Librarian
---
Librarian comes with a CLI helper that you can use to create new content, manipulate cache, and build the static version of your site.

Type `./librarian help` to get a complete list of available commands:

```shell
 _      ____  ____   ____    ____  ____   ____   ____  ____  
| |    |    ||    \ |    \  /    ||    \ |    | /    ||    \ 
| |     |  | |  o  )|  D  )|  o  ||  D  ) |  | |  o  ||  _  |
| |___  |  | |     ||    / |     ||    /  |  | |     ||  |  |
|     | |  | |  O  ||    \ |  _  ||    \  |  | |  _  ||  |  |
|     | |  | |     ||  .  \|  |  ||  .  \ |  | |  |  ||  |  |
|_____||____||_____||__|\_||__|__||__|\_||____||__|__||__|__|

Type "./librarian help" for help with available commands.



Namespace  Command                      
example                                 
           ./librarian example
         
help                                    
           ./librarian help
            
create                                  
           ./librarian create content
  
           ./librarian create
          
cache                                   
           ./librarian cache clear
     
           ./librarian cache
           
           ./librarian cache refresh
   
build                                   
           ./librarian build
```

The `example` command is a demo command included within the Librarian application template, located at the `app/Command` directory. The built-in `help`, `create`, `cache`, and `build` commands are implemented as separate packages living in their own repositories.

You can write your own commands in the `app/Command` directory. Check the [creating CLI commands](/customizing-librarian/creating-cli-commands) section for more information on how to do that.

## Commands Reference

### create

Creates new content based on pre-defined Stencil templates. Defaults to `post` content type.

```shell
./librarian create content [contentType]
```

### cache

Used to clear or refresh the cache used by the development server.

Clearing the cache

```shell
./librarian cache clear
```

Refreshing the cache (clears and warms up)

```shell
./librarian cache refresh
```

### build

Used to output a static build of your website. By default, it saves files in the `/public` directory.

```shell
./librarian build
```