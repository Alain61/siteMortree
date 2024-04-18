<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $tags = collect(['Semaine', 'Samedi', 'Dimanche matin', 'Voir Jours et horaires']);
       $tags->each(fn ($tag) => Tag::create([
           'open'=> $tag,
           'slug' => Str::slug($tag),

       ]));
    }
}
