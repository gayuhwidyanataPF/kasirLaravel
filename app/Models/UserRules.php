<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserRules extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'id_rule');
    }

}
