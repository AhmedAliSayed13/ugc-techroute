<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\Category\CategoryInterface;
use App\Models\Category;
use App\Http\Requests\Marketing\Category\StoreCategoryRequest;
use App\Http\Requests\Marketing\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    protected $categoryInterface;
    private $path="Marketing.Category.";

    public function __construct(CategoryInterface  $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;

        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    
    public function index()
    {
        $data = $this->categoryInterface->index();
        return  view($this->path.'index',compact('data'));
    }

    public function create()
    {
        
        $data = $this->categoryInterface->create();
        return  view($this->path.'create',compact('data'));
    }
    public function edit($id)
    {
        $data = $this->categoryInterface->edit($id);
        return  view($this->path.'edit',compact('data'));
    }
    public function store(StoreCategoryRequest $request)
    {
        $result = $this->categoryInterface->store($request);
        return  back();
    }
    
    public function update(UpdateCategoryRequest $request,$id)
    {
        // return 'ok';
        $result = $this->categoryInterface->update($request,$id);
        return  back();
    }
    public function show($id)
    {
        
        $result = $this->categoryInterface->show($id);
        return  $result->json();
    }
    public function destroy($id)
    {
        
        $result = $this->categoryInterface->destroy($id);
        
        return  back();
    }
    
    
    
}

