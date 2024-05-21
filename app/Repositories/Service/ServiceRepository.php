<?php namespace App\Repositories\Service;

use App\Models\Service;

class ServiceRepository implements ServiceInterface
{

    public function index(): array
    {
        $services = Service::AcceptRequest(getFillableSort('Service'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "services" => $services,
        );
        return $data;
    }
    public function show($id)
    {
        $service = Service::find($id);
        return $service->redirect;
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
            $service = Service::create($request->all());

            toastr()->success('Item Has Been Saved Successfully');

            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

    public function edit($id): array
    {
        $service = Service::find($id);

        $data = array(
            "service" => $service,

        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {
            $ad = Service::find($id);
            $ad->update($request->all());

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
            $Service = Service::find($id);
            if ($Service) {
                $Service->delete();
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
