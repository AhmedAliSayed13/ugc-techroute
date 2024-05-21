<?php namespace App\Repositories\Platform;

use App\Helpers\FileManager;
use App\Models\Platform;
use App\Models\Customer;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\MarketingServiceType;
use App\Helpers\OdooSystem;
use Auth;
use App\Models\PlatformReport;
use Illuminate\Http\Request;
use App\Helpers\IntegrationSms;

class PlatformRepository implements PlatformInterface
{

    private $path = 'platforms-medias';

    public function report(Request $request)
    {
        $day=$request->day?$request->day:Carbon::now()->format('Y-m-d');
        $reports=$accounts = PlatformReport::where('day',$day)->get();
        $data = array(
            "day"=> $day,
            "reports"=> $reports,
        );
        return $data;

    }
    public function reportEdit(Request $request)
    {
        $day=$request->day?$request->day:Carbon::yesterday()->format('Y-m-d');
        $reports=$accounts = PlatformReport::where('day',$day)->where('platform_id',4)->get();
        $data = array(
            "day"=> $day,
            "reports"=> $reports,
        );
        return $data;

    }
    public function reportUpdate(Request $request)
    {

        for ($i=0; $i <count($request->report_ids) ; $i++) {
            $report= PlatformReport::find($request->report_ids[$i]);
            PlatformReport::updateOrCreate(
                [
                    'id' => $request->report_ids[$i]
                ],
                [
                    'posts' => $request->posts[$i],
                    'after' => $request->after[$i],
                    'before' => $request->before[$i],
                    'difference' => $request->before[$i]- $request->after[$i],
                ]
            );
        }
        return true;

    }

}
