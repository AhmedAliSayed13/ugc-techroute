<?php namespace App\Repositories\Marketing\ServiceType;

use App\Models\MarketingServiceType;

class MarketingServiceTypeRepository implements MarketingServiceTypeInterface
{

    public function index(): array
    {

        $marketingServiceTypes = MarketingServiceType::AcceptRequest(
            getFillableSort('MarketingServiceType')
        )
            ->filter()
            ->orderBy(request()->get('sort')??'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');

        $data = array(
            "marketingServiceTypes" => $marketingServiceTypes,
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

            $result = MarketingServiceType::create([
                'name' => $request->name,
            ]);
            toastr()->success("Item Has Been Saved Successfully");

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function update($request, $id): bool
    {
        try {
            $marketingServiceType = MarketingServiceType::find($id);

            $marketingServiceType->update([
                'name' => $request->name,
            ]);

            toastr()->success('Item Has Been Updated Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function edit($id): array
    {

        $marketingServiceType = MarketingServiceType::find($id);

        $data = array(

            "marketingServiceType" => $marketingServiceType,
        );
        return $data;

    }
    public function destroy($id): bool
    {
        try {
            $marketingServiceType = MarketingServiceType::find($id);
            if ($marketingServiceType) {
                $marketingServiceType->delete();
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
