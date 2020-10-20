<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $tabel='settings';
    protected $fillable = [
        'siteName_ar',
        'siteName_en', 
        'logo',
        'icon',
        'email',
        'main_lang',
        'descripation',
        'keywords',
        'status',
        'MSG_maintenance',
    ];
}
