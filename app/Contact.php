<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = ['first_name', 'insertion', 'last_name', 'email', 'user_id'];

    protected $dates = ['birthday'];

    public function getFullNameAttribute()
    {
        return join(' ', array_filter([$this->first_name, $this->insertion, $this->last_name]));
    }
}
