<?php

namespace App\Services;

use GuzzleHttp\Client;

class StripeService{

    public $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.stripe.com']);
    }

    public function request($method, $uri){
        $response = $this->client->request($method, $uri, [
            'headers' => [
                'Authorization' => "Bearer sk_test_2g19hywQzpCRs0V2wVAOtOkU00oe5pcbFc"
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }


    public function code($code){
        return $this->request('GET', '/v1/promotion_codes/' . $code);
    }

}