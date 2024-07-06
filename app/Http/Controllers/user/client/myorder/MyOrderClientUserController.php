<?php

namespace App\Http\Controllers\user\client\myorder;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\myorder\MyOrderClientUserInterface;
use Illuminate\Http\Request;
use App\Http\Requests\user\client\myorders\ChooseCreatorMyorderClientRequest;
class MyOrderClientUserController extends Controller
{
    protected $myOrderClientUserInterface;
    private $path = "user.client.myorder.";

    public function __construct(MyOrderClientUserInterface $myOrderClientUserInterface)
    {
        $this->myOrderClientUserInterface = $myOrderClientUserInterface;
    }

    public function index()
    {
        $data = $this->myOrderClientUserInterface->index();
        // return $data;
        return view($this->path . 'index', compact('data'));
    }
    public function edit($id)
    {
        $data = $this->myOrderClientUserInterface->edit($id);
        // return $data;
        return redirect($data);
    }
    public function show($id)
    {
        $data = $this->myOrderClientUserInterface->show($id);
        // return $data['order']->orderOptions;
        return view($this->path . 'show', compact('data'));
    }
    public function orderCreators($id)
    {
        $data = $this->myOrderClientUserInterface->orderCreators($id);
        // return $data;
        return view($this->path . 'order_creators', compact('data'));
    }
    public function chooseCreator(ChooseCreatorMyorderClientRequest $request,$id)
    {
        try{
            $data = $this->myOrderClientUserInterface->chooseCreator($request,$id);
            return back();
        } catch (\Illuminate\Validation\ValidationException $e) {
            foreach ($e->validator->errors()->all() as $error) {
                toastr()->error(__('messages.error'), $error);
            }
         return back();
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'),$th->getMessage());
            return back();
        }

    }

}
