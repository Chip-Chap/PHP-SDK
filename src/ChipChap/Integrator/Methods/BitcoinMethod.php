<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class BitcoinMethod extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

    public function request($satoshis, $confirmations, $expiresIn, $concept){
        return $this->call(
            'methods/v1/in/btc',
            array(),
            'POST',
            array(
                'amount'      =>  $satoshis,
                'confirmations' =>  $confirmations,
                'expires_in' =>  $expiresIn,
                'concept' =>  $concept
            ),
            array()
        );
    }

    public function send($satoshis, $address){
        return $this->call(
            'methods/v1/out/btc',
            array(),
            'POST',
            array(
                'amount'    =>  $satoshis,
                'address'   =>  $address
            ),
            array()
        );
    }

    public function check($id, $type){
        return $this->call(
            'methods/v1/'. $type . '/btc/'.$id,
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
