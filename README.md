# phpMyAdmin Config

**[phpmyadmin/config.inc.php](/phpmyadmin/config.inc.php)**

## Blowfish

**[phpmyadmin/config.inc.php#L18](phpmyadmin/config.inc.php#L18)**

``` php
/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
// $cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$cfg['blowfish_secret'] = $_SERVER['BLOWFISH'];
```

http://md5.my-addr.com/online_random_md5_hash_generator-and-md5_random_hash.php

## Host

**[phpmyadmin/config.inc.php#L33](https://github.com/RimeOfficial/phpMyAdmin/blob/master/phpmyadmin/config.inc.php#L33)**

``` php
/* Server parameters */
// $cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['host'] = !getenv('host') ? 'localhost' : getenv('host');
```

## Reference
[Build a WordPress Website on Amazon Web Services](http://docs.aws.amazon.com/getting-started/latest/wordpress/hosting-wordpress-on-aws.html)
