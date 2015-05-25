<?php
namespace ChipChap\Services;

class HalcashService extends BaseService {

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

    public function sendV3($phone,$prefix,$country,$amount,$reference,$pin,$sms_language = 'ENG'){
        return $this->call(
            'services/v3/halcash_send',
            array(),
            'POST',
            array(
                'phone_number'      =>  $phone,
                'country'           =>  $country,
                'amount'            =>  $amount,
                'reference'         =>  $reference,
                'pin'               =>  $pin,
                'phone_prefix'      =>  $prefix,
                'sms_language'      =>  $sms_language
            ),
            array()
        );
    }

    public function cancel($country,$reference,$id_telepay){
        return $this->call(
            'services/v1/halcash/cancel',
            array(),
            'PUT',
            array(
                'country'           =>  $country,
                'reference'         =>  $reference,
                'id_telepay'        =>  $id_telepay
            ),
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