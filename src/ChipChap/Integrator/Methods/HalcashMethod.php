<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class HalcashMethod extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

    public function send($phone, $prefix, $amount, $pin, $concept, $url_notification = ''){
        return $this->call(
            'methods/v1/out/halcash_es',
            array(),
            'POST',
            array(
                'phone'      =>  $phone,
                'amount'            =>  $amount,
                'pin'               =>  $pin,
                'prefix'      =>  $prefix,
                'concept'   =>  $concept,
                'url_notification'  =>  $url_notification
            ),
            array()
        );
    }

    public function cancel($id){
        return $this->call(
            'methods/v1/out/halcash_es/'.$id,
            array(),
            'PUT',
            array('cancel' => true),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'methods/v1/out/halcash_es/'.$id,
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
        return $this->url;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}