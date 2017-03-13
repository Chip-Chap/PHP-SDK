<?php
namespace ChipChap;


use ChipChap\Integrator\MethodsManager;
use ChipChap\Integrator\ServicesManager;
use ChipChap\Pub\PublicManager;
use ChipChap\User\AccountManager;
use ChipChap\User\WalletManager;
use ChipChapLL\Core\Credentials;
use ChipChapLL\Core\UserCredentials;


class Client {

    public $exchange;
    public $pos;
    public $wallet;
    public $swift;
    public $account;

    /**
     * Client constructor.
     */
    public function __construct(UserCredentials $credentials)
    {
        $this->exchange = new Exchange();
        $this->pos = $pos;
        $this->wallet = $wallet;
        $this->swift = $swift;
        $this->account = $account;
    }

}


