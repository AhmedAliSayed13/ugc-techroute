<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use App\Models\PlatformReport;
class IntegrationInstagram
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
        $this->url =$newText = str_replace('$username',$platformAccount->username,env('INSTAGRAM_URL'));
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
            if(isset($data['status']) && $data['status']){
                $this->calculationPosts($data['total_posts']);
                $this->calculationDifferencer($data['user_followers']);
                $this->saveReport();
            }else{
                $msg='instagram  integration '.$this->url.' have error: \n  '.$body;
                logToSlack($msg);
            }

        } catch (\Throwable $th) {
            $msg="error in integration instagram with username".': \n  '.$th->getMessage();
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
        // PlatformReport::create([
        //     'day'=>$this->day,
        //     'posts'=>$this->posts,
        //     'total_posts'=>$this->total_posts,
        //     'before'=>$this->before,
        //     'after'=>$this->after,
        //     'difference'=>$this->difference,
        //     'platform_id'=>$this->platform_id,
        //     'platform_account_id'=>$this->platform_account_id,
        // ]);

        PlatformReport::updateOrCreate(
            [
                'day' => $this->day,
                'platform_id' => $this->platform_id,
                'platform_account_id' => $this->platform_account_id,
            ],
            [
                'posts' => $this->posts,
                'total_posts' => $this->total_posts,
                'before' => $this->before,
                'after' => $this->after,
                'difference' => $this->difference,
                // Other fields you want to update or create
            ]
        );
    }

}
