<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $table = 'contact_information';
    protected $primaryKey = 'id';

      public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
