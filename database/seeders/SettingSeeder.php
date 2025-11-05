<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1], [
                'address' => 'egypt/giza',
                'phone' => '+201066436924',
                'email' => 'ahmed@consult.com.eg',
                'facebook' => 'https://www.facebook.com/consult.egypt',
                'twitter' => 'https://twitter.com/consult_egypt',
                'instagram' => 'https://www.instagram.com/consult_egypt/',
                'youtube' => 'https://www.youtube.com/channel/UC79-646_8999-1_1_1',
                'linkedin' => 'https://www.linkedin.com/company/consult-company/',
            ]);
    }
}
