<?php

use App\Models\Category;
use App\Models\Product;

function getAllCategory()
    {
        return Category::all();
    }

    function getSubCategoryByCategoryID($categoryID)
    {
        return Category::where('categoryID', $categoryID)->first();
    }

    function getCategoryByCategoryID($categoryID)
    {
        return Category::where('categoryID', $categoryID)->first();
    }
function getCategoryByCategorySlug($categorySlug)
{
    return Category::where('categorySlug', $categorySlug)->first();
}
function getProductsBySubCategoryID($subCategoryID)
{
    return Product::where('subCategoryID', $subCategoryID)->get();
}


