<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    // use SoftDeletes;
    protected $table = 'jurusan';

    protected $fillable = ['nama_jurusan'];

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
