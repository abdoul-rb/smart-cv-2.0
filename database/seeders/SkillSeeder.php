<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => '(S)CSS',
            'slug' => Str::slug('(S)CSS'),
            'category' => 'Frontend',
            'notes' => 'Stylisez vos pages HTML',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Javascript',
            'slug' => Str::slug('Javascript'),
            'category' => 'Frontend',
            'notes' => 'JS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Nuxt.JS',
            'slug' => Str::slug('Nuxt.JS'),
            'category' => 'Frontend',
            'notes' => 'Framework JS basé sur Vue et Node',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Vue.JS',
            'slug' => Str::slug('Vue.JS'),
            'category' => 'Frontend',
            'notes' => 'Framework JS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Tailwindcss',
            'slug' => Str::slug('Tailwindcss'),
            'category' => 'Frontend',
            'notes' => 'Is a highly customizable, low-level CSS framework that gives you all of the building blocks you need to build bespoke designs',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Bootstrap',
            'slug' => Str::slug('Bootstrap'),
            'category' => 'Frontend',
            'notes' => 'Framework CSS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'PHP',
            'slug' => Str::slug('PHP'),
            'category' => 'Backend',
            'notes' => 'PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Ruby On Rails',
            'slug' => Str::slug('Ruby On Rails'),
            'category' => 'Backend',
            'notes' => 'RoR framework web libre écrit en Ruby',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Github',
            'slug' => Str::slug('Github'),
            'category' => 'Devops',
            'notes' => 'Versionning',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Gitlab',
            'slug' => Str::slug('Gitlab'),
            'category' => 'Devops',
            'notes' => 'Versionning',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Docker',
            'slug' => Str::slug('Docker'),
            'category' => 'Devops',
            'notes' => 'Plate-forme permettant de concevoir, tester et déployer rapidement des applications à l\'aide de conteneurs',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Digital Ocean',
            'slug' => Str::slug('Digital Ocean'),
            'category' => 'Devops',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Laravel Forge',
            'slug' => Str::slug('Laravel Forge'),
            'category' => 'Devops',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Visual Studio Code',
            'slug' => Str::slug('Visual Studio Code'),
            'category' => 'Tools',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'PHPStorm',
            'slug' => Str::slug('PHPStorm'),
            'category' => 'Tools',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Figma',
            'slug' => Str::slug('Figma'),
            'category' => 'Tools',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Trello',
            'slug' => Str::slug('Trello'),
            'category' => 'Tools',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('skills')->insert([
            'uuid' => Str::uuid(),
            'name' => 'Phtoshop',
            'slug' => Str::slug('Phtoshop'),
            'category' => 'Tools',
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
