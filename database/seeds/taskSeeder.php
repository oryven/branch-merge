<?php

use Illuminate\Database\Seeder;

use App\task;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(task::class, 50) -> create();
    }
}
