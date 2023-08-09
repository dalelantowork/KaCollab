<?php

namespace Modules\Office\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Form\Entities\Form;
use Kyslik\ColumnSortable\Sortable;

class Office extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'name',
        'default',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Office\Database\factories\OfficeFactory::new();
    }

    public function forms()
    {
        return $this->hasMany(Form::class);
    }
}
