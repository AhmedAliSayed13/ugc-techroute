<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
class OdooSystem
{
    protected $clientId;
    protected $clientSecret;
    protected $grantType;
    protected $url;

    public function __construct()
    {
        $this->url = env('UrlOdoo');
        $this->clientId = env('ClientIdOdoo');
        $this->clientSecret = env('ClientSecretOdoo');
        $this->grantType = env('GrantTypeOdoo');
    }

    public function token()
    {
        try {

            $client = new Client();
            $response = $client->post(
                $this->url.'/api/v2/authentication/oauth2/token'
            , [
                'form_params' => [
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                    'grant_type' => $this->grantType,
                ]
        ]);

        
            $body = $response->getBody()->getContents();
            $token = json_decode($body)->access_token;
            return $token;
        
        } catch (\Throwable $th) {
            return [
                'code'=>500,
                'message'=>$th->getMessage(),
            ];
        }
    }

    public function customers($token)
    {
        try {
            $client = new Client([
                'headers' => [
                    'Authorization' => 'Bearer '. $token,
                ],
            ]);
            $response = $client->get($this->url."/api/v2/view/customers");
            $body = $response->getBody()->getContents();
            $customer = json_decode($body);
            return $customer->data;
        
        } catch (\Throwable $th) {
            return [
                'code'=>500,
                'message'=>$th->getMessage(),
            ];
        }
    }

    public function orders($token,$partnerId)
    {
        try {
            $client = new Client([
                'headers' => [
                    'Authorization' => 'Bearer '. $token,
                ],
            ]);
            $response = $client->get($this->url."/api/v2/ads/orders?partner_id=$partnerId");
            $body = $response->getBody()->getContents();
            $order = json_decode($body);

            // $order=array(
            //     [
            //         'id'=>11697,
            //         'name'=>'test'
            //     ]
            // );
            return $order;
        
        } catch (\Throwable $th) {
            return [
                'code'=>500,
                'message'=>$th->getMessage(),
            ];
        }
    }

    public function orderDetails($token,$orderId)
    {
        try {
            $client = new Client([
                'headers' => [
                    'Authorization' => 'Bearer '. $token,
                ],
            ]);
            $response = $client->get($this->url."/api/v2/ads/order/lines?order_id=$orderId");
            $body = $response->getBody()->getContents();
            $serviecs = json_decode($body);
            session()->put('serviecs', $serviecs->data);
            return $serviecs;
        } catch (\Throwable $th) {
            return [
                'code'=>500,
                'message'=>$th->getMessage(),
            ];
        }
    }

    public function orderCreate($token,$orderLineId)
    {
        try {
            $client = new Client([
                'headers' => [
                    // 'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Bearer '. $token,
                ],
            ]);
            $response = $client->post($this->url."/api/v2/ads/order/create",[
                'form_params' => [
                    "order_line_id"=>$orderLineId,
                    "qty_delivered"=>1
                ]
            ]);
            $body = $response->getBody()->getContents();
            $result = json_decode($body);
            
            return $result;
        
        } catch (\Throwable $th) {
            return [
                'code'=>500,
                'message'=>$th->getMessage(),
            ];
        }
    }
}