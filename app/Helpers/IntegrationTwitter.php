<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use App\Models\PlatformReport;
class IntegrationTwitter
{
    protected $day;
    protected $posts;
    protected $totalPosts;
    protected $before;
    protected $after;
    protected $difference;
    protected $platform_id;
    protected $platform_account_id;
    protected $platformAccount;
    protected $url;
    protected $platformReportBefore;


    public function __construct($platformAccount)
    {
        $this->day = Carbon::now()->format('Y-m-d');
        $this->url = str_replace('$username',$platformAccount->username,env('TWITTER_URL'));
        $this->platform_account_id = $platformAccount->id;
        $this->platform_id = $platformAccount->platform_id;
        $this->platformReportBefore=PlatformReport::where('day','!=',$this->day)->where('platform_account_id',$this->platform_account_id)->latest()->first();
    }

    public function fetchData()
    {
        try {
            $client = new Client();
            $response = $client->get($this->url);
            $body = $response->getBody();
            $data = json_decode($body, true);
            if(isset($data['success']) && $data['success']){
                $this->calculationPosts($data['tweets']);
                $this->calculationDifferencer($data['followers']);
                $this->saveReport();
            }else{
                $msg='twitter  integration '.$this->url.' have error: \n  '.$body;
                logToSlack($msg);
            }

        } catch (\Throwable $th) {
            $msg="error in integration twitter with username".': \n  '.$th->getMessage();
            logToSlack($msg);
        }
    }

    public function calculationPosts($total_posts):void{
        $this->totalPosts=$total_posts;

        $this->total_posts=$total_posts;
        $this->posts=(integer)$total_posts-(isset($this->platformReportBefore)?$this->platformReportBefore->total_posts:0);
    }
    public function calculationDifferencer($user_followers):void{
        $this->after=$user_followers;
        $this->before=isset($this->platformReportBefore->after)?$this->platformReportBefore->after:0;

        $this->difference=(integer)$this->after-(integer)$this->before;
    }
    public function saveReport(){
        PlatformReport::updateOrCreate(
            [
                'day' => $this->day,
                'platform_id' => $this->platform_id,
                'platform_account_id' => $this->platform_account_id,
            ],
            [
                'total_posts' => $this->total_posts,
                'before' => $this->before,
                'posts' => $this->posts,
                'after' => $this->after,
                'difference' => $this->difference,

            ]
        );


    }

}
