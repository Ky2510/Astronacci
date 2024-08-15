<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'title' => 'Flowers (Cover)',
                'url' => '2nJNrKMR8Xc',
                'author_id' => rand(1, 5), 
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Kill Bill (Cover)',
                'url' => 'yJtpTO1m5lE',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Calm Down (Cover)',
                'url' => 'mOq7AjHQ5gM',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Creepin\' (Cover)',
                'url' => 'M0R9V_If9oA',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'As It Was (Cover)',
                'url' => '1U_lIEQeK5g',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Last Last (Cover)',
                'url' => '2ZbGSg6tv8A',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Unholy (Cover)',
                'url' => 'pV72UCkBbP0',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'About Damn Time (Cover)',
                'url' => '4HWva2lBOkY',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Vampire (Cover)',
                'url' => 'YtZAzFUbK00',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Escapism (Cover)',
                'url' => 'Fn9n6Ko66gM',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Rich Flex (Cover)',
                'url' => 'YNLg_WZzy0Q',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Anti-Hero (Cover)',
                'url' => 'XeHZ5pZcFhU',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Seven (Cover)',
                'url' => 'mH99YJeTk1M',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Little Lies (Cover)',
                'url' => 't4l9_VZluy8',
                'author_id' => rand(1, 5),
                'status' => $this->getRandomStatus(),
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
            [
                'title' => 'Goodbye (Cover)',
                'url' => 'B9l-Vyxd4jE',
                'author_id' => rand(1, 5),
                'status' => 'published',
            ],
        ];

        foreach ($videos as $video) {
            DB::table('videos')->insert([
                'title' => $video['title'],
                'url' => $video['url'],
                'author_id' => $video['author_id'],
                'status' => $video['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function getRandomStatus()
    {
        $statuses = ['published', 'draft', 'archived'];
        return $statuses[array_rand($statuses)];
    }
}
