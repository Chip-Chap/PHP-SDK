<?php
namespace ChipChap\User;

use ChipChapLL\BaseRequester;

class AccountManager extends BaseRequester {

    public function read(){
        return $this->call(
            'user/v1/account',
            array(),
            'GET',
            array(),
            array()
        );
    }

}
