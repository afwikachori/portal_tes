<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\BadResponseException;
use App\Http\Controllers\SendRequestController;

class ApptesController extends Controller
{
    use SendRequestController;

    public function IndexView()
    {
        return view('index');
    }

    public function get_salary(Request $request)
    {
        $url = env('SERVICE') . 'salary/inquiry';
        $input = $request->all();

        $json = $this->post_get_request(null,$url,'get');
        return $json;
    }

    // public function get_salary(Request $request)
    // {
    //     $url = env('SERVICE') . 'salary/inquiry';

    //     $client = new \GuzzleHttp\Client();

    //         $request = $client->get($url);
    //         $response = $request->getBody();
    //         $json = json_decode($response, true);
    //     try {
    //         if ($json['success'] == true) {
    //             return $json['data'];
    //         }
    //     } catch (ClientException $errornya) {
    //         $error = json_decode($errornya->getResponse()->getBody()->getContents(), true);
    //         return $error;
    //     } catch (ServerException $errornya) {
    //         $error = json_decode($errornya->getResponse()->getBody()->getContents(), true);
    //         return $error;
    //     } catch (ConnectException $errornya) {
    //         $error['status'] = 500;
    //         $error['message'] = "Internal Server Error";
    //         $error['succes'] = false;
    //         return $error;
    //     }
    // }




}// end-classs
