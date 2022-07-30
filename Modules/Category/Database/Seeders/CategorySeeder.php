<?php

namespace Modules\Category\Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $data = [
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
        Category::insert($data);
    }
}
