<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'relation',
        'family_id',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\User\Database\factories\FamilyFactory::new();
    }
}
