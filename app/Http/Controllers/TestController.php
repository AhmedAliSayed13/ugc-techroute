<?php

namespace App\Http\Controllers;

use App\Helpers\IntegrationInstagram;
use App\Helpers\IntegrationTwitter;
use App\Helpers\IntegrationSms;
use App\Models\PlatformAccount;

class TestController extends Controller
{

    public function test()
    {
            $client = new Client();
            $response = $client->get($this->url);
            $body = $response->getBody();
            $data = json_decode($body, true);
    }
                   
          

}
