<?php namespace App\Repositories\admin\locationOption;

use App\Models\LocationOption;
use DB;

class LocationOptionAdminRepository implements LocationOptionAdminInterface
{

    public function index(): array
    {
        $locationOptions = LocationOption::AcceptRequest(getFillableSort('LocationOption'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "locationOptions" => $locationOptions,
        );
        return $data;
    }
    public function show($key)
    {
        $locationOption = LocationOption::where('key', $key)->first();
        $locationOption->count += 1; // increment the quantity by 1
        $locationOption->save();
        return $locationOption->redirect;
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
            $locationOption = LocationOption::create([
                'name' => $request->input('name'),
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
        $locationOption = LocationOption::find($id);

        $data = array(
            "locationOption" => $locationOption,

        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            $locationOption = LocationOption::find($id);
            $locationOption->name = $request->input('name');
            $locationOption->is_active = $request->has('is_active') ? 1 : 0;
            $locationOption->save();
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

            DB::table("location_options")->where('id', $id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
