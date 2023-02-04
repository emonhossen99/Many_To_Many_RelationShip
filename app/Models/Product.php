<?php

namespace App\Models;

use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function getmetarial(){
        return $this->belongsToMany(Material::class,'material_product','material_id','product_id','id','id');
    }
}
