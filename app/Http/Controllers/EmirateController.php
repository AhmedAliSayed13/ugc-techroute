<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\emirates\StoreRequest;
use App\Http\Requests\emirates\UpdateRequest;
use App\Models\Emirate;
use Hash;
class EmirateController extends Controller
{
    private $path='emirates.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emirates=Emirate::paginate(10);
        return view($this->path.'list',compact('emirates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Emirate::create([
            'name'=>$request->name,
        ]);
        toastr()->success('Emirate has been saved successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Emirate $emirate)
    {
        return view($this->path.'edit',compact('emirate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Emirate $emirate)
    {
        $emirate->name=$request->name;
        $emirate->save();
        toastr()->success('Emirate has been saved successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emirate $emirate)
    {
        $emirate->delete();
        toastr()->success('Emirate has been Deleted successfully!');
        return back();
    }
}
