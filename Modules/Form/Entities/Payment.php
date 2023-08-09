<?php

namespace Modules\Form\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'user_id',
        'amount_paid',
        'payment_method',
    ];

    protected static function newFactory()
    {
        return \Modules\Form\Database\factories\PaymentFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
