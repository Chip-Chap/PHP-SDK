<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;

class HalcashEsMethod extends BaseRequester {

    public function send($phone, $prefix, $country, $amount, $label, $pin, $sms_language = 'ENG'){
        return $this->call(
            'services/v3/halcash_send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $label,
                'pin'               =>  $pin,
                'phone_prefix'      =>  $prefix,
                'sms_language'      =>  $sms_language
            ),
            array()
        );
    }

    public function cancel($id){
        return $this->call(
            'services/v3/halcash_send/'.$id,
            array(),
            'PUT',
            array('cancel' => true),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v3/halcash_send/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }

}