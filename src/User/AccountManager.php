<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap;

use ChipChap\Services\BitcoinService;
use ChipChap\Services\EchoService;

class AccountManager {
    public $info;
    public $wallet;

    public function __construct(){
        $this->echo = new EchoService($this->credentials, $this->url);
        $this->bitcoin = new BitcoinService($this->credentials, $this->url);
    }
}