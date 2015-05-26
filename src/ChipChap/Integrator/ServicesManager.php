<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap\Integrator;

use ChipChap\Integrator\Services\BitcoinService;
use ChipChap\Integrator\Services\EchoService;
use ChipChap\Integrator\Services\FaircoinService;
use ChipChap\Integrator\Services\HalcashService;
use ChipChap\Integrator\Services\PaynetService;
use ChipChapLL\Core\Credentials;

class ServicesManager {
    public $echo;
    public $bitcoin;
    public $faircoin;
    public $paynet;
    public $halcash;

    public function __construct(Credentials $credentials, $url){
        $this->echo = new EchoService($credentials, $url);
        $this->bitcoin = new BitcoinService($credentials, $url);
        $this->faircoin = new FaircoinService($credentials, $url);
        $this->paynet = new PaynetService($credentials, $url);
        $this->halcash = new HalcashService($credentials, $url);
    }
}