<?php
namespace TelepayApi\Core;

class JsonRequester implements Requester {

    public function send(Request $request){
        $ch = curl_init(
            $request->getBaseUrl().'/'
            .$request->getFunction().'?'
            .http_build_query($request->getUrlParams())
        );

        $headerArray = [];
        foreach($request->getHeaders() as $key => $value){
            $headerArray[]=ucfirst($key).': '.$value;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $method = strtoupper($request->getMethod());
        switch($method){
            case "GET":
                break;
            case "POST":
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParams());
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request->getParams()));
                break;
        }
        return json_decode(curl_exec($ch));
    }

}