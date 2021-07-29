<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Settings for the site.
     *
     * @return array
     */
    protected $settings = [
        'site_title'    => 'Laraecom',
        'site_tagline'  => 'ecommerce website',
        'site_email'    => 'wahid@gmail.com',
        'site_currency_code' => 'USD',
        'site_currency_symbol' => '$',
        'site_logo' => null,
        'site_favicon' => null,
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->settings as $key => $value) {
            Setting::create([
                'key' => $key,
                'value' => $value
            ]);
        }
    }
}
