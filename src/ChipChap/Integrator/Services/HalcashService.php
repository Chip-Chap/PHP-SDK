<?php

namespace ChipChap\Integrator\Services;

use ChipChapLL\BaseRequester;

class HalcashService extends BaseRequester {

    public function send($phone,$country,$amount,$reference,$pin,$transaction_id){
        return $this->call(
            'services/v1/halcash/send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $reference,
                'pin'               =>  $pin,
                'transaction_id'    =>  $transaction_id
            ),
            array()
        );
    }

    public function sendV2($phone,$prefix,$country,$amount,$reference,$pin,$transaction_id,$alias){
        return $this->call(
            'services/v2/halcash/send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $reference,
                'pin'               =>  $pin,
                'transaction_id'    =>  $transaction_id,
                'phone_prefix'      =>  $prefix,
                'alias'             =>  $alias
            ),
            array()
        );
    }

    public function sendV3($phone, $prefix, $country, $amount, $label, $pin, $sms_language = 'ENG'){
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