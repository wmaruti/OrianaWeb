<?php

use Illuminate\Database\Seeder;
use App\Model\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            ['key' => 'WEBSITE_TITLE', 'value' => 'Oriana' ],
            ['key' => 'WEBSITE_LOGO', 'value' => 'group.png'],
            ['key' => 'WEBSITE_LOGO_WHITE', 'value' => 'Oriana_Wht@4x.png'],
            ['key' => 'WEBSITE_FAVICON', 'value' => 'favicon.png'],
            ['key' => 'SLIDER_1', 'value' => 'slider_1.jpg' ],
            ['key' => 'SLIDER_2', 'value' => 'slider_2.jpg' ],
            ['key' => 'SLIDER_3', 'value' => 'slider_3.jpg' ],
            ['key' => 'TEXT_TITLE', 'value' => 'Partner.'],
            ['key' => 'TEXT_TITLE2', 'value' => 'Transformation.'],
            ['key' => 'TEXT_TITLE3', 'value' => 'Strategic'],
            ['key' => 'TEXT_DESCRIPTION_1', 'value' => '<div align="left"><span style="left: 100px; top: 278.874px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.22941);" dir="ltr">We assist from the strategic eye level to</span><br><span style="left: 100px; top: 278.874px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.22941);" dir="ltr"> </span><span style="left: 100px; top: 300.207px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.22027);" dir="ltr">transformate business model idea to generate </span><span style="left: 100px; top: 321.54px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.26733);" dir="ltr"></span><br><span style="left: 100px; top: 321.54px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.26733);" dir="ltr">better result and profit through digital system.</span></div>'],
            ['key' => 'TEXT_DESCRIPTION_2', 'value' => '<div align="left"><span style="left: 100px; top: 278.874px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.22941);" dir="ltr">We help you to counter uncertainty in the rapid<br> changing world with the next level system</span><span style="left: 100px; top: 321.54px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.26733);" dir="ltr"></span></div>'],
            ['key' => 'TEXT_DESCRIPTION_3', 'value' => '<div align="left"><span style="left: 100px; top: 278.874px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.22941);" dir="ltr">We collaborate together equally as a partner</span><span style="left: 100px; top: 321.54px; font-size: 14.6667px; font-family: sans-serif; transform: scaleX(1.26733);" dir="ltr"></span></div>'],
            ['key' => 'IMAGE_LOGIN', 'value' => 'header-oval-copy-7-oval-copy-10-mask.png'],
            ['key' => 'IMAGE_LOGIN_CITY', 'value' => 'Jakarta Selatan'],
            ['key' => 'IMAGE_LOGIN_COUNTRY', 'value' => 'Indonesia']
        ]);

    }
}
