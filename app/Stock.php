<?php

namespace App;
use App\Medicine;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
protected $guarded = [];

public  function medicine(){
        return $this->belongsTo(Medicine::class,'medicine_id', 'id');
    }
}
