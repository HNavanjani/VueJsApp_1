<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AgeGroupCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('age_group_category')->insert(
            [
                [
                    'category_id'=> 3,
                    'age_group_id'=>2,
                ],
                [
                    'category_id'=> 1,
                    'age_group_id'=>1,
                ],
                [
                    'category_id'=> 1,
                    'age_group_id'=>3,
                ],
                [
                    'category_id'=> 1,
                    'age_group_id'=>4,
                ],
                [
                    'category_id'=> 2,
                    'age_group_id'=>4,
                ],
                [
                    'category_id'=> 4,
                    'age_group_id'=>4,
                ],
            ]
        );
    }
    }

