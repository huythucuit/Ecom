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

    public function getSubCategoryBySlug($subCategorySlug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $subCategory = Subcategory::where('subCategorySlug', $subCategorySlug)->first();
        return view('user.product_list', ['subCategory_slug' => $subCategory]);
    }

    public function get5SubCategory()
    {
        $subCategory = SubCategory::take(5)->get();
        return view('user.product_list', ['subCategory_header' => $subCategory]);
    }
}
