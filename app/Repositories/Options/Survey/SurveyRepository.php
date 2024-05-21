<?php namespace App\Repositories\Options\Survey;


use App\Models\Survey;
use App\Models\Customer;

use App\Models\Option;
use App\Helpers\FileManager;
use Auth;
class SurveyRepository implements SurveyInterface
{

    
    public function index(): array
    {
        $surveys = Survey::AcceptRequest(getFillableSort('Survey'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "surveys" => $surveys,
        );
        return $data;
    }
    public function show($key)
    {
        $survey = Survey::where('key',$key)->first();
       
        return $survey;
    }
    public function create(): array
    {
      
  
        $data = array(
        
        );
        return $data;
    }
    public function store($request): bool
    {
        try {
            $survey=Survey::create([
                'email'=>$request->email,
                'key'=>generateKey(),
            ]);
           
            toastr()->success('Item Has Been Saved Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    
    public function edit($id): array
    {
        $survey = Survey::find($id);
        
        $data = array(
            "survey" => $survey,
        );
        return $data;
    }
    public function update($request,$id): bool
    {
        try {
            $survey = Survey::find($id);
            $survey->update([
                'email'=>$request->email,
                'reason'=>$request->reason,
                'answer'=>($request->answer=='on')?1:0,
            ]);
            
            
            
        
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function destroy($id): bool
    {
        try {
            $Survey = Survey::find($id);
            if ($Survey) {
                $Survey->delete();
                toastr()->success(__('messages.ItemHasBeenDeletedSuccessfully'));
            return true;
            } else {
                    toastr()->error(__('messages.ItemNotExists'));
                    return false;
                }
                    
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function storeAnswer($key,$answer)
    {
        try {
            $survey = Survey::where('key',$key)->first();
            $survey->answer=$answer;
            if($answer){
                $survey->reason=null;
            }
            $survey->save();
            return $survey;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function storeReason($request)
    {
        try {
            $survey = Survey::where('key',$request->key)->first();
            $survey->reason=$request->reason;
            $survey->save();
            return $survey;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
