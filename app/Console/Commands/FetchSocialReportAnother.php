<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\IntegrationInstagram;
use App\Helpers\IntegrationTwitter;
use App\Helpers\IntegrationSms;
use App\Models\PlatformAccount;
use App\Models\PlatformReport;
use Carbon\Carbon;
class FetchSocialReportAnother extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:socialReportAnother';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch data from our accounts SMS and  Another social';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $accounts = PlatformAccount::where('group','another')->get();
        foreach ($accounts as $account) {
            $report=PlatformReport::where('platform_account_id',$account->id)->latest()->first();
            PlatformReport::updateOrCreate([
                'day'=>Carbon::now()->format('Y-m-d'),
                'platform_id'=>$account->platform_id,
                'platform_account_id'=>$account->id,
            ],[
                'posts'=>isset($report->posts)?$report->posts:0,
                'total_posts'=>isset($report->total_posts)?$report->total_posts:0,
                'before'=>isset($report->before)?$report->before:0,
                'after'=>isset($report->after)?$report->after:0,
                'difference'=>isset($report->difference)?$report->difference:0,
            ]);
        }
        $IntegrationSms = new IntegrationSms();
        $IntegrationSms->fetchData();
        $this->info('Another&SMS task executed successfully!');
        logToSlack('Social Report Another&SMS task executed successfully at '.date('Y-m-d H:i:s'));
    }
}
