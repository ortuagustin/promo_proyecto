<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

/**
 * A Model that represents an Appointment
 */
class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'date',
    ];

    /**
     * The attributes that should be parsed as Carbon Dates
     *
     * @var array
     */
    protected $dates = [
        'date', 'created_at', 'updated_at',
    ];

    /**
     * Returns the time portion of the Appointment
     *
     * @return string
     */
    public function getTimeAttribute()
    {
        return $this->date->toTimeString();
    }

    /**
     * Get the Patient record associated with the Appointment.
     *
     * @return Patient
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Returns an array with the times when appointment are allowed
     *
     * @return array
     */
    public static function allowed_times()
    {
        $times = [];
        for ($i = 8; $i <= 20; $i++) {
            $times[] = sprintf("%02d:00:00", $i);
            $times[] = sprintf("%02d:30:00", $i);
        }

        array_pop($times); // 20:30 is not allowed
        return $times;
    }

    /**
     * Returns true if the given time is allowed
     * @param Carbon $time
     *
     * @return bool
     */
    public static function is_allowed_time(Carbon $time)
    {
        return in_array($time->toTimeString(), static::allowed_times());
    }
}
