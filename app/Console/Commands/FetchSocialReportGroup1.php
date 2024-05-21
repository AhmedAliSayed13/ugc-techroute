<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\IntegrationInstagram;
use App\Helpers\IntegrationTwitter;
use App\Helpers\IntegrationSms;
use App\Models\PlatformAccount;
class FetchSocialReportGroup1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:socialReportGroup1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fetch data from our accounts Instagram and Twitter Group1';

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
        $accounts = PlatformAccount::where('group','group1')->get();
        foreach ($accounts as $account) {
            switch ($account->platform_id) {
                case 1:
                    $integrationInstagram = new IntegrationInstagram($account);
                    $integrationInstagram->fetchData();
                    break;
                case 2:
                    $integrationTwitter = new IntegrationTwitter($account);
                    $integrationTwitter->fetchData();
                    break;
            }
        }
        $this->info('Group1 task executed successfully!');
        logToSlack('Social Report Group1 task executed successfully at '.date('Y-m-d H:i:s'));
    }
}
