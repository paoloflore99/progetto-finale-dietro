<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagesData = [
            [
                'name' => 'Image 1',
                'apartment_id' => 1,
                'description' => 'Lorem ipsum',
                'url' => '\public\assets\img\IMG_20230909_111036.jpg',
                'front_img' => true,
            ],
            [
                'name' => 'Image 2',
                'apartment_id' => 2,
                'description' => 'Lorem ipsum',
                'url' => '\public\assets\img\IMG_20230909_115742.jpg',
                'front_img' => true,
            ],
            [
                'name' => 'Image 3',
                'apartment_id' => 3,
                'description' => 'Lorem ipsum',
                'url' => '\public\assets\img\IMG_20230909_145053.jpg',
                'front_img' => true,
            ],

        ];

        foreach ($imagesData as $imageData) {
            $newImage = new Image();
            $newImage->name = $imageData['name'];
            $newImage->apartment_id = $imageData['apartment_id'];
            $newImage->description = $imageData['description'];
            $newImage->url = $imageData['url'];
            $newImage->front_img = $imageData['front_img'];
            $newImage->save();
        }
    }
}
