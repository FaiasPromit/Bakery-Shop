<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon; 

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        
        Category::insert([
            ['name' => 'pastries' , 'slug' => 'pastries', 'created_at' => $now, 'updated_at'=>$now],
            ['name' => 'breads' , 'slug' => 'breads', 'created_at' => $now, 'updated_at'=>$now],
            ['name' => 'sweets' , 'slug' => 'sweets', 'created_at' => $now, 'updated_at'=>$now],
            ['name' => 'puffs' , 'slug' => 'puffs', 'created_at' => $now, 'updated_at'=>$now],
            ['name' => 'halwa' , 'slug' => 'halwa', 'created_at' => $now, 'updated_at'=>$now],

        ]);
        // Category::create([
        //         'name' => 'pastries',
        //         'slug' => 'pastries',
        //         'created_at' => $now,
        //         'updated_at'=>$now
        //     ]);
        // Category::create([
        //         'name' => 'breads',
        //         'slug' => 'breads',
        //         'created_at' => $now,
        //         'updated_at'=>$now
        //     ]);
        // Category::create([
        //         'name' => 'sweets',
        //         'slug' => 'sweets',
        //         'created_at' => $now,
        //         'updated_at'=>$now
        //     ]);
        // Category::create([
        //         'name' => 'puffs',
        //         'slug' => 'puffs',
        //         'created_at' => $now,
        //         'updated_at'=>$now
        //     ]);
        

    }
}
