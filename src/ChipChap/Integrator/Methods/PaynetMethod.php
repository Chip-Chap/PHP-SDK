<?php


namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;

class PaynetMethod extends BaseRequester {

    public function request($client_reference, $amount, $concept){
        return $this->call(
            'methods/v1/in/paynet_reference',
            array(),
            'POST',
            array(
                'client_reference'  =>  $client_reference,
                'amount'            =>  $amount,
                'concept'           =>  $concept
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'methods/v1/in/paynet_reference/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }
}