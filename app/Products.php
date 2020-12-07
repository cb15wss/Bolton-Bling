<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=['p_name','p_color','p_code','slug','categories_id','details','price','image','description','featured'];


    public function category()
    {
        return $this->belongsTo(Category::class,
            'categories_id','id');
    }

    public function attributes(){
        return $this->hasMany(ProductAtt_model::class,'products_id','id');
    }
}
