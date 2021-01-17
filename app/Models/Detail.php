<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'details_new';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
