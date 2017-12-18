<?php
namespace ChipChap\User;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

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
