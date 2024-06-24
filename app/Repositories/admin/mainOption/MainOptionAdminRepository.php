<?php namespace App\Repositories\admin\mainOption;

use App\Models\MainOption;
use App\Models\ValueOption;
use DB;

class MainOptionAdminRepository implements MainOptionAdminInterface
{

    public function index(): array
    {
        $mainOptions = MainOption::AcceptRequest(getFillableSort('MainOption'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "mainOptions" => $mainOptions,
        );
        return $data;
    }
    public function show($key)
    {
        $mainOption = MainOption::where('key', $key)->first();
        $mainOption->count += 1; // increment the quantity by 1
        $mainOption->save();
        return $mainOption->redirect;
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
            $mainOption = MainOption::create([
                'name_client' => $request->input('name_client'),
                'name_creator' => $request->input('name_creator'),
                'is_active' => $request->input('is_active')=='on' ? 1 : 0,
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
        $mainOption = MainOption::find($id);

        $data = array(
            "mainOption" => $mainOption,

        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            $mainOption = MainOption::find($id);
            $mainOption->name_creator = $request->input('name_creator');
            $mainOption->name_client = $request->input('name_client');
            $mainOption->is_active = $request->has('is_active') ? 1 : 0;
            $mainOption->save();
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
            $mainOption=MainOption::find($id);
            DB::table("value_options")->where('main_option_id', $mainOption->id)->delete();
            DB::table("main_options")->where('id', $mainOption->id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
