<?php
namespace ChipChap\Integrator\Services;

use ChipChapLL\BaseRequester;

class EchoService extends BaseRequester {

    public function make($param,$amount,$currency){
        return $this->call(
            'services/v1/echo',
            array(),
            'POST',
            array(
                'param'          =>  $param,
                'amount'         =>  $amount,
                'currency'       =>  $currency
            ),
            array()
        );
    }
}