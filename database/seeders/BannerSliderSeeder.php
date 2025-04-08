<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSliderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('banner_sliders')->insert([
            [
                'title' => 'Get up to 50% off Today Only!',
                'subtitle' => 'Woman Fashion',
                'image' => 'images/banner1.jpg',
                'link' => 'shop-left-sidebar.html',
                'position' => 'left',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '50% off in all products',
                'subtitle' => 'Man Fashion',
                'image' => 'images/banner2.jpg',
                'link' => 'shop-left-sidebar.html',
                'position' => 'right',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Taking your Viewing Experience to Next Level',
                'subtitle' => 'Summer Sale',
                'image' => 'images/banner3.jpg',
                'link' => 'shop-left-sidebar.html',
                'position' => 'right',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
