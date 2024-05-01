<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name',
        'email',           
        'user_id', 
        'subject',
        'content',
    ];
     

    // Relation avec l'utilisateur si les commentaires sont associés à des utilisateurs
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Autres relations si nécessaire

    // Logique pour manipuler les commentaires, par exemple, l'envoi de notifications, etc.
}
