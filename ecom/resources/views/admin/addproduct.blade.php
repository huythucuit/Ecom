@extends('admin.layouts.template')
@section('page_title')
PING - Product
@endsection
@section('content')
 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span>Thêm sản phẩm</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Thêm sản phẩm</h5>
                      <small class="text-muted float-end">Nhập thông tin</small>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nhập tên sản phẩm</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="Kem chống nắng" />
                          </div>
                        </div> 

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tên thương hiệu</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="Haseline" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">lựa chọn danh mục cha</label>
                          <div class="col-sm-10">
                          <select class="form-control" id="category" name="category" aria-label="Default select example" >
                          <option >Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nhập giá sản phẩm</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="50000" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nhập mô tả sản phẩm</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="Sản phẩm không có thông tin" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Mã Barcode</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="64651879845" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Số lượng</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" placeholder="50" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Chèn hình</label>
                          <div class="col-sm-10">
                             <input class="form-control" type="file" id="formFile" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Chèn hình 1</label>
                          <div class="col-sm-10">
                             <input class="form-control" type="file" id="formFile" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Chèn hình 2</label>
                          <div class="col-sm-10">
                             <input class="form-control" type="file" id="formFile" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Chèn hình 3</label>
                          <div class="col-sm-10">
                             <input class="form-control" type="file" id="formFile" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ngày bắt đầu</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="date" value="2023-01-11" id="html5-date-input" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ngày hết hạn</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="date" value="2023-12-30" id="html5-date-input" />
                          </div>
                        </div>     
                        
                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Trạng thái SALE</label>
                           <div class="switch m-r-10">
                             <input type="checkbox" id="switch-1" checked="">
                             <label for="switch-1"></label>
                           </div>
                        </div> 
                        
                        <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Trạng thái sản phẩm</label>
                           <div class="switch m-r-10">
                             <input type="checkbox" id="switch-2" checked="">
                             <label for="switch-2"></label>
                           </div>
                        </div> 
                        

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thêm mới sản phẩm</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
@endsection