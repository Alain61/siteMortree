<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Annuaire;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnuaireSeeder extends Seeder
{
    

    public function run(): void
    {
        $categories = Category::all();
        $tags = Tag::all();

        Annuaire::factory(40)
            ->sequence(fn ()=>[
                'dirigeant'=>fake()->name,
                'category_id' => $categories->random(),
            ])
        ->create()
        ->each(fn ($annuaire) =>$annuaire->tags()->attach($tags->random(rand(1, 3))));
    }
}
