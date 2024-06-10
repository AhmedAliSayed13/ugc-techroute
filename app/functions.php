<?php
use App\Models\Ad;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
if (!function_exists('OptionSelect')) {

    function OptionSelect($item, $value)
    {
        if ($item == $value) {
            return 'selected';
        } else {
            return '';
        }
    }
}
function OptionSelectMulitpleCommaString($string, $value)
    {
        // Split the string into an array using the comma as a delimiter
        $array = explode(',', $string);

        // Trim whitespace from each element in the array
        $array = array_map('trim', $array);

        // Check if the value exists in the array
        if (in_array($value, $array)) {
            return 'selected';
        }

    }
if (!function_exists('getFillableSort')) {

    function getFillableSort($modelName)
    {

        $model = "App\\Models\\$modelName";
        $instance = new $model();
        $attributes = $instance->getFillable();
        return $attributes;
    }
}

if (!function_exists('generateKey')) {

    function generateKey()
    {
        $timestamp = Carbon::now()->timestamp;
        $randomString = Str::random(8); // Adjust the length as needed
        $uniqueKey = $timestamp . $randomString;
        return $uniqueKey;
    }
}

if (!function_exists('checkActiveRoute')) {

    function checkActiveRoute($route)
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}
if (!function_exists('getUserProfileImage')) {

    function getUserProfileImage($image=null)
    {
        if($image){
            return asset($image);
        }else{
            return asset('system/users/profiles/default.png');

        }
    }
}

