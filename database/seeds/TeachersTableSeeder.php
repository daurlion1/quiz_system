<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::insert([
            [
                'name'           => 'Teacher',
                'user_id'          => '1',
                'department_id'       => '1',
            ],
        ]);
    }
}
