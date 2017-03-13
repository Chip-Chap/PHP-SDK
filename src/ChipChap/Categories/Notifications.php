<?php

namespace ChipChap\Integrator\Methods;

use ChipChapLL\BaseRequester;

class Notifications extends BaseRequester {

    /**
     * @param int $offset
     * @param int $limit
     * @return mixed
     */
    public function fetch($offset = 0, $limit = 10){
        return $this->call(
            "/account/v1/notifications?limit=$limit&offset=$offset",
            array(),
            'GET',
            array(
            ),
            array()
        );
    }

    /**
     * @param $id
     * @return mixed
     */
    public function read($id){
        return $this->call(
            "/account/v1/notifications/$id",
            array(),
            'PUT',
            array(
                'status' => 'seen'
            ),
            array()
        );
    }
}
