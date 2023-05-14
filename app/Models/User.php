<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\ContactInformation;
use App\Models\PersonalInformation;
use App\Models\Skills;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne('App\Models\Company');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function applied()
    {
        return $this->hasMany('App\Models\JobApplication');
    }
    
    public function contactInformation()
    {
        return $this->hasOne('App\Models\ContactInformation');
    }

    public function personalInformation()
    {
        return $this->hasOne('App\Models\PersonalInformation');
    }

    public function skills()
    {
        return $this->hasMany('App\Models\Skills');
    }

        public function Jobskills()
    {
        return $this->belongsToMany(JobSkill::class, 'user_skills', 'user_id', 'skill_id')
                    ->withPivot('skill_percentage');
    }


}
