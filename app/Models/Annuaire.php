<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Annuaire extends Model
{
    use HasFactory;

    protected $with = [
        'category',
        'tags',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilters(Builder $query, array $filters): Builder
    {
        if(isset($filters['search'])){

            $query->where(function($query) use ($filters){
                
                $query->where('name', 'LIKE', '%'. $filters['search'] . '%')
                    ->orWhere('content', 'LIKE', '%' . $filters['search'] . '%');
            
            }); 
        }

        if(isset($filters['category'])) {
            $query->where('category_id', $filters['category']->id ?? $filters['category']);
        }

        if(isset($filters['tag'])) {
            $query->whereRelation('tags', 'tags.id', $filters['tag']->id ?? $filters['tag']);
        }

        return $query;
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
