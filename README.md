Symfony Minimal Edition
=======================

This is the Symfony Minimal Edition - a minimally-functional Symfony application that you can use as the skeleton for your new applications.

The Symfony Minimal Edition uses the package [**vlucas/phpdotenv**][1] to add [**Twelve Factor app**][2] compatibility, simplyfing configuration. This allows to get rid of the different front controller files based on environment.

Add your application configuration to a `.env` file in the root of your project containing key-value pairs of environment variables :

```
SYMFONY_ENV=dev
SYMFONY_DEBUG=1
SYMFONY__SECRET=ThisTokenIsNotSoSecretChangeIt
SYMFONY__MONOLOG_ACTION_LEVEL=debug
```

What's inside?
--------------

The Symfony Minimal Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**TwigBundle**][3] - Adds support for the Twig templating engine

  * [**MonologBundle**][4] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in `dev` env) - Adds profiling functionality and
    the web debug toolbar

  * **DebugBundle** (in `dev` env) - Adds Debug and VarDumper component
    integration

[1]: https://github.com/vlucas/phpdotenv
[2]: http://12factor.net/
[3]: https://symfony.com/doc/3.0/book/templating.html
[4]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html