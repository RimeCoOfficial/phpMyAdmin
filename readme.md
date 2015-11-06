# phpMyAdmin 4.5.1 config

`phpmyadmin/config.inc.php`

## Blowfish

http://www.question-defense.com/tools/phpmyadmin-blowfish-secret-generator

> Enter the randomly generated set of characters below into your phpMyAdmin config.inc.php file for the $cfg[‘blowfish_secret’] variable. You can technically use any phrase you like for the blowfish_secret variable however the below makes it easy so you don’t have to think of one. Every time you refresh this page a new $cfg[‘blowfish_secret’] will be randomly generated.

``` php
$cfg['blowfish_secret'] = '{^QP+-(3mlHy+Gd~FE3mN{gIATs^1lX+T=KVYv{ubK*U0V';
```

## Host

``` php
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

# Web Access
```
http://instance_ip/phpmyadmin
```
