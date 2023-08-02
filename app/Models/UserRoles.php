<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function Users()
    {
        return $this->hasOne(Users::class);
    }

}
