<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/26/15
 * Time: 5:15 PM
 */

namespace ChipChap\Pub;


use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class Ticker extends BaseRequester {
    public function get($currency){
        return $this->call('exchange/v1/ticker/' . $currency, array(), 'GET', array(), array());
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

