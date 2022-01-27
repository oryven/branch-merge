<?php

use Illuminate\Database\Seeder;

use App\employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(employee::class, 50) -> create();
    }
}
