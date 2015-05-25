<?php
namespace ChipChap\User;

use ChipChap\Services\BaseService;

class Wallet extends BaseService {

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
