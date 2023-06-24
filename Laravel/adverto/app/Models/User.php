<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'is_admin',
        'phone_number',
        'provider',
        'provider_id',
        'provider_token'
    ];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function advertisements()
{
    return $this->hasMany(Advertisement::class);
}


    public function getPhoneNumberAttribute($value)
    {
        if ($value) {
            // Formatuj numer telefonu
            $formattedPhoneNumber = preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1-$2-$3', $value);
            return $formattedPhoneNumber;
        }

        return null;
    }

    /**
     * Set the phone number attribute.
     *
     * @param  string|null  $value
     * @return void
     */
    public function setPhoneNumberAttribute($value)
    {
        if ($value) {
            $phoneNumber = preg_replace('/[^0-9]/', '', $value);
            $formattedPhoneNumber = preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1-$2-$3', $phoneNumber);
            $this->attributes['phone_number'] = $formattedPhoneNumber;
        } else {
            $this->attributes['phone_number'] = null;
        }
    }
protected static function boot()
{
    parent::boot();

    self::saving(function ($model) {
        $model->phone_number = preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1-$2-$3', $model->phone_number);
    });

    static::deleting(function ($user) {
        $user->advertisements()->each(function ($advertisement) {
            $advertisement->images()->delete();
        });
        $user->advertisements()->delete();
    });
}
}
