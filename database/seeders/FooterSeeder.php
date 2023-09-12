<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $footer = Footer::create([
            'logo' => null,
            'description' => null,
            'whatsapp' => null,
            'instagram' => null,
            'twitter' => null
        ]);
    }
}
