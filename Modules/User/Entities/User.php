<?php

namespace Modules\User\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Office\Entities\Office;
use Modules\User\Entities\Family;
use Modules\Form\Entities\Application;
use Modules\Hris\Entities\DailyTimeRecord;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Storage;
use Database\Factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Sortable, HasRoles;
    /**
     * @return UserFactory
     */
    protected static function newFactory(): UserFactory
    {
        return new UserFactory();
    }

    /**
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'username',
        'email',
        'signature',
        'password',
        'street',
        'barangay',
        'province',
        'country',
        'zip_code',
        'nationality',
        'civil_status',
        'birthdate',
        'birthplace',
        'gender',
        'spouse_name',
        'occupation',
        'contact_no',
        'photo',
        'valid_id',
        'emergency_name',
        'emergency_address',
        'emergency_contact',
        'tin',
        'password_reset_code',
        'employee_status',
        'employee_id',
        'office_id',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var int
     */
    protected $perPage = 20;

    /**
     * @var array|string[]
     */
    protected array $sortable = [
        'id',
        'first_name',
        'last_name',
        'middle_name',
        'username',
        'email',
    ];

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function offices()
    {
        return $this->belongsToMany(Office::class, 'user_offices');
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function dtrs()
    {
        return $this->hasMany(DailyTimeRecord::class);
    }

    public function getSignatureAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return Storage::url('upload/images/' . $value);
    }

    public function getPhotoAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return Storage::url('upload/images/' . $value);
    }

    public function getValidIdAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return Storage::url('upload/images/' . $value);
    }

    public function getOfficeDatasAttribute($value)
    {
        return $this->offices;
    }

    public function getOfficeAssocAttribute()
    {
        return @$this->office->name ?: config('office.name');
    }
}
