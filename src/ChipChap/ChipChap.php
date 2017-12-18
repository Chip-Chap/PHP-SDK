<?php
namespace ChipChap;


use ChipChap\Integrator\MethodsManager;
use ChipChap\Pub\PublicManager;
use ChipChap\User\AccountManager;
use ChipChap\User\WalletManager;
use ChipChapLL\Core\Credentials;


class ChipChap {
    public $methods;
    public $account;
    public $wallet;
    public $realtime;
    public $public;


    public function __construct(Credentials $credentials, $url){
        $this->methods = new MethodsManager($credentials, $url);
//        $this->account = new AccountManager($credentials, $url);
//        $this->wallet = new WalletManager($credentials, $url);
        $this->public = new PublicManager($credentials, $url);
    }

}


