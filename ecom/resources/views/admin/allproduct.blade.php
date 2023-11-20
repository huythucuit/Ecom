@extends('admin.layouts.template')
@section('page_title')
PING - Product
@endsection
@section('content')
              <!-- Contextual Classes -->
              <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Sản phẩm</h4>
              @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                    @endif
              <div class="card">
                <h5 class="card-header">Sản phẩm</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên Sản phẩm</th>
                        <th>Tên thương hiệu</th>
                        <th>Số sản phẩm</th>
                        <th>Giá</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày hết hạn</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Kem dưỡng ẩm SPA</td>
                        <td>Haseline </td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>
                          <a href="#" class="btn btn-primary">Sửa</a>
                          <a href="#" class="btn btn-warning">Xóa</a>
                        </td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
              <!--/ Contextual Classes -->
@endsection