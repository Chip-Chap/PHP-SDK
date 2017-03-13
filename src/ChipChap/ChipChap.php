<?php
namespace ChipChap;


use ChipChap\Integrator\MethodsManager;
use ChipChap\Integrator\ServicesManager;
use ChipChap\Pub\PublicManager;
use ChipChap\User\AccountManager;
use ChipChap\User\WalletManager;
use ChipChapLL\Core\Credentials;


class ChipChap {

    public static function createClient(Credentials $credentials = null) {
        return new Client(

        );
    }
}


