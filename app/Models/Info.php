<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class Info extends Model {
    //use HasTranslations;
    //public $timestamps = false;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'info', 'nameru', 'inforu', 'image', 'click'
    ];




}
