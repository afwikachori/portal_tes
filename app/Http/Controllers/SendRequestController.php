<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ConnectException;

trait SendRequestController
{
    function post_get_request($data, $url, $method)
    {

        $client = new \GuzzleHttp\Client();

        if ($method == 'get') {
            $response = $client->get($url);
        } else {
            return 'method post';
        }


            $ini = $response->getBody()->getContents();
            $json = json_decode($ini, true);

        try {
            if ($json['success']) {
                return $json['data'];
            }
        } catch (ClientException $errornya) {
            $error = json_decode($errornya->getResponse()->getBody()->getContents(), true);
            return $error;
        } catch (ServerException $errornya) {
            $error = json_decode($errornya->getResponse()->getBody()->getContents(), true);
            return $error;
        } catch (ConnectException $errornya) {
            $error['status'] = 500;
            $error['message'] = "Internal Server Error";
            $error['succes'] = false;
            return $error;
        }
    }
}
