<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cat = new Category();
        $cat->name = "caleçon";
        $cat->is_online = 1;
        $cat->save();

        $cat2 = new Category();
        $cat2->name = "t-shirt";
        $cat2->is_online = 1;
        $cat2->save();

        $cat3 = new Category();
        $cat3->name = "chaussette";
        $cat3->is_online = 1;
        $cat3->save();
    }
}
