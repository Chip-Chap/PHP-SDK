<?php

namespace ChipChap\Integrator\Services;

use ChipChapLL\BaseRequester;

class FaircoinService extends BaseRequester {

    public function request($satoshis,$confirmations,$expiresIn){
        return $this->call(
            'services/v1/fac_pay',
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

    public function send($satoshis,$address){
        return $this->call(
            'services/v1/fac_send',
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
            'services/v1/fac_pay/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}
