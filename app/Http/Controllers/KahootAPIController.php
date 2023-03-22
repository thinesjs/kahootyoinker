<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class KahootAPIController extends Controller
{
    private $client;
    private $headers;

    public function __construct(Array $credentials = null){
        $this->client = new Client(array('curl' => [CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_3],'cookies' => true,'http_errors' => false, 'verify'=>false));
        $this->headers = [
            'Content-Type' => 'application/json',
        ];
    }

    public function getSessionDetails($uuid){
        $response = $this->client->request("GET","https://play.kahoot.it/rest/kahoots/$uuid");
        return json_decode((string)$response->getBody());
    }
}
