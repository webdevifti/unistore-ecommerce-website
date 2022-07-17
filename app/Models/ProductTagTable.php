<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTagTable extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function relWithProduct(){
        return $this->hasMany(ProductsTagTable::class, 'tag_id');
    }
}
