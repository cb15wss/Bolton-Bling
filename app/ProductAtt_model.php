<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAtt_model extends Model
{
    protected $table='product_att';
    protected $primaryKey='id';
    protected $fillable=['products_id','sku','size','price','stock'];
}
