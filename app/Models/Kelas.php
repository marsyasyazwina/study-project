<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'class' ;
    protected $guarded = ['id'];

    //kode kolom mana yang bisa diisi
    protected $fillable = [
        'lesson', 'time'
    ];

    public $timestamps =false;
}
