<?php namespace App\Repositories\website\pages;

use App\Helpers\DataResponse;

interface PagesInterface {
    public function homePage():array;
    public function price():array;
    public function comingSoon():array;
    public function comingSoonSave($request):bool;
}
