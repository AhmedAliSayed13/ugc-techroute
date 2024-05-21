<?php

namespace App\Http\Controllers\Platform;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Platform\PlatformInterface;
use App\Models\Platform;


class PlatformController extends Controller
{
    protected $platformInterface;
    private $path="Platform.";

    public function __construct(PlatformInterface  $platformInterface)
    {
        $this->platformInterface = $platformInterface;

        // $this->middleware('permission:ad-list|ad-create|ad-edit|ad-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:ad-create', ['only' => ['create','store']]);
        // $this->middleware('permission:ad-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:ad-delete', ['only' => ['destroy']]);
    }

    public function report(Request $request)
    {

        $data = $this->platformInterface->report($request);
        $data = (object)$data;
        return  view($this->path.'report',compact('data'));
    }
    public function reportEdit(Request $request)
    {

        $data = $this->platformInterface->reportEdit($request);
        $data = (object)$data;
        return  view($this->path.'report_edit',compact('data'));
    }
    public function reportUpdate(Request $request)
    {

        $data = $this->platformInterface->reportUpdate($request);

        return  back();
    }


}

