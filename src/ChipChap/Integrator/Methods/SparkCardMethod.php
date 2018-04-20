<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class SparkCardMethod extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

    public function send($amount, $card_id,$concept = '', $url_notification = '', $company_id){
        return $this->call(
            'methods/v1/out/spark',
            array(),
            'POST',
            array(
                'amount'            =>  $amount,
                'card_id'             =>  $card_id,
                'concept'           =>  $concept,
                'url_notification'  =>  $url_notification,
                'company_id'    =>  $company_id
            ),
            array()
        );
    }

    public function status($id){
        return $this->call(
            'methods/v1/out/spark/'.$id,
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