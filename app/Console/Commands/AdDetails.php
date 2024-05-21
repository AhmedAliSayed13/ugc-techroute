<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Ad;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MarketingAdDetails; 

class AdDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:AdDetails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check ads Details';

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
        ->where('publish',0)
        ->get();
        if($ads->count()>0){
            $usersEmails=User::role(['Marketer','Admin'])->pluck('email');
            
            Mail::to($usersEmails)->send(new MarketingAdDetails($ads));
        }
    }
}
