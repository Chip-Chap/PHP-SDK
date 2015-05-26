<?php
/**
 * Created by PhpStorm.
 * User: lluis
 * Date: 5/25/15
 * Time: 9:52 PM
 */

namespace ChipChap\Pub;


use ChipChapLL\Core\Credentials;

class PublicManager {
    public $ticker;

    public function __construct(Credentials $credentials, $url){
        $this->ticker = new Ticker($credentials, $url);
    }
}