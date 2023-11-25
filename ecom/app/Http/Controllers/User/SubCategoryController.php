<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function getAllMethod(){
        $getAllSubCategory = $this->getAllSubCategory();
        $get5SubCategory = $this->get5SubCategory();
    }

    public function getSubCategoryBySlug(Request $request)
    {
        $subCategory = SubCategory::where('subCategorySlug', $request->subCategorySlug)->first();
        $category = getCategoryByCategorySlug($request->categorySlug);

        return view('user.product_list', ['subCategory' => $subCategory, 'category' => $category]);
    }
    public function get5SubCategory()
    {
        $subCategory = SubCategory::take(5)->get();
        return view('user.product_list', ['subCategory_header' => $subCategory]);
    }
}
