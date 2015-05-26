<?php
namespace ChipChap;

use ChipChap\Integrator\ServicesManager;
use ChipChapLL\Core\Credentials;


class ChipChap {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url = 'https://api.chip-chap.com/test'){
        $this->credentials=$credentials;
        $this->url = $url;
        $this->services = new ServicesManager();
        $this->services = new AccountManager();
    }

    public $services;

    public $account;

    public $wallet;

    public $realtime;

    public $public;

}


