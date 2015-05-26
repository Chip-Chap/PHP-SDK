<?php
namespace ChipChap\User;

use ChipChapLL\BaseRequester;

class Wallet extends BaseRequester {

    public function show(){
        return $this->call(
            'user/v1/wallet',
            array(),
            'GET',
            array(),
            array()
        );
    }

}
