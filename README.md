<p align="center">
        <img src="https://raw.githubusercontent.com/martwozniak/bit-bag-sylius-recruitment-task/main/doc/bitbag-task-1024x535.png" />
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


Common Issues
---------------

> Unknown column type "json_array" requested. Any Doctrine type that you use has to be registered ... 

use `composer require doctrine/dbal:"^2.6"`


Screenshots
---------------
<i>A picture is worth a thousand words</i>
<p align="center">
        <img src="https://raw.githubusercontent.com/martwozniak/bit-bag-sylius-recruitment-task/main/doc/color-select.png" />
        Screenshot 1. Color select from admin menu
</p>
<p align="center">
        <img src="https://raw.githubusercontent.com/martwozniak/bit-bag-sylius-recruitment-task/main/doc/color-attribute-user.png" />
        Screenshot 2. Color from user perspective
</p>
<p align="center">
        <img src="https://raw.githubusercontent.com/martwozniak/bit-bag-sylius-recruitment-task/main/doc/grid.png" />
        Screenshot 3. Product grid with Color property
</p>
