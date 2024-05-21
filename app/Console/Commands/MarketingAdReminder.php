<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ad;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MarketingAdReminderMail; 

class MarketingAdReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:AdReminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Marketing Ad Reminder';

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
        ->where('time', '>=', Carbon::now()->subHours(1)->toTimeString())
        ->where('publish',0)
        ->get();
        $emails=User::role(['Editor','Admin'])->pluck('email');
        foreach($ads as $ad){
            if($ad->adsFiles->count()<=0){
                $this->info('ad-'.$ad->id.', file=>'.$ad->adsFiles->count());
                $name=$ad->customer->name;
                $time=$ad->time;
                $date=$ad->date;
                Mail::to($emails)->send(new MarketingAdReminderMail($name,$date,$time,$ad->marketingServiceType->name));
            }
        }
    }
}
