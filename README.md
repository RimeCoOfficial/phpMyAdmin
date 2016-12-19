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
$cfg['blowfish_secret'] = getenv('blowfish');
```

https://api.wordpress.org/secret-key/1.1/salt/

## Host

**[phpmyadmin/config.inc.php#L33](https://github.com/RimeOfficial/phpMyAdmin/blob/master/phpmyadmin/config.inc.php#L33)**

``` php
/* Server parameters */
// $cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['host'] = !getenv('host') ? 'localhost' : getenv('host');
```

# OpsWorks
### Stack
**Name** | Postmaster
| :--- | :--- |
**Region** | US West (Oregon)
**Default operating system** | Ubuntu 14.04 LTS
**Hostname theme** | Greek Deities

### Layer
Layer type | PHP App Server
:--- | :---

### App
Name | phpMyAdmin
:--- | :---
Repository URL | https://github.com/RimeOfficial/phpMyAdmin
Branch/Revision | master

#### Environment Variables
Key | Value
--- | ---
host | mydbinstance.qwhsdahdjauw.us-west-2.rds.amazonaws.com
blowfish | api.wordpress.org/secret-key/1.1/salt

# Web Access
```
http://instance_ip/phpmyadmin
```