<?php


namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

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