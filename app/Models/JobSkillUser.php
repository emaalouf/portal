<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkillUser extends Model
{
    protected $table = 'job_skill_user';
    
    protected $fillable = ['job_skill_id', 'user_skill_id'];
    
    public function jobSkill()
    {
        return $this->belongsTo(JobSkill::class);
    }
    
    public function skills()
    {
        return $this->belongsTo(Skills::class);
    }
}
