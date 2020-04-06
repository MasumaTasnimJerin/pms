<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
      'manufacturer',
       'invoice_no',
         'medicine_id',
          'batch_id',
            'quantity',
            'manufacturer_price',

  ];
}
