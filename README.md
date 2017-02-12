# phpMyAdmin Config

**[phpmyadmin/config.inc.php](phpmyadmin/config.inc.php)**

## Blowfish

**[phpmyadmin/config.inc.php#L18](phpmyadmin/config.inc.php#L18)**

``` php
/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
// $cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$cfg['blowfish_secret'] = getenv('blowfish');
```

http://md5.my-addr.com/online_random_md5_hash_generator-and-md5_random_hash.php

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
blowfish | random_md5_hash

# Web Access
```
http://instance.ip/phpmyadmin
```
