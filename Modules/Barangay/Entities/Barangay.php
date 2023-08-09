<?php

namespace Modules\Barangay\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Barangay extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'region_name',
        'province_name',
        'municipality_name',
        'barangay_name',
    ];

    protected $sortable = [
        'id',
        'region_name',
        'province_name',
        'municipality_name',
        'barangay_name',
    ];
}
