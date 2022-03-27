<?php

namespace Database\Seeders;

use App\Models\Post;
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
        // DB::table('posts')->insert([
        //     'title' => 'About Us',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quos inventore, possimus laboriosam illum doloribus ipsum quam pariatur mollitia. Enim provident iste molestias quis nostrum, dolorem laboriosam atque blanditiis eum iure reiciendis minus neque! Quae explicabo impedit nemo quidem dolor debitis reiciendis quaerat tempora voluptas, dolorum quis, sed, voluptate eum itaque consequuntur fuga dolore nulla id officia odit porro eius. Asperiores veritatis omnis repudiandae impedit, praesentium consequuntur quaerat, possimus quod veniam doloribus officia natus quibusdam numquam accusamus at laudantium magnam nihil corrupti, distinctio incidunt eveniet dolorum? Dolores voluptatem error aspernatur, eos aliquid aperiam dolorem accusamus enim molestias iusto fuga distinctio.'
        // ]);

        Post::create([
            'title' => 'About Us',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quos inventore, possimus laboriosam illum doloribus ipsum quam pariatur mollitia. Enim provident iste molestias quis nostrum, dolorem laboriosam atque blanditiis eum iure reiciendis minus neque! Quae explicabo impedit nemo quidem dolor debitis reiciendis quaerat tempora voluptas, dolorum quis, sed, voluptate eum itaque consequuntur fuga dolore nulla id officia odit porro eius. Asperiores veritatis omnis repudiandae impedit, praesentium consequuntur quaerat, possimus quod veniam doloribus officia natus quibusdam numquam accusamus at laudantium magnam nihil corrupti, distinctio incidunt eveniet dolorum? Dolores voluptatem error aspernatur, eos aliquid aperiam dolorem accusamus enim molestias iusto fuga distinctio.'
        ]);
    }
}
