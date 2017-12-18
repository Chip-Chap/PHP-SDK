<?php
namespace ChipChap\User;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

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
