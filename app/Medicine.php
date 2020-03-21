<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
  protected $fillable = [
      'name',
       'category',
        'purchase_price',
        'selling_price',
         'quantity',
          'medicine_shelf',
          'generic_name',
           'company',
            'effects',
            'expire_date',
  ];

    protected $casts= [
    'expire_date'=>'datetime',
  ];

  public function categoryTable(){
  return  $this->belongsTo(Category::class,'category','id');
  }

}
