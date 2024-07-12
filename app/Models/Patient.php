<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

     //perintah untuk mengenerate id dengan menggunakan UUID
     public $incrementing = false;
     public $keyType = 'string';

     protected static function boot() {
         parent::boot();

         static::creating(function ($model) {
             $model->id = Str::uuid(); // Atur ID model dengan UUID baru
         });
     }
     //END perintah untuk mengenerate id dengan menggunakan UUID

    protected $fillable=[
        'nama',
        'email',
        'alamat'
    ];

}
