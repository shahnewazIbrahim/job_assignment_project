<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SingleBannerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('single_banners')->insert([
            'sub_heading' => 'New season trends!',
            'heading' => 'Best Summer Collection',
            'description' => 'Sale Get up to 50% Off',
            'button_text' => 'Shop Now',
            'button_link' => 'shop-left-sidebar.html',
            'image' => 'tranding_img.png',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
