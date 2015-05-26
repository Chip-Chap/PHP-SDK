<?php
namespace ChipChap\User;

use ChipChapLL\BaseRequester;

class WalletManager extends BaseRequester {

    public function balance(){
        return $this->call(
            'user/v1/wallet',
            array(),
            'GET',
            array(),
            array()
        );
    }

}
