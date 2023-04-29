---
title: Creating CLI commands
published: true
description: How to create custom CLI commands
---

Librarian is built on top of [Minicli](https://docs.minicli.dev), a minimalist command-line framework in PHP.

You can create custom command-line commands to manage your application, import data, or perform regular scheduled tasks (schedule is possible via Crontab). These should be created within the `app/Command` directory.

The included `librarian` executable loads an example command that you can use as reference to build your own commands.

### About Minicli
Minicli uses a 2-level command structure, with [Namespaces and Controllers](https://docs.minicli.dev/en/latest/02-command_namespaces/). 

The example command demonstrates how commands are organized within Minicli apps:

```shell
app/Command
└── Example
    └── DefaultController.php
```

This structure defines a command namespace called `Example` with a single entry point command:

```shell
./librarian example
```

This is what the example `DefaultController` looks like:

```php
<?php

namespace App\Command\Example;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle(): void
    {
        $this->getPrinter()->info("This is the example command.");
        $this->getPrinter()->info("You can use it as a sandbox or base to build your own custom CLI commands.");
    }
}

```

The `DefaultController` is the default command called when no subcommand is specified. To create additional subcommands, you need to follow the name convention `SubcommandController` and extend from the `CommandController` class.

For instance, let's say you want to create the `example demo` command. You'd need to create a class named `DemoController` inside `Example`.

For more information on how to create commands, please refer to the [Minicli documentation on how to create commands](https://docs.minicli.dev/en/latest/02-command_namespaces/#creating-a-command-controller).

