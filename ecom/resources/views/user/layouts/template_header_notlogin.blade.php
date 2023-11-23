<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PING Cosmetics Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/colored-logo.png')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header-wrapper">
        <div class="header-container">
            <div class="logo-site">
                <a href="/" class="logo">
                    <img src="{{ asset('assets/logo.svg')}}" alt="logo">
                </a>
            </div>

            <div class="search-site">
                <div class="suggested-keywords">
                <a href="{{route('productlist')}}" class="white-anchor heavy-link">Nước tẩy trang Test</a>
                    <a href="{{route('productdetail')}}" class="white-anchor heavy-link">Kem chống nắng</a>
                    <a href="" class="white-anchor heavy-link">Toner</a>
                    <a href="" class="white-anchor heavy-link">Sữa rửa mặt</a>
                    <a href="" class="white-anchor heavy-link">Tẩy tế bào chết</a>
                    <a href="" class="white-anchor heavy-link">Cushion</a>
                </div>
                <div class="search-cart">
                    <form action="">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." class="input-search" name="search">
                        <button type="submit" class="btn-submit-search">
                            <img src="{{ asset('assets/search-icon.svg')}}" alt="Search">
                        </button>
                    </form>
                    <div class="item-header cart">
                        <a href="" class="white-anchor">
                            <img src="{{ asset('assets/cart-icon.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="item-header login-register">
                        <a href="" class="white-anchor">
                            <img src="{{ asset('assets/login-icon.svg')}}" alt="">
                        </a>
                        <div class="text">
                            <a href="{{route('login')}}" class="white-anchor heavy-link">Đăng nhập</a>
                            <br>
                            <a href="{{route('register')}}" class="white-anchor heavy-link">Đăng ký</a>
                        </div>
                    </div>
                    <div class="item-header support">
                        <a href="" class="white-anchor">
                            <img src="{{ asset('assets/phone-icon.svg')}}" alt="">
                        </a>
                        <a href="" class="white-anchor heavy-link">Hỗ trợ <br> khách hàng</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <a href="" class="category-fixed" style="font-weight: 600; background: #fff;">DANH MỤC</a>
        <div class="sub-nav">
            <button class="btn-sub-nav">Trang điểm <i class="fa fa-caret-down"></i></button>
            <div class="sub-nav-content">
                <a href="" class="heavy-link">Kem nền</a>
                <a href="" class="heavy-link">Kem lót</a>
                <a href="" class="heavy-link">Son</a>
                <a href="" class="heavy-link">Kẻ mắt / Kẻ mày</a>
                <a href="" class="heavy-link">Dụng cụ</a>
            </div>
        </div>
        <div class="sub-nav">
            <button class="btn-sub-nav">Chăm sóc da <i class="fa fa-caret-down"></i></button>
            <div class="sub-nav-content">
                <a href="" class="heavy-link">Sữa rửa mặt</a>
                <a href="" class="heavy-link">Tẩy trang</a>
                <a href="" class="heavy-link">Toner</a>
                <a href="" class="heavy-link">Dưỡng ẩm</a>
                <a href="" class="heavy-link">Kem chống nắng</a>
            </div>
        </div>
        <div class="sub-nav">
            <button class="btn-sub-nav">Chăm sóc tóc <i class="fa fa-caret-down"></i></button>
            <div class="sub-nav-content">
                <a href="" class="heavy-link">Dầu gội</a>
                <a href="" class="heavy-link">Dầu xả</a>
                <a href="" class="heavy-link">Dầu dưỡng tóc</a>
                <a href="" class="heavy-link">Thuốc nhuộm</a>
            </div>
        </div>
        <div class="sub-nav">
            <button class="btn-sub-nav">Chăm sóc cơ thể <i class="fa fa-caret-down"></i></button>
            <div class="sub-nav-content">
                <a href="" class="heavy-link">Sữa tắm</a>
                <a href="" class="heavy-link">Body Scrub</a>
                <a href="" class="heavy-link">Lăn khử mùi</a>
                <a href="" class="heavy-link">Sữa dưỡng thể</a>
            </div>
        </div>
        <div class="sub-nav">
            <button class="btn-sub-nav">Nước hoa</button>
        </div>
        <div class="sub-nav">
            <button class="btn-sub-nav">Thực phẩm chức năng <i class="fa fa-caret-down"></i></button>
            <div class="sub-nav-content">
                <a href="" class="heavy-link">Hỗ trợ làm đẹp</a>
                <a href="" class="heavy-link">Hỗ trợ sức khỏe</a>
            </div>
        </div>
    </div>


