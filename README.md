# phpMyAdmin Config

**[phpmyadmin/config.inc.php](https://github.com/RimeOfficial/phpMyAdmin/blob/master/phpmyadmin/config.inc.php)**

## Blowfish

http://www.question-defense.com/tools/phpmyadmin-blowfish-secret-generator

> Enter the randomly generated set of characters below into your phpMyAdmin config.inc.php file for the $cfg[‘blowfish_secret’] variable. You can technically use any phrase you like for the blowfish_secret variable however the below makes it easy so you don’t have to think of one. Every time you refresh this page a new $cfg[‘blowfish_secret’] will be randomly generated.

**[phpmyadmin/config.inc.php#L18](https://github.com/RimeOfficial/phpMyAdmin/blob/master/phpmyadmin/config.inc.php#L18)**

``` php
/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
// $cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$cfg['blowfish_secret'] = '{^QP+-(3mlHy+Gd~FE3mN{gIATs^1lX+T=KVYv{ubK*U0V';
```

## Host

**[phpmyadmin/config.inc.php#L33](https://github.com/RimeOfficial/phpMyAdmin/blob/master/phpmyadmin/config.inc.php#L33)**

``` php
/* Server parameters */
// $cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['host'] = !empty($_SERVER['RDS_HOSTNAME']) ? $_SERVER['RDS_HOSTNAME'] : 'localhost';
```

## Reference
[Build a WordPress Website on Amazon Web Services](http://docs.aws.amazon.com/getting-started/latest/wordpress/hosting-wordpress-on-aws.html)