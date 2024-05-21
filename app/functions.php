<?php
use App\Models\Ad;
use Carbon\Carbon;
use GuzzleHttp\Client;
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
if (!function_exists('getFillableSort')) {

    function getFillableSort($modelName)
    {

        $model = "App\\Models\\$modelName";
        $instance = new $model();
        $attributes = $instance->getFillable();
        return $attributes;
    }
}
if (!function_exists('CheckContractOption')) {

    function CheckContractOption($customer_id, $product_id, $type_id, $ordered_qty, $delivered_qty)
    {
        $NoPublishedAds = Ad::where(['customer_id' => $customer_id, 'product_id' => $product_id, 'marketing_service_type_id' => $type_id, 'publish' => 0])->get()->count();
        $TotalDelivered = $delivered_qty + $NoPublishedAds;
        if ($TotalDelivered < $ordered_qty) {
            return true;
        } else {
            return false;
        }
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
if (!function_exists('getAnswer')) {

    function getAnswer($answer)
    {
        if ($answer === 1) {
            return '<span class="badge bg-success">Yes</span>';
        } elseif ($answer === 0) {
            return '<span class="badge bg-soft-danger text-danger">NO</span>';
        } else {
            return 'No answer yet';
        }

    }
}
if (!function_exists('logToSlack')) {

    function logToSlack($msg)
    {
        
        try {
            $client = new Client();
            $response = $client->post('https://mybarq.com/common_funcs/logToBarqLogger.php', [
                'form_params' => [
                    'token' => '5RsJSdmNetPGK7VX',
                    'msg' => $msg, // Assuming $msg holds your message data
                ],
            ]);

            // Assuming you want to retrieve the response body
            $body = $response->getBody()->getContents();

            // Handle the response as needed
            return $body;
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle exceptions or errors here
            return $e->getMessage();
        }

    }
}
if (!function_exists('dayFormatSocailReport')) {

    function dayFormatSocailReport($day)
    {
        try {
                Carbon::setLocale('ar');
                $carbonDate = Carbon::createFromFormat('Y-m-d', $day);
                $formattedDate = $carbonDate->isoFormat('dddd D MMMM ');
                return $formattedDate; 
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return $day;
        }

    }
}
