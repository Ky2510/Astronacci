<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrl = 'https://media.istockphoto.com/id/1280129533/photo/young-woman-at-home-is-using-laptop-computer-for-scrolling-and-reading-news-about.webp?b=1&s=612x612&w=0&k=20&c=hpv9I0chWuHKPbA5hQoWdHwwYfk7h9nUMGYCNBUKSV4=';
    
        DB::table('articles')->insert([
            [
                'title' => 'Artikel Pertama',
                'content' => 'Konten untuk artikel pertama.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag1, tag2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kedua',
                'content' => 'Konten untuk artikel kedua.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'draft',
                'tags' => 'tag3, tag4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Ketiga',
                'content' => 'Konten untuk artikel ketiga.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag5, tag6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keempat',
                'content' => 'Konten untuk artikel keempat.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'archived',
                'tags' => 'tag7, tag8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kelima',
                'content' => 'Konten untuk artikel kelima.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'draft',
                'tags' => 'tag9, tag10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keenam',
                'content' => 'Konten untuk artikel keenam.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag11, tag12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Ketujuh',
                'content' => 'Konten untuk artikel ketujuh.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag13, tag14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kedelapan',
                'content' => 'Konten untuk artikel kedelapan.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'draft',
                'tags' => 'tag15, tag16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kesembilan',
                'content' => 'Konten untuk artikel kesembilan.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'archived',
                'tags' => 'tag17, tag18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kesepuluh',
                'content' => 'Konten untuk artikel kesepuluh.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag19, tag20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kesebelas',
                'content' => 'Konten untuk artikel kesebelas.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'draft',
                'tags' => 'tag21, tag22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keduabelas',
                'content' => 'Konten untuk artikel keduabelas.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag23, tag24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Ketigabelas',
                'content' => 'Konten untuk artikel ketigabelas.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'archived',
                'tags' => 'tag25, tag26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keempatbelas',
                'content' => 'Konten untuk artikel keempatbelas.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'draft',
                'tags' => 'tag27, tag28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kelimabelas',
                'content' => 'Konten untuk artikel kelimabelas.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keenambelas',
                'content' => 'Konten untuk artikel keenambelas.',
                'author_id' => 1,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Ketujuhbelas',
                'content' => 'Konten untuk artikel ketujuhbelas.',
                'author_id' => 2,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kedelapanbelas',
                'content' => 'Konten untuk artikel kedelapanbelas.',
                'author_id' => 3,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Kesembilanbelas',
                'content' => 'Konten untuk artikel kesembilanbelas.',
                'author_id' => 4,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Artikel Keduapuluh',
                'content' => 'Konten untuk artikel keduapuluh.',
                'author_id' => 5,
                'image_url' => $imageUrl,
                'status' => 'published',
                'tags' => 'tag29, tag30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
