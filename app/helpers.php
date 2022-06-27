<?php

use App\Models\Products;

function getProductTrashCount(){
    $trashedCount = Products::onlyTrashed()->count();
    return $trashedCount;
}