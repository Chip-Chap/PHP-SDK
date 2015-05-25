<?php
namespace ChipChap\Services;

class TransactionStatus extends BaseService {

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