<?php

namespace Modules\Form\Entities;

use App\Models\Flowchart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Office\Entities\Office;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'name',
        'file',
        'json',
        'active',
        'fee',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Form\Database\factories\FormFactory::new();
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function flowchart()
    {
        return $this->belongsTo(Flowchart::class);
    }
}
