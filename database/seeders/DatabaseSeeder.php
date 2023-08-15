<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Message::factory(10)->create();

        $posts=\App\Models\Post::all();
        foreach ($posts as $post){
            switch ($post->service) {
                case 'serigraphie':
                    $img_path ='asset/serigraphie/SmartSelect_20210414-084835_WhatsAppBusiness.jpg';
                    break;
                case 'infographie':
                    $img_path ='asset/serigraphie/SmartSelect_20210414-084835_WhatsAppBusiness.jpg';
                    break;
                case 'imprimerie':
                    $img_path ='asset/impressions/8296352e7c9e49c986aa693c36f0c45e.jpg';
                    break;
                case 'conception de site web':
                    $img_path ='asset/serigraphie/SmartSelect_20210414-084835_WhatsAppBusiness.jpg';
                    break;


                default:
                    $img_path ='asset/developpement_web/laptop-2017978.svg';
                    break;
            }
            $post->update(['img_path'=>$img_path]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
