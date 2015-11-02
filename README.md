# millennium-php

[![Build Status](https://travis-ci.org/f-plus/millennium-php.png?branch=master)](https://travis-ci.org/f-plus/millennium-php)

**millennium-php** is a PHP client for the online booking system of [Harms Millennium Spa & Salon](http://www.harms-software.com/millennium/spasalon/).


## Installation

```bash
composer require f-plus/millennium-php
```


## Usage

```php
$client = new \FPlus\Millennium\Client('http://yourdomain.com/OnlineBooking/ClientService.svc');

$salonInfo = $client->getSalonInfo();

if (($session = $client->authenticate('username', 'password')) !== null) {
    $client->setSession($session);

    // book appointments, get client history, ...
}
```

## Disclaimer

This application is in no way affiliated with, authorized, maintained, sponsored or endorsed by [Millennium Systems International](http://www.harms-software.com/).
