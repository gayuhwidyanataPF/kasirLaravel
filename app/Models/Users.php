<?php

namespace App\Models;

use App\Models\UserRules;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Users extends Authenticatable
{
    use HasFactory;    

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    public function userRule(): BelongsTo
    {
        return $this->belongsTo(UserRules::class, 'id_rule');
    }
}