<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap\Integrator;

use ChipChap\Integrator\Methods\PaynetMethod;
use ChipChapLL\Core\Credentials;

class MethodsManager {
    public $paynet;

    public function __construct(Credentials $credentials, $url){
        $this->paynet = new PaynetMethod($credentials, $url);
    }
}