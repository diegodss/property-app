<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert(['name' => "The Victoria", 'price' => "374662", 'bedroom' => "4", 'bathroom' => "2", 'storey' => "2", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Xavier", 'price' => "513268", 'bedroom' => "4", 'bathroom' => "2", 'storey' => "1", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Como", 'price' => "454990", 'bedroom' => "4", 'bathroom' => "3", 'storey' => "2", 'garage' => "3", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Aspen", 'price' => "384356", 'bedroom' => "4", 'bathroom' => "2", 'storey' => "2", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Lucretia", 'price' => "572002", 'bedroom' => "4", 'bathroom' => "3", 'storey' => "2", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Toorak", 'price' => "521951", 'bedroom' => "5", 'bathroom' => "2", 'storey' => "1", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Skyscape", 'price' => "263604", 'bedroom' => "3", 'bathroom' => "2", 'storey' => "2", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Clifton", 'price' => "386103", 'bedroom' => "3", 'bathroom' => "2", 'storey' => "1", 'garage' => "1", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
        DB::table('property')->insert(['name' => "The Geneva", 'price' => "390600", 'bedroom' => "4", 'bathroom' => "3", 'storey' => "2", 'garage' => "2", 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()]);
    }
}


