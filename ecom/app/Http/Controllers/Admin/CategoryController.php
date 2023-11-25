<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index()
    {
        $categories = Category::latest()->get(); // $categories là một collection trong Laravel, nó chứa các đối tượng CategoryController (các bản ghi từ bảng categories)
        return view('admin.allcategory', compact('categories')); // Phương thức view trả về view 'admin.allcategory' và truyền dữ liệu vào view thông qua mảng compact
    }

    public function AddCategory()
    {
        return view('admin.addcategory');
    }
    public function StoreCategory(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|unique:categories'
        ]);

        Category::insert([
            'categoryName' => $request->categoryName,
            'categorySlug' => strtolower(str_replace(' ', '-', $request->categoryName)),
            'categoryDescription' => $request->categoryDescription,
            'categoryCreatedDate' => $request->categoryCreatedDate,
            'categoryModifiedDate' => $request->categoryModifiedDate, // Ban đầu, giả sử ngày tạo và ngày sửa giống nhau

        ]);

        return redirect()->route('allcategory')->with('message', 'Thêm danh mục thành công');
    }

    public function EditCategory($categoryID)
    {
        $category_info = Category::findOrFail($categoryID);
        return view('admin.editcategory', compact('category_info'));
    }
    public function UpdateCategory(Request $request)
    {
        $categoryID = $request->categoryID;

        $request->validate([
            'categoryName' => 'required|unique:categories,categoryName,' . $categoryID . ',categoryID'
        ]);

        Category::findOrFail($categoryID)->update([
            'categoryName' => $request->categoryName,
            'categorySlug' => strtolower(str_replace(' ', '-', $request->categoryName)),
            'categoryDescription' => $request->categoryDescription,
            'categoryCreatedDate' => $request->categoryCreatedDate,
            'categoryModifiedDate' => $request->categoryModifiedDate, // Ban đầu, giả sử ngày tạo và ngày sửa giống nhau

        ]);

        return redirect()->route('allcategory')->with('message', 'Cập nhật danh mục thành công');
    }

    public function DeleteCategory($categoryID)
    {
        Category::findOrFail($categoryID)->delete();
        return redirect()->route('allcategory')->with('message', 'Xóa danh mục thành công');
    }
}
