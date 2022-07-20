<?php

namespace Database\Seeders;

use App\Models\Blog_model;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog_model::create([
            'title' => 'Blog pertama',
            'slug'  => 'blog-pertama',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quisquam',
            'body'  =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel officia in quaerat. Eligendi qui corporis, quibusdam nemo vel libero incidunt ipsa ullam laborum consequatur unde quo amet exercitationem cumque, provident quod, sequi nesciunt animi sed dicta est. Non quaerat et veniam iusto corrupti ipsam assumenda, nobis commodi rem nostrum nihil aliquam fugiat eos minima amet ex quam nesciunt vel, totam consequuntur in! Similique placeat vel dolor nobis architecto! Atque assumenda iste tempora numquam error voluptatum. Saepe a culpa quisquam soluta quo fugit praesentium illum facilis quasi repellendus architecto accusamus possimus delectus expedita, officiis, aliquam reprehenderit error odio nobis commodi! Dicta explicabo consectetur inventore dolorum sint natus doloremque eum libero quos quasi rem soluta laboriosam velit laborum vitae rerum consequatur reiciendis quidem, officia dolorem repudiandae! Illum corrupti beatae vel voluptas? Culpa eligendi repellat fuga ab repudiandae quis rerum excepturi optio maxime!',
            'categori_id'=>1,
            'user_id'   =>1
        ]);

        Blog_model::create([
            'title' => 'Blog kedua',
            'slug'  => 'blog-kedua',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quisquam',
            'body'  =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel officia in quaerat. Eligendi qui corporis, quibusdam nemo vel libero incidunt ipsa ullam laborum consequatur unde quo amet exercitationem cumque, provident quod, sequi nesciunt animi sed dicta est. Non quaerat et veniam iusto corrupti ipsam assumenda, nobis commodi rem nostrum nihil aliquam fugiat eos minima amet ex quam nesciunt vel, totam consequuntur in! Similique placeat vel dolor nobis architecto! Atque assumenda iste tempora numquam error voluptatum. Saepe a culpa quisquam soluta quo fugit praesentium illum facilis quasi repellendus architecto accusamus possimus delectus expedita, officiis, aliquam reprehenderit error odio nobis commodi! Dicta explicabo consectetur inventore dolorum sint natus doloremque eum libero quos quasi rem soluta laboriosam velit laborum vitae rerum consequatur reiciendis quidem, officia dolorem repudiandae! Illum corrupti beatae vel voluptas? Culpa eligendi repellat fuga ab repudiandae quis rerum excepturi optio maxime!',
            'categori_id'=>2,
            'user_id'   =>1
        ]);

        Blog_model::create([
            'title' => 'Blog ketiga',
            'slug'  => 'blog-ketiga',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quisquam',
            'body'  =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel officia in quaerat. Eligendi qui corporis, quibusdam nemo vel libero incidunt ipsa ullam laborum consequatur unde quo amet exercitationem cumque, provident quod, sequi nesciunt animi sed dicta est. Non quaerat et veniam iusto corrupti ipsam assumenda, nobis commodi rem nostrum nihil aliquam fugiat eos minima amet ex quam nesciunt vel, totam consequuntur in! Similique placeat vel dolor nobis architecto! Atque assumenda iste tempora numquam error voluptatum. Saepe a culpa quisquam soluta quo fugit praesentium illum facilis quasi repellendus architecto accusamus possimus delectus expedita, officiis, aliquam reprehenderit error odio nobis commodi! Dicta explicabo consectetur inventore dolorum sint natus doloremque eum libero quos quasi rem soluta laboriosam velit laborum vitae rerum consequatur reiciendis quidem, officia dolorem repudiandae! Illum corrupti beatae vel voluptas? Culpa eligendi repellat fuga ab repudiandae quis rerum excepturi optio maxime!',
            'categori_id'=>3,
            'user_id'   =>1
        ]);
    }
}
