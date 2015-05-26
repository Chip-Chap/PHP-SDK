<?php
namespace ChipChap\Services;

use ChipChapLL\BaseRequester;

class TransactionStatus extends BaseRequester {

    public function status($transaction_id){
        return $this->call(
            'services/v1/transaction/status/'.$transaction_id,
            array(),
            'GET',
            array(),
            array()
        );
    }

}