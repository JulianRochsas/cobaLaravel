<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'nrp', 'email', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }

    // public function student()
    // {
    //     return $this->hasMany('App\Jurusan');
    // }

    // public function getUpdatedBy()
    // {
    // 	return $this->hasOne(Jurusan::class, 'id', 'jurusan_id');
    // }
}
