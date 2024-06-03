<?php namespace App\Repositories\admin\showOption;

use App\Models\ShowOption;
use DB;

class ShowOptionAdminRepository implements ShowOptionAdminInterface
{

    public function index(): array
    {
        $showOptions = ShowOption::AcceptRequest(getFillableSort('ShowOption'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "showOptions" => $showOptions,
        );
        return $data;
    }
    public function show($key)
    {
        $showOption = ShowOption::where('key', $key)->first();
        $showOption->count += 1; // increment the quantity by 1
        $showOption->save();
        return $showOption->redirect;
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
            $showOption = ShowOption::create([
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
        $showOption = ShowOption::find($id);

        $data = array(
            "showOption" => $showOption,

        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            $showOption = ShowOption::find($id);
            $showOption->name = $request->input('name');
            $showOption->is_active = $request->has('is_active') ? 1 : 0;
            $showOption->save();
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

            DB::table("show_options")->where('id', $id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
