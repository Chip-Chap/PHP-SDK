# Chip-Chap API integration for PHP

This repository is a PHP implementation to interact with the Chip-Chap API.

In order to make calls to the API, you must get the keys from the chip-chap's Control Panel [commerce.chip-chap.com](https://commerce.chip-chap.com)

It provides interaction with many online payment providers like Hal-Cash, SEPA transfers,
Bank Card, Bitcoin, etc. with a secure authentication and authorization mechanism.

## The API allows to interact with:
* **Bitcoin:** Manage cryptocurrency payments
* **Wallet:** Multicurrency wallet
* **Swift transactions:** Connect between many payment systems in a fast way ([web.chip-chap.com](https//web.chip-chap.com))
* **Bank transfers:** Send an receive international bank transfers
* **Virtual and Physical POS:** manages virtual and physical point of sales.
* **Virtual Cards:** generate or top-up virtual bank cards to pay online.
* **Paynet reference:** generates reference barcodes for paying over internet without bank card data (only Mexico).
* **Halcash Spain/Poland:** sends a hal-cash to a phone or cancel a ticket.
* **EasyPay Greece:** topup your account putting cash in EasyPay kiosks (only Greece).

## Installation
* Via composer

    `composer require chip-chap/php-sdk`

## Basic example
```
<?php

use ChipChap\Core\UserCredentials;
use ChipChap\ChipChap;

$credentials = new UserCredentials(
    'ACCESS_KEY',
    'ACCESS_SECRET'
);

# https://api.chip-chap.com for real env
$cc = new ChipChap($credentials, 'https://sandbox.chip-chap.com'); 

print_r($cc->getSample()->make());
```



