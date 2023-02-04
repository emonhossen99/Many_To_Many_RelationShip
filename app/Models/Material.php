<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materials';

    public function products(){
        return $this->belongsToMany(Product::class,'material_product','product_id','material_id','id','id');
    }
}
