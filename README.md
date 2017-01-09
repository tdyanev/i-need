# I-need

## Folder Structure

```
codeigniter/
├── application/
├── bin/
├── e2e/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

## Requirements

* PHP 7.0.0 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* Git
* npm
* grunt (See [Grunt Installation](http://gruntjs.com/getting-started))
* bower

## How to Use

### Install Packages

```
composer install
npm install
bower install
```

### Install Translations for System Messages

If you want to install translations for system messages:

```
$ cd /path/to/codeigniter
$ php bin/install.php translations 3.1.0
```

### Install Third Party Libraries

[Codeigniter Matches CLI](https://github.com/avenirer/codeigniter-matches-cli):

```
$ php bin/install.php matches-cli master
```

[CodeIgniter HMVC Modules](https://github.com/jenssegers/codeigniter-hmvc-modules):

```
$ php bin/install.php hmvc-modules master
```

[Modular Extensions - HMVC](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc):

```
$ php bin/install.php modular-extensions-hmvc codeigniter-3.x
```

[Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth):

```
$ php bin/install.php ion-auth 2
```

[CodeIgniter3 Filename Checker](https://github.com/kenjis/codeigniter3-filename-checker):

```
$ php bin/install.php filename-checker master
```

[CodeIgniter Rest Server](https://github.com/chriskacerguis/codeigniter-restserver):

```
$ php bin/install.php restserver 2.7.2
```

### Run PHP built-in server

```
$ grunt shell:server
```

### Run Automated Tests

```
# Unit Tests
$ grunt shell:unitTest

# End-to-end Tests
$ grunt casperjs

# Both
$ grunt test
```

## Reference

* [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* [CodeIgniter](https://github.com/bcit-ci/CodeIgniter)
* [Translations for CodeIgniter System](https://github.com/bcit-ci/codeigniter3-translations)

## Related Projects for CodeIgniter 3.0

* [Cli for CodeIgniter 3.0](https://github.com/kenjis/codeigniter-cli)
* [ci-phpunit-test](https://github.com/kenjis/ci-phpunit-test)
* [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
* [CodeIgniter Doctrine](https://github.com/kenjis/codeigniter-doctrine)
* [CodeIgniter Deployer](https://github.com/kenjis/codeigniter-deployer)
* [CodeIgniter3 Filename Checker](https://github.com/kenjis/codeigniter3-filename-checker)
* [CodeIgniter Widget (View Partial) Sample](https://github.com/kenjis/codeigniter-widgets)
