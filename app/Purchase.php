<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
      'manufacturer',
       'invoice_no',
        'payment',
         'item_information',
          'batch_id',
          'expire_date',
           'stock',
            'quantity',
            'manufacturer_price',
            'total',

  ];
}
