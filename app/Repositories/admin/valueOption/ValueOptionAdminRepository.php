<?php namespace App\Repositories\admin\valueOption;

use App\Models\ValueOption;
use App\Models\MainOption;
use DB;

class ValueOptionAdminRepository implements ValueOptionAdminInterface
{

    public function index($id): array
    {
        $valueOptions = ValueOption::AcceptRequest(getFillableSort('ValueOption'))
            ->where('main_option_id', $id)
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "valueOptions" => $valueOptions,
            'main_option_id' => $id,
        );
        return $data;
    }
    public function show($id)
    {
        // return $id;
        $valueOptions = ValueOption::where('main_option_id', $id)->get();
        $data = [
            'main_option_id' => $id,
            'valueOptions' => $valueOptions,
        ];
        return $data;
    }
    public function create($id): array
    {
        $mainOption = MainOption::find($id);
        $data = array(
            "mainOption" => $mainOption,
        );
        return $data;
    }
    public function store($request, $id): bool
    {
        try {
            $valueOption = ValueOption::create([
                'name' => $request->input('name'),
                'main_option_id' => $id,
                'is_active' => $request->input('is_active') == 'on' ? 1 : 0,
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
        $valueOption = ValueOption::find($id);

        $data = array(
            "valueOption" => $valueOption,
        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            $valueOption = ValueOption::find($id);
            $valueOption->name = $request->input('name');
            $valueOption->is_active = $request->has('is_active') ? 1 : 0;
            $valueOption->save();
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

            DB::table("value_options")->where('id', $id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
