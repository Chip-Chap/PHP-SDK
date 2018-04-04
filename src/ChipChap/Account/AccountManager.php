<?php
namespace ChipChap\Account;

use ChipChapLL\BaseRequester;
use ChipChapLL\Core\Credentials;

class AccountManager extends BaseRequester {

    private $credentials;
    private $url;

    public function __construct(Credentials $credentials, $url)
    {
        $this->credentials = $credentials;
        $this->url = $url;
    }

    //PREPAID CARDS
    public function registerPrepaidCard($type, $account_id, $card_id){
        return $this->call(
            'account/'.$account_id.'/v1/prepaidcard/'.$type.'/register',
            array(),
            'POST',
            array(
                'card_id'   =>  $card_id
            ),
            array()
        );
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}
