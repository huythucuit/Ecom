@extends('admin.layouts.template')
@section('page_title')
PING - Category
@endsection
@section('content')
              <!-- Contextual Classes -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Danh mục sản phẩm</h4>
              <div class="card">
                <h5 class="card-header">Thông tin danh mục sản phẩm có sẵn</h5>
                    @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                    @endif
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Số danh mục con</th>
                        <th>Số sản phẩm</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($categories as $category)
                      <tr>
                        <td>{{ $category->categoryID }} </td>
                        <td>{{ $category->categoryName }}</td>
                        <td>{{ $category->subCategoryCount }}</td>
                        <td>{{ $category->productCount }}</td>
                        <td>
                          <a href="{{ route('editcategory', $category->categoryID )}}" class="btn btn-primary">Sửa</a>
                          <a href="{{route('deletecategory', $category->categoryID )}}"class="btn btn-warning">Xóa</a>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
              <!--/ Contextual Classes -->
@endsection