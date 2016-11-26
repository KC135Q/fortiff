<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 50; $i++) {
            DB::table('messages')->insert([
                'name' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'message' => str_random(25) . ' and Ryan is faster.',
            ]);
        }
    }
}
