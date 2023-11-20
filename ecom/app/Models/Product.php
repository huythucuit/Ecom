<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'productID';
    protected $fillable = [
        'productID',
        'productName',
        'productBrandID',
        'subCategoryID',
        'productOriginalPrice',
        'productDiscountPrice',
        'productInfo',
        'productBarcode',
        'productInStock',
        'productImage',
        'productSideImage1',
        'productSideImage2',
        'productSideImage3',
        'productCreatedDate',
        'productModifiedDate',
        'isFlashSale',
        'isActive',
    ];
}
