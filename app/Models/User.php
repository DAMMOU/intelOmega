<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'job_role',
        'company',
        'website',
        'email',
        'workbook',
        'phone_number',
        'address',
        'city',
        'postal_code',
        'plan_type',
        'country',
        'profile_photo_path',
        'oauth_id',
        'oauth_type',
        'last_seen',
        'referral_id',
        'referred_by',
        'referral_payment_method',
        'referral_paypal',
        'referral_bank_requisites',
        'default_voiceover_language',
        'default_voiceover_voice'
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
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'available_words',
        'available_words_prepaid',
        'total_words',
        'available_images',
        'available_images_prepaid',
        'total_images',
        'group',
        'plan_id',
        'status',
        'balance',
        'google2fa_enabled',
        'google2fa_secret',
        'available_chars',
        'available_chars_prepaid',
        'available_minutes',
        'available_minutes_prepaid',
        'total_chars',
        'total_minutes'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
