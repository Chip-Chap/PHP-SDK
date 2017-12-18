<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class VirtualCardMethod extends BaseRequester {

    public function send($amount, $email,$concept = '', $url_notification = ''){
        return $this->call(
            'methods/v1/out/cryptocapital',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'email'             =>  $email,
                'concept'           =>  $concept,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'methods/v1/out/cryptocapital/'.$id,
            array(),
            'GET',
            array(),
            array()
        );
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        // TODO: Implement getUrl() method.
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        // TODO: Implement getCredentials() method.
    }
}