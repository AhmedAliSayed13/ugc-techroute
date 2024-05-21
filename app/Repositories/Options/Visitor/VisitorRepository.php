<?php namespace App\Repositories\Options\Visitor;


use App\Models\Visitor;
use App\Models\Customer;

use App\Models\Option;
use App\Helpers\FileManager;
use Auth;
class VisitorRepository implements VisitorInterface
{
    
    public function index(): array
    {
        $visitors = Visitor::AcceptRequest(getFillableSort('Visitor'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "visitors" => $visitors,
        );
        return $data;
    }
    public function show($key)
    {
        $visitor = Visitor::where('key',$key)->first();
        $visitor->count += 1; // increment the quantity by 1
        $visitor->save();
        return $visitor->redirect;
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
            $visitor=Visitor::create([
                'name'=>$request->name,
                'redirect'=>$request->redirect,
                'key'=>$request->key,
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
        $visitor = Visitor::find($id);
        
        $data = array(
            "visitor" => $visitor,
            
           
        );
        return $data;
    }
    public function update($request,$id): bool
    {
        try {
            $ad = Visitor::find($id);
            $ad->update([
                'name'=>$request->name,
                'redirect'=>$request->redirect,
                'key'=>$request->key,
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
            $Visitor = Visitor::find($id);
            if ($Visitor) {
                $Visitor->delete();
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

}
