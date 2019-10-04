<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
     protected $fillable = ['first_name', 'last_name', 'specialist', 'contact', 'degree', 'from', 'description'];
}
