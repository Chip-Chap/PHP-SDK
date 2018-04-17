<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap\Integrator;

use ChipChap\Integrator\Methods\BitcoinMethod;
use ChipChap\Integrator\Methods\FaircoinMethod;
use ChipChap\Integrator\Methods\HalcashMethod;
use ChipChap\Integrator\Methods\OpexCardMethod;
use ChipChap\Integrator\Methods\PaynetMethod;
use ChipChap\Integrator\Methods\SparkCardMethod;
use ChipChap\Integrator\Methods\VirtualCardMethod;
use ChipChapLL\Core\Credentials;

class MethodsManager {
    public $paynet;
    public $bitcoin;
    public $faircoin;
    public $halcash;
    public $virtualCard;
    public $sparkCard;
    public $opexCard;

    protected $url;

    public function __construct(Credentials $credentials, $url){
        $this->url = $url;
        $this->paynet = new PaynetMethod($credentials, $url);
        $this->bitcoin = new BitcoinMethod($credentials, $url);
        $this->faircoin = new FaircoinMethod($credentials, $url);
        $this->halcash = new HalcashMethod($credentials, $url);
        $this->virtualCard = new VirtualCardMethod($credentials, $url);
        $this->opexCard = new OpexCardMethod($credentials, $url);
        $this->sparkCard = new SparkCardMethod($credentials, $url);
    }
}