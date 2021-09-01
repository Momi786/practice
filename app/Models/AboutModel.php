<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table = 'about';
    protected $fillable = ['maintitle','shorttitle','title', 'img', 'desc'];
}
