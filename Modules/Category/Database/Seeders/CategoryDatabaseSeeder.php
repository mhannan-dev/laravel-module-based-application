<?php

namespace Modules\Category\Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categoryRecord = [
            [

                'title' => 'Commercial Bank',
                'meta_title' => 'meta_title',
                'category_type' => 'bank',
                'slug' => 'commercial-bank',
                'status' => 1

            ],
            [

                'title' => 'Private Bank',
                'meta_title' => 'meta_title',
                'category_type' => 'bank',
                'slug' => 'commercial-bank',
                'status' => 1
            ]
        ];
        Category::insert($categoryRecord);
    }
}
