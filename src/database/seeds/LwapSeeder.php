<?php

use Illuminate\Database\Seeder;
use Truemedia\Lwap\App\Post;

class LwapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $initialContent = [
            'Hello world' => 'My first post'
        ];

        foreach ($initialContent as $title => $content) {
            Post::create( compact('title', 'content') );
        }
    }
}
