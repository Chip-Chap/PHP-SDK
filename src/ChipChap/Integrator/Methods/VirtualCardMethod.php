<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class VirtualCardMethod extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

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