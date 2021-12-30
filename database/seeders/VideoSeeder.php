<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    
    public function run()
    {
        Video::factory()->count(10)->create();
        $videos = Video::all();


       $videos->each(function ($video) {
           $video->image()->save(Image::factory()->make(['url' => "https://picsum.photos/id/$video->id/150/150"]));
       });

       $videos->each(function ($video) {

        $tags = rand(1,5);
        for($i=1 ; $i<=$tags ; $i++)
        {
            $video->tags()->attach($i);
        }
       });

       $videos->each(function ($video) {
           
           $number_comments = rand(1,2);
           
           for($i=0 ; $i<$number_comments ; $i++)
           {
               $video -> comments()->save(Comment::factory()->make());
           }
           
       });
    }
}
