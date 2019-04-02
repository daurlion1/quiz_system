<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'title'  => 'Learning System',
                'phone'  => '87776665544',
                'site_name' => 'ELT',
                'copyright' => 'Copyright is a legal right, existing in many countries, that grants the creator of an original work ',
                'address' => 'Manasa34a',
                'email' => 'iitu@mail.ru',
            ],
        ]);
    }
}
