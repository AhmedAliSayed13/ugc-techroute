<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ad;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MarketingCheckFile; 
class CheckAdFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:AdFile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check file for ads';

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
        $ads=Ad::whereDate('date', Carbon::today()->toDateString())
        ->where('time', '>=', Carbon::now()->subHours(6)->toTimeString())
        ->where('publish',0)
        ->get();
        
        // $this->info($ads);
        foreach($ads as $ad){
            // $this->info('ad-'.Carbon::now()->addHours(6).'|||'.$ad->id);
            if($ad->adsFiles->count()<=0){
                $this->info('ad-'.$ad->id.', file=>'.$ad->adsFiles->count());
                $email=$ad->user->email;
                $name=$ad->customer;
                $time=$ad->time;
                $date=$ad->date;
                $type=$ad->marketing_service_type;
                $usersEmails=User::role(['Marketer','Admin'])->pluck('email');
                $usersEmails[]=$ad->user->email;
                // $this->info($usersEmails);
                Mail::to($usersEmails)->send(new MarketingCheckFile($name,$date,$time,$type));
            }
        }
    }
}
