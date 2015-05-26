<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap\Integrator;

use ChipChap\Services\BitcoinService;
use ChipChap\Services\EchoService;
use ChipChap\Services\FaircoinService;
use ChipChap\Services\HalcashService;
use ChipChap\Services\PaynetService;

class ServicesManager {
    public $echo;
    public $bitcoin;
    public $faircoin;
    public $paynet;
    public $halcash;

    public function __construct(){
        $this->echo = new EchoService($this->credentials, $this->url);
        $this->bitcoin = new BitcoinService($this->credentials, $this->url);
        $this->faircoin = new FaircoinService($this->credentials, $this->url);
        $this->paynet = new PaynetService($this->credentials, $this->url);
        $this->halcash = new HalcashService($this->credentials, $this->url);
    }
}