<?php

namespace ChipChap\Integrator\Methods;

use ChipChap\TransactionHolder;
use ChipChapLL\BaseRequester;

class Wallet extends BaseRequester implements TransactionHolder {

    public function getBalances(){
        return $this->call(
            "/user/v1/wallet",
            array(),
            'GET',
            array(),
            array()
        );
    }

    /**
     * return array<Transaction>
     * @param null $filter
     * @param null $order
     * @param int $offset
     * @param int $limit
     */
    public function getTransactions($filter = null, $order = null, $offset = 0 , $limit = 10){

    }

}
