<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\CreatorInfo;
use App\Models\CreatorOption;
use App\Models\ValueOption;
use Illuminate\Support\Facades\DB;
class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
       $user=User::create([
            'id' => 1,
            'name' => 'طلال ',
            'email' => "talal@gmail.com",
            'password' => bcrypt('123456789'),
            'phone' => $faker->phoneNumber,
            'is_creator' => 1,
            'is_active' => 1,
            'email_verified_at' => date('Y-m-d H:i:s'),
            'address' => $faker->streetAddress ,
        ]);
        $user->wallets()->create(['wallet_type_id' => 1]);
        CreatorInfo::create([
            'id' => 1,
            'user_id' => $user->id,
            'country_id' => 1,
            'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => 'ذكر',
            'languages' => 'عربي',
            'describe'=>"هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها"
        ]);
        for ($i = 1; $i <= 5; $i++) {
            $values=ValueOption::where('main_option_id', $i)->pluck('id')->toArray();
            CreatorOption::create([
                'user_id' => $user->id,
                'main_option_id' => $i,
                'value_options' => $faker->randomElement($values),
            ]);
        }
        $user=User::create([
            'id' => 2,
            'name' => ' احمد',
            'email' => "ahmed@gmail.com",
            'password' => bcrypt('123456789'),
            'phone' => $faker->phoneNumber,
            'is_creator' => 1,
            'is_active' => 1,
            'email_verified_at' => date('Y-m-d H:i:s'),
            'address' => $faker->streetAddress ,
        ]);
        $user->wallets()->create(['wallet_type_id' => 1]);
        CreatorInfo::create([
            'id' => 2,
            'user_id' => $user->id,
            'country_id' => 1,
            'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => 'ذكر',
            'languages' => 'عربي',
                        'describe'=>"هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها"
        ]);
        for ($i = 1; $i <= 5; $i++) {
            $values=ValueOption::where('main_option_id', $i)->pluck('id')->toArray();
            CreatorOption::create([
                'user_id' => $user->id,
                'main_option_id' => $i,
                'value_options' => $faker->randomElement($values),
            ]);
        }
        $user=User::create([
            'id' => 3,
            'name' => ' مريم ',
            'email' => "mariam@gmail.com",
            'password' => bcrypt('123456789'),
            'phone' => $faker->phoneNumber,
            'is_creator' => 0,
            'is_active' => 1,
            'email_verified_at' => date('Y-m-d H:i:s'),
            'address' => $faker->streetAddress ,
        ]);
$user->wallets()->create(['wallet_type_id' => 2]);
        $data = [
            // 'id' => 51,
            'key' => 'ioti6etixV',
            'video_count' => 4,
            'total' => 596.00,
            'video_price' => 74.50,
            'paid' => 1,
            'product_name' => 'رخصة برنامج Ford IDS & FDRS لمدة سنة واحدة',
            'product_link' => 'https://techroute66.com/product/ford-ids-software/',
            'product_instructions' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة...',
            'product_description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة...',
            'gender' => 'ذكر',
            'user_id' => 3,
            'video_option_type_id' => 1,
            'video_option_duration_id' => 2,
            'video_option_aspect_id' => 1,
            'country_id' => 1,
            'status' => 5,
            'created_at' => '2024-07-18 06:26:28',
            'updated_at' => '2024-07-18 06:28:15'
        ];

        DB::table('orders')->insert($data);
    }
}
