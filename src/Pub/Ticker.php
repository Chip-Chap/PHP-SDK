<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/26/15
 * Time: 5:15 PM
 */

namespace ChipChap\Pub;


use ChipChapLL\BaseRequester;

class Ticker extends BaseRequester {
    public function get($currency){
        return $this->call('exchange/v1/ticker/' . $currency, array(), 'GET', array(), array());
    }
}

