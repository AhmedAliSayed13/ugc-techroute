<?php
use App\Models\CreatorOption;
use App\Models\Setting;
use App\Models\Task;
use App\Models\Message;
use App\Models\ValueOption;
use Carbon\Carbon;
use Illuminate\Support\Str;
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

    function getUserProfileImage($image = null)
    {
        if ($image) {
            return asset($image);
        } else {
            return asset('system/users/profiles/default.png');

        }
    }
}
if (!function_exists('getUserOtionsByMainId')) {

    function getUserOtionsByMainId($mainOptionID = null, $user_id)
    {
        $userOptionComma = CreatorOption::where(['main_option_id' => $mainOptionID, 'user_id' => $user_id])->first();
        $userOptionComma = $userOptionComma ? $userOptionComma->value_options : '';
        return $userOptionComma;
    }
}
if (!function_exists('generateTextTimePlus')) {

    function generateTextTimePlus($value)
    {
        if ($value != 0) {

            $txt = '+ ' . $value . ' ' . __('messages.each_video');
        } else {
            $txt = __('messages.Included');
        }
        return $txt;
    }
}

if (!function_exists('getSettingValueByKey')) {

    function getSettingValueByKey($key)
    {
        $setting = Setting::where('key', $key)->first();
        return $setting ? $setting->value : null;

    }
}
if (!function_exists('getPriceOneVideo')) {

    function getPriceOneVideo($total, $count)
    {

        return $total / $count;

    }
}
if (!function_exists('getValuesOptionByIds')) {

    function getValuesOptionByIds($values)
    {
        $valueOptionIds = explode(',', $values);
        $videoOptions = ValueOption::whereIn('id', $valueOptionIds)->get();
        return $videoOptions;

    }
}

if (!function_exists('getValuesOptionCommaNameByIds')) {

    function getValuesOptionCommaNameByIds($values)
    {
        $valueOptionIds = explode(',', $values);
        $videoOptions = ValueOption::whereIn('id', $valueOptionIds)->pluck('name');
        return  $videoOptions->implode(', ');;

    }
}
if (!function_exists('calculateBirthdate')) {

    function calculateBirthdate($birthdate)
    {
        $dob = Carbon::parse($birthdate);
        $age = $dob->diffInYears(Carbon::now());
        return $age;
    }

}
if (!function_exists('getCountUnReadMessages')) {

    function getCountUnReadMessages()
    {
        $user=Auth::user();
        $type=$user->is_creator?'creator_id':'client_id';
        $tasks=Task::where($type,$user->id)->pluck('id')->toArray();

        return Message::whereIn('task_id',$tasks)->where('user_id','!=',$user->id)->where('is_read',0)->count();

    }

}
