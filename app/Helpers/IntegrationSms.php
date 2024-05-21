<?php

namespace App\Helpers;

use App\Models\PlatformAccount;
use App\Models\PlatformReport;
use Carbon\Carbon;
use GuzzleHttp\Client;

class IntegrationSms
{

    protected $day;
    public function __construct()
    {
        $this->day = Carbon::now()->format('Y-m-d');

    }
    public function fetchData($day = null)
    {

        $client = new Client();
        $url = "https://barq-cms.barqapps.com/BARQCMS/marketing_api.php";
        if ($day) {
            $url .= '?date=' . $day;
        }
        $response = $client->get($url,['verify' => false]);
        $body = $response->getBody()->getContents();
        $response = json_decode($body, true);
        if ($response['status'] == 'success') {
            $this->SaveAccounts($response['data']);
        }
        // return array(
        //     'uae_barq_sms' => isset($items[7]) ? $items[7] : 0,
        //     'sharjah_barq_sms' => isset($items[5]) ? $items[5] : 0,
        //     'barq_sport_sms' => isset($items[6]) ? $items[6] : 0,
        //     'from_uae_sms' => isset($items[2]) ? $items[2] : 0,
        //     'ad_barq_sms' => isset($items[3]) ? $items[3] : 0,
        //     'dubai_barq_sms' => isset($items[4]) ? $items[4] : 0,
        //     'uae_barq_English_sms' => isset($items[11]) ? $items[11] : 0,
        //     'from_uae_english_sms' => isset($items[10]) ? $items[10] : 0,
        // );
    }

    public function SaveAccounts($items)
    {

        $accounts = PlatformAccount::where(['platform_id' => 3])->get();
        foreach ($accounts as $account) {
            PlatformReport::updateOrCreate([
                'day' => $this->day,
                'platform_id' => $account->platform_id,
                'platform_account_id' => $account->id,
            ],
            [
                'posts' => (isset($items[$account->username]['message_count']) && $items[$account->username]['message_count'] ) ? $items[$account->username]['message_count'] : 0,
            ]
            );
        }

    }

}
