@extends('admin.layouts.template')
@section('page_title')
PING - Category
@endsection
@section('content')
              <!-- Contextual Classes -->
              <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Danh mục sản phẩm</h4>
              <div class="card">
                <h5 class="card-header">Thông tin danh mục con sản phẩm có sẵn</h5>
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
                        <th>Tên danh mục con</th>
                        <th>Trực thuộc danh mục </th>
                        <th>Số sản phẩm</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($allsubcategories as $subcategory )
                      <tr>
                        <td>{{$subcategory->subCategoryID}}</td>
                        <td>{{$subcategory->subCategoryName}}</td>
                        <td>{{$subcategory->categoryName}} </td>
                        <td>{{$subcategory->productCount}}</td>
                        <td>
                          <a href="{{route('editsubcategory', $subcategory->subCategoryID)}}" class="btn btn-primary">Sửa</a>
                          <a href="{{route('deletesubcategory', $subcategory->subCategoryID)}}" class="btn btn-warning">Xóa</a>
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