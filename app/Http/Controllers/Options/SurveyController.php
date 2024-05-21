<?php

namespace App\Http\Controllers\Options;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Options\Survey\SurveyInterface;
use App\Models\Survey;
use App\Http\Requests\Options\Survey\StoreSurveyRequest;
use App\Http\Requests\Options\Survey\UpdateSurveyRequest;

class SurveyController extends Controller
{
    protected $surveyInterface;
    private $path="Options.Survey.";

    public function __construct(SurveyInterface  $surveyInterface)
    {
        $this->surveyInterface = $surveyInterface;

        // $this->middleware('permission:survey-list|survey-create|survey-edit|survey-delete', ['only' => ['index']]);
        // $this->middleware('permission:survey-create', ['only' => ['create','store']]);
        // $this->middleware('permission:survey-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:survey-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = $this->surveyInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        $data = $this->surveyInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->surveyInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreSurveyRequest $request)
    {
        $result = $this->surveyInterface->store($request);
        return  back();
    }
    
    public function update(UpdateSurveyRequest $request,$id)
    {
        $result = $this->surveyInterface->update($request,$id);
        return  back();
    }
    public function show($key)
    {
        $result = $this->surveyInterface->show($key);
        return redirect($result); 
    }
    public function destroy($id)
    {
        $result = $this->surveyInterface->destroy($id);
        return  back();
    }
    public function storeAnswer(Request $request, $key,$answer)
    {
        $survey = $this->surveyInterface->storeAnswer($key,$answer);
        
        return  view($this->path.'confirm',compact('survey'));
    }
    public function storeReason(Request $request)
    {
        $survey = $this->surveyInterface->storeReason($request);
        // return $survey;
        return  view($this->path.'confirm',compact('survey'));
    }
    
    
    
}

