<?php

namespace Modules\Hris\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class DailyTimeRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_id',
        'time_in',
        'time_out',
        'break_in',
        'break_out',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Hris\Database\factories\DailyTimeRecordFactory::new();
    }

    public function getTimeDiffAttribute()
    {
        $timeIn = $this->time_in;

        if (empty($timeIn)) {
            return null;
        }

        $start  = new Carbon($timeIn);
        $end    = new Carbon(date('Y-m-d H:i:s'));
        return $start->diff($end)->format('%H:%I:%S');
    }

    public function getDurationAttribute()
    {
        $timeIn = $this->time_in;
        $timeOut = $this->time_out;

        if (empty($timeIn)) {
            return null;
        }

        if (empty($timeOut)) {
            return null;
        }

        $start  = new Carbon($timeIn);
        $end    = new Carbon($timeOut);
        $days  = (int) $start->diff($end)->format('%D');
        $hours  = (int) $start->diff($end)->format('%H');
        $daysWithHours = $days ? ($days * 24) + $hours : $hours;
        return $daysWithHours.':'.$start->diff($end)->format('%I:%S');
    }

    public function getTimeDiffSecondAttribute()
    {
        $timeIn = $this->time_in;

        if (empty($timeIn)) {
            return null;
        }

        $start  = new Carbon($timeIn);
        $end    = new Carbon(date('Y-m-d H:i:s'));
        return $start->diff($end)->format('%S');
    }

    public function getTimeDiffMinuteAttribute()
    {
        $timeIn = $this->time_in;

        if (empty($timeIn)) {
            return null;
        }

        $start  = new Carbon($timeIn);
        $end    = new Carbon(date('Y-m-d H:i:s'));
        return $start->diff($end)->format('%I');
    }

    public function getTimeDiffHourAttribute()
    {
        $timeIn = $this->time_in;

        if (empty($timeIn)) {
            return null;
        }

        $start  = new Carbon($timeIn);
        $end    = new Carbon(date('Y-m-d H:i:s'));

        $days  = (int) $start->diff($end)->format('%D');
        $hours  = (int) $start->diff($end)->format('%H');
        $daysWithHours = $days ? ($days * 24) + $hours : $hours;
        
        return $daysWithHours;
    }

    public function getTimeInAttribute($timeIn)
    {

        if (empty($timeIn)) {
            return null;
        }

        return (new Carbon($timeIn))
                    ->setTimezone('Asia/Manila');
    }

    public function getTimeOutAttribute($timeOut)
    {

        if (empty($timeOut)) {
            return null;
        }

        return (new Carbon($timeOut))
                    ->setTimezone('Asia/Manila');
    }
}
