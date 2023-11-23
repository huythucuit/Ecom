@auth
	@include('user.layouts.template_header_logged')
@endauth
@guest
	@include('user.layouts.template_header_notlogin')
@endguest
<div class="page-navigation">
        <ul class="breadcrumb">
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Kem chống nắng</a></li>
        </ul>
    </div>

    <div class="main-container grid-6-col">
        <div class="sidebar">
            <div class="sidebar-category">
                <div class="side-bar-title">
                    <h2 class="">DANH MỤC</h3>
                </div>
                <div class="side-bar-category">
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Kem chống nắng</a></div>
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Dưỡng ẩm</a></div>
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Kem chống nắng</a></div>
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Dưỡng ẩm</a></div>
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Kem chống nắng</a></div>
                    <div class="category-sb"><a href="" class="cyan-link heavy-link">Dưỡng ẩm</a></div>  
                </div>
            </div>
            <div class="sidebar-filter">
                <div class="side-bar-title">
                    <h2 class="">BỘ LỌC TÌM KIẾM</h3>
                </div>
                <div class="brand-filter">
                    <h3 class="">Tên thương hiệu</h2>
                    <div class="brand-choose">
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                        <input type="checkbox" name="" id="">
                        <label for="">Thương hiệu</label><br>
                    </div>
                </div>
                <div class="price-range">
                    <h3 class="">Khoảng giá</h2>
                    <form action="" class="filter-product">
                        <input type="text" name="" id="" placeholder="Từ &#8363;">
                        <span class="price-range-line">-</span>
                        <input type="text" name="" id="" placeholder="Đến &#8363;">
                        <br><br>
                        <button type="submit" class="btn-apply">Áp dụng</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="product-list-header">
                <div class="product-list-title">
                    <h1 class="section-txt-title">Kem chống nắng</h1>
                </div>
                <div class="product-list-filter">
                    <div class="product-list-filter-content right">
                        <label for="">Sắp xếp theo: </label>
                        <select name="" id="">
                            <option value="Increase">Giá thấp đến cao</option>
                            <option value="Decrease">Giá cao đến thấp</option>
                            <option value="Alphabet">A - Z</option>
                        </select>
                    </div>
                    
                </div>
            </div>
            <div class="product-list-content grid-4-col">
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="preview-product">
                    <div class="product-ping width-common relative">
                        <a href="" class="image-common relative">
                            <div class="product-img sale">
                                <img src="https://media.hcdn.vn/wysiwyg/HaNguyen1/sua-chong-nang-anessa-duong-da-kiem-dau-bao-ve-hoan-hao-1.jpg" alt="" height="200" width="200">
                                <span class="sale-percent">50%</span>
                            </div>
                            <div class="product-info">
                                <div class="width-common price-block">
                                    <strong class="discount-price txt-16">350.000 &#8363;</strong>
                                    <span class="original-price txt-12 right">700.000 &#8363;</span>
                                </div>
                                <div class="product-name-block">
                                    <h3 class="width-common pr-name sp-bottom-5">
                                        <div class="product-name cyan-link">Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 20ml</div>
                                    </h3>
                                </div>
                                <div class="rate-block">
                                    <span class="rate-star left">4.5 <i class="fa-solid fa-star"></i></span>
                                    <span class="sold-product-number right">Đã bán: 100</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="pagination-container">
                <nav>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </nav>
            </div>

        </div>
    </div>

@include('user.layouts.template_footer')
