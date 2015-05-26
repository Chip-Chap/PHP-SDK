<?php
namespace ChipChap\Services;

use ChipChapLL\BaseRequester;

class PaynetService extends BaseRequester {

    public function request($client_reference,$amount,$description){
        return $this->call(
            'services/v1/paynet_reference',
            array(),
            'POST',
            array(
                'client_reference'  =>  $client_reference,
                'amount'            =>  $amount,
                'description'       =>  $description
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'services/v1/paynet_reference/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}