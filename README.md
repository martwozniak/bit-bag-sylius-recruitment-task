<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">BitBag Sylius Recruitment Task</h1>

<p align="center">Recruitment project with basic phpunit tests</p>

About
-----
This project extends basic Sylius Product class. Now Product is extended by field called 'color'. Basic Product Grid have new field related to 'color'. Users now can see product color (Attributes)


Installation
------------

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar create-project sylius/sylius-standard project
$ cd project
$ composer install
$ yarn install
$ yarn build
$ php bin/console sylius:install
$ php bin/console server:start
$ open http://localhost:8000/
```

Troubleshooting
---------------

If something goes wrong, errors & exceptions are logged at the application level:

```bash
$ tail -f var/log/prod.log
$ tail -f var/log/dev.log
```

If you are using the supplied Vagrant development environment, please see the related [Troubleshooting guide](etc/vagrant/README.md#Troubleshooting) for more information.

Testing
---------------

If you are using PHPStorm then import phpunit.xml.dist to your config. 
Otherwise use command:
```bash
$ php ./vendor/bin/phpunit
```

All tests are in `/test` directory and file structure of test files represents application structure.  


Common Errors
---------------

> Unknown column type "json_array" requested. Any Doctrine type that you use has to be registered ... 

use `composer require doctrine/dbal:"^2.6"`
