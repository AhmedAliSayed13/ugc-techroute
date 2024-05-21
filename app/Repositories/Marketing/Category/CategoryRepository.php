<?php namespace App\Repositories\Marketing\Category;


use App\Models\Category;
use App\Models\Customer;
use App\Models\MarketingServiceType;
use App\Helpers\FileManager;
use Auth;
class CategoryRepository implements CategoryInterface
{

   
    public function index(): array
    {
        $categories = Category::AcceptRequest(getFillableSort('Category'))
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "categories" => $categories,
        );
        return $data;
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
            
            $category=Category::create([
                'name'=>$request->name,
                
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
        $category = Category::find($id);
       
        $data = array(
            "category" => $category,
            
        );
        return $data;
    }
    public function update($request,$id): bool
    {
        try {
            $category = Category::find($id);
            $category->update([
                'name'=>$request->name,
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
            $Category = Category::find($id);
            if ($Category) {
                $Category->delete();
                toastr()->success('Item Has Been Deleted Successfully');
            return true;
            } else {
                    toastr()->error('Item Not Exists');
                    return false;
            }
                    
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
