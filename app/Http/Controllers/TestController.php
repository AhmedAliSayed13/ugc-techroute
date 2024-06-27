<?php

namespace App\Http\Controllers;

use App\Helpers\IntegrationInstagram;
use App\Helpers\IntegrationTwitter;
use App\Helpers\IntegrationSms;
use App\Models\PlatformAccount;
use Mail;
use App\Mail\SendReqisterFormCreator;
class TestController extends Controller
{

    public function test()
    {
        // return 123;
            // $client = new Client();
            // $response = $client->get($this->url);
            // $body = $response->getBody();
            // $data = json_decode($body, true);
            Mail::to('ahmedalisayed13@gmail.com')->send(new SendReqisterFormCreator('asdasd', 'asdasd'));
    }



}
