<?php


namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class PaynetMethod extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

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