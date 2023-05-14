<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    protected $table = 'job_skill';
    protected $fillable = ['name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills', 'skill_id', 'user_id')
                    ->withPivot('skill_percentage');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_job_skill')->withPivot('skill_percentage');
    }
}