<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AchieveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achieves')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Ahrello',
            'slug' => Str::slug('ahrello'),
            'description' => 'Plateforme de mise en relation en porteurs de projets et freelances.',
            'image' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
            'git_url' => 'https://github.com/Cheick-ahmed/api.ahrello.com',
            'link' => 'ahrello.com',
            'notes' => 'Backoffice: https://github.com/Cheick-ahmed/bo.ahrello.com - Client: https://github.com/Cheick-ahmed/ahrello.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('achieves')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Selogger224',
            'slug' => Str::slug('se-loger-224'),
            'description' => 'Application web de mise en relations entre particuliers pour l\'achat, la vente et la location de bien immobilier.',
            'image' => 'https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
            'git_url' => 'https://github.com/abdoul-rb/seloger224',
            'link' => 'seloger224.com',
            'notes' => 'With Taran.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
