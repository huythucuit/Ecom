<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index()
    {
        return view('admin.allproduct');
    }

    public function AddProduct()
    {
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();

        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request){
        $request->validate([
           'productName' => 'required|unique:products',
           'productBrandName' => 'required',
           'productCategoryID' => 'required',
           'productSubCategoryID' => 'required',
           'productCreatedDate' => 'required',
           'productModifiedDate' => 'required',
           'productOriginalPrice'=> 'required',
           'productDiscountPrice'=> 'required',
           'productInfo'=> 'required',
           'productBarcode'=> 'required',
           'productImage'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'productInStock'=> 'required',
        ]);

          $image = $request->file('productImage');
          $imgname = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          $request->productImage->move(public_path('upload'),$imgname);
          $imgurl = 'upload/'.$imgname;

        $category_ID = $request->productCategoryID;
        $category_Name = Category::where('categoryID',$category_ID)->value('categoryName');

        $subcategory_ID = $request->productSubCategoryID;
        $subcategory_Name = Subcategory::where('subCategoryID',$subcategory_ID)->value('subCategoryName');

        Product::insert([
            'productName' => $request->productName,
            'productSlug' => strtolower(str_replace(' ', '-', $request->productName)),
            'productBrandName' => $request->productBrandName,
            'productCategoryID' => $category_ID,
            'productCategoryName' => $category_Name,
            'productSubCategoryID' => $subcategory_ID,
             'productSubCategoryName' => $subcategory_Name,
             'productOriginalPrice' => $request->productOriginalPrice,
             'productDiscountPrice' => $request->productDiscountPrice,
             'productImage' => $imgurl,
             'productCreatedDate' => $request->productCreatedDate,
             'productModifiedDate' => $request->productModifiedDate,
             'productInStock' => $request->productInStock,
        ]);

        return redirect()->route('allproducts')->with('message', 'Thêm sản phẩm thành công');
    }
}