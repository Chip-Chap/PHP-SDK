# ChipChap API integration for PHP

This repository is a PHP implementation to interact with the ChipChap Financial API.

The API control panel are in [https://commerce.chip-chap.com](https://commerce.chip-chap.com)

It provides interaction with many online payment providers like Halcash, Paynet,
Bank Card, Online Wallets, etc. with a secure authentication and authorization mechanism.

## The currently implemented services are:
* **Paynet:** generates reference barcodes for paying over internet without bank card data.
* **Halcash:** sends a hal to a phone or cancel a ticket.
* **Virtual Card:** creates a virtual visa.
* **Bitcoin:** pay and receive payments with btc.
* **Faircoin:** pay and receive payments with fair.

## Installation
1. Get the code via clone
  * `git clone https://github.com/Chip-Chap/PHP-SDK.git`
2. Get via require in composer.json
  * `require: { "chipchap/php-sdk": "dev-master" }`

## Basic sample
```
<?php

use TelepayApi\Core\UserCredentials;
use TelepayApi\TelepayClient;

$credentials = new UserCredentials(
    'YOUR_TELEPAY_ACCESS_KEY',
    'YOUR_TELEPAY_ACCESS_SECRET'
);

$tc = new ChipChap($credentials, 'https://sandbox.chip-chap.com');

print_r($tc->getSample()->make());
```



