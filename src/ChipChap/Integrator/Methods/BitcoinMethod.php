<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;

class BitcoinMethod extends BaseRequester {

    public function request($satoshis, $confirmations, $expiresIn){
        return $this->call(
            'services/v1/btc_pay',
            array(),
            'POST',
            array(
                'amount'      =>  $satoshis,
                'confirmations' =>  $confirmations,
                'expires_in' =>  $expiresIn
            ),
            array()
        );
    }

    public function send($satoshis, $address){
        return $this->call(
            'services/v1/btc_send',
            array(),
            'POST',
            array(
                'amount'    =>  $satoshis,
                'address'   =>  $address
            ),
            array()
        );
    }

    public function check($id){
        return $this->call(
            'services/v1/btc_pay/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}
