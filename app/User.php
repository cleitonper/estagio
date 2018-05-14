<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function isAdm()
    {
        return $this->id == 1 ? true : false;
    }

    public function setPasswordAttribute($value)
    {
        if($value) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
}
