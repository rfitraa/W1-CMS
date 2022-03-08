<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'LAMB TIKKA SPECIAL',
            'description' => 'Tender pieces of lamb mixed with our own spices and gently cooked in clay oven.'
            ]);
    }
}
