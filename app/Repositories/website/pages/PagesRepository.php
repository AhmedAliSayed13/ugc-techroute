<?php namespace App\Repositories\website\pages;
use App\Models\Coming;
class PagesRepository implements PagesInterface
{

    public function homePage(): array
    {
        $data = array();
        return $data;
    }
    public function price(): array
    {
        $data = array();
        return $data;
    }
    public function agencies(): array
    {
        $data = array();
        return $data;
    }
    public function ecommerce(): array
    {
        $data = array();
        return $data;
    }
    public function page(): array
    {
        $data = array();
        return $data;
    }
    public function comingSoon(): array
    {
        $data = array();
        return $data;
    }
    public function comingSoonSave($request): bool
    {
        Coming::create([
            'email' => $request->email
        ]);
        toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
        return true;
    }

}
