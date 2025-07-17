<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ CORRECT

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
         DB::table('projects')->insert([
        [
            'title' => 'E-commerce Chaussures',
            'description' => 'Site de vente en ligne moderne.',
         'image' => 'images/A1.jpg',
            'technologies' => json_encode(['React', 'Laravel']),
            'category' => 'E-commerce',
            'live_url' => 'https://mon-site-ecommerce-puce.vercel.app/',
            'github_url' => 'https://github.com/SteveCamaroonaiare/Mon-site-ecommerce/tree/master/src',
            'created_at' => now(),
        ],
        [
            'title' => 'Salon soin de visage',
            'description' => 'site de presentation des services dun salon de beauté.',
            'image' => 'images/A2.jpg',
            'technologies' => json_encode(['javascript', 'html', 'css']),
            'category' => 'Site vitrine',
            'live_url' => 'https://stagesteve.vercel.app/',
            'github_url' => 'https://github.com/steve/portfolio',
            'created_at' => now(),
        ]
    ]);
    }
}
