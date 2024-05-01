<?php

namespace Database\Seeders;
use App\models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            'Commerce',
            'Commerce itinérant',
            'Artisan',
            'Entreprise',
            'Profession libérale',
            'Agriculture/Élevage',
            'Professionnel de santé',
            'Service à la personne',
            'Associations',
            'Auto-entrepreneur',
            'Autres',
        ]);

        $categories->each(fn($category) => Category::create([
            'worker' => $category,
            'slug' => Str::slug($category),
        ]));
    }
}
