<?php

namespace Modules\Form\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Form\Entities\Form;
use Modules\User\Entities\User;
use Modules\Form\Entities\Payment;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'user_id',
        'current_status',
        'json',
    ];
    
    protected $casts = [
        'json' => 'array',
    ];

    protected static function newFactory()
    {
        return \Modules\Form\Database\factories\ResponseFactory::new();
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function scopeOfficeApplicationQuery($query)
    {
        return $query->whereHas('form', function ($query) {
            $query->whereHas('office', function ($query) {
                $query->where('name',  auth()->user()->office_assoc);
            });
        });
    }

    public function getTotalEarningsTodayAttribute()
    {
        $totalEarnings = 0;
        foreach (
            $this
            ->where('created_at', '>=', date('Y-m-d').' 00:00:00')
            ->get() as $application
        ) {
            $payments = $application->payments;
            foreach ($payments as $payment) {
                $totalEarnings += $payment->amount_paid;
            }
        }
        return $totalEarnings;
    }

    public function getDaySinceAppliedAttribute()
    {
        $dateCreated = Carbon::parse($this->created_at);
        $currentDate = Carbon::now();
        
        return $dateCreated->diffInDays($currentDate);
    }
}
