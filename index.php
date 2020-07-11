<?php

session_start();
ob_start();

//if (isset($_COOKIE['is_login'])) { // ktra dữ liệu
//    echo "{$_COOKIE['user_login']}"; // lấy ra cookie
////    echo "Cookie:{$_COOKIE['user_login']}"; // lấy ra cookie
//}


require 'db/connect.php';
require 'db/config.php';
require 'db/database.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <title>Trang Chủ</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--  -->
    <link rel="shortcut icon" href="public/images/favicon.png" type="image/x-icon">

    
</head>
<body>
    


    <header class="top_header">
        <nav class="navbar navbar-expand-sm navbar-light  bg--color">
            <div class="container-lg">
            
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gioithieu.html">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lienhe.html">Liên hệ</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="dangnhap.html">Đăng Nhập  / <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="dangki.html">Đăng Ký  <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                
            </div>
        </div>
        </nav>
    </header>
    <!--  hết header top -->


     <header class="top_header2">
        <nav class="navbar navbar-expand-sm navbar-light bg--color2">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-3">
                        <a class="navbar-brand" href="index.html">
                            <img src="public/images/final.png" alt="" style="width: 200px;">
                        </a>
            
            </button>
                    </div>
                </div>
            
            <div class="col-6 ml-5">
                <div class="collapse navbar-collapse" id="collapsibleNavId1">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Nhập từ khóa tìm kiếm tại đây " style="width: 400px">
                        <button class="btn btn-dark my-2 my-sm-0 mr-4 btn--timkiem" type="submit">Tìm Kiếm</button>
                    </form>
                </ul>
                
            </div>
            </div>
            <div class="col-3 ">
               <div class="row">
                   <div class="col-sm-8 fix tuvan">
                    <i class="fas fa-phone-volume"></i>
                       <span class="tuvan">Tư vấn</span>
                        <span class="tuvan">0377.077.630</span>
                   </div>
                   <div class="col-sm-4 icon">
                    <a href="giohang.html"><i class="fas fa-shopping-cart"></i></a> 
                    <i class="fas fa-bars nutmora"></i>
                   </div>
               </div>
                
            </div>
            
        </div>
        </nav>
    </header> 

    <!-- HẾT PHẦN HEADER -->

    <section class="big">
    <!-- MAIN -->
    <section class="slide pt-4">
        <div class="container-sm">
            <div class="row ">
                <div class="col-3 cottrai ">
                    <div class="category">
                        <h5 class="title">DANH MỤC SẢN PHẨM</h5>
                        <div class="list ">
                            <ul class="list-unstyled text-center " >
                                <li class="list-item"> <a href="danhmucsanpham.html">DELL</a> </li>
                                <li class="list-item"> <a href="danhmucsanpham.html">ASUS</a></li>
                                <li class="list-item"> <a href="danhmucsanpham.html">HP</a></li>
                                <li class="list-item"> <a href="danhmucsanpham.html">MACBOOK</a></li>
                                <li class="list-item"> <a href="danhmucsanpham.html">LENOVO</a></li>
                                <li class="list-item"> <a href="danhmucsanpham.html">MSI</a></li>
                                <li class="list-item"> <a href="danhmucsanpham.html">ACER</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- hết phần danh mục sản phẩm -->
                    <div class="selling_products">
                        <h5 class="title">SẢN PHẨM BÁN CHẠY</h5>
                        <div class="list ">
                            <ul class="list-unstyled text-center " >
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/dell-g7-7588.png"  class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Dell G7 7588 N7588D... </a>
                                                <span class="price"> 26,390,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/dell inspiron 5370.jpg" class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Dell Inspiron 15 5570... </a>
                                                <span class="price"> 14,295,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/dell inspiron 15 5570.jpg" class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product">
                                                <a href="chitietsanpham.html">Dell Inspiron 15 5570... </a>
                                                <span class="price"> 19,788,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/Asus TUF FX505GE-.jpg"class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Asus TUF FX505GE-... </a>
                                                <span class="price"> 25,209,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/Asus Zenbook 14.jpg"class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Asus Zenbook 14... </a>
                                                <span class="price"> 25,679,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end product_small -->
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/Asus ROG Strix SCAR II.jpg"class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Asus ROG Strix SCAR II... </a>
                                                <span class="price"> 56,990,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/Asus TUF Gaming.jpg"class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product">
                                                <a href="chitietsanpham.html">Asus TUF Gaming... </a>
                                                <span class="price"> 24,990,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end product_small -->
                                <li class="product--list-item"> 
                                    <div class="products_small">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="chitietsanpham.html">
                                                    <img src="public/images/Asus F560UD-BQ400T.jpg" class="product--img img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-8 product" >
                                                <a href="chitietsanpham.html">Asus F560UD-BQ400T... </a>
                                                <span class="price"> 16,990,000 đ</span>
                                                <br>
                                                <a href="chitietsanpham.html" >MUA NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li> 
                            </ul>
                        </div>
                    </div>


                    
                </div>
                <div class="col-9 m-auto mx-0">
                    <!-- SLIDE -->
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="public/images/slider-5.jpg" alt="" >
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/slider-6.jpg" alt="" >
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/slider-8.jpg" alt="" >
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- HẾT PHẦN SLIDE -->

                    <!-- SUPPORT -->
                    <div class="support">
                        <div class="row mt-4">
                            <div class="col-sm-3">
                                <div class="support--small text-center py-3">
                                    <img src="public/images/icon-1.png" alt="">
                                    <h6>Miễn phí vận chuyển</h6>
                                    <span>Tới tận tay khách hàng</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="support--small text-center py-3">
                                    <img src="public/images/icon-2.png" alt="">
                                    <h6>Tư vấn khách hàng 24/7</h6>
                                    <span>Khách hàng gọi đến 1900.8198</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="support--small text-center py-3">
                                    <img src="public/images/icon-3.png" alt="">
                                    <h6>Giúp bạn tiết kiệm hơn </h6>
                                    <span>Với nhiều ưu đãi cực lớn</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="support--small text-center py-3">
                                    <img src="public/images/icon-5.png" alt="">
                                    <h6>Đặt hàng online online</h6>
                                    <span>Thao tác đơn giản và nhanh chóng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HẾT PHẦN SUPPORT -->


                    <!-- SỬA TRONG ĐOẠN NÀY -->
                    <div class="product_noibat mt-5">
                        <h4>SẢN PHẨM NỔI BẬT</h4>
                        <div class="page-content page-container" id="page-content">
                            <div class="padding">
                                <div class="row ">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body card--fix--pd">
                                                <div class="owl-carousel text-center card--fix--mg ">
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/dell10.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">Dell Inspiron 3168 TRDM71 Intel Pentium N3710 1.6GHz DDR3</h6></a> 
                                                                <span class="price_km">10,500,000 đ</span>
                                                                <span><del>11,220,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/1.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">Dell Inspiron 5370 N3I3002W Core i3-8130U/ Win10 (13.3 inch FHD) (Pink)</h6></a> 
                                                                <span class="price_km">14,295,000 đ</span>
                                                                <span><del>15,990,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/2.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">Asus Vivobook S13 S330UA-EY027T Core i5-8250U/256GB SSD M.2 Sata</h6></a> 
                                                                <span class="price_km">20,000,000 đ</span>
                                                                <span><del>16,090,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/3.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">HP Pavilion 15-cs1080TX 5RB14PA Core i7-8565U/Win10 (15.6" FHD)</h6></a> 
                                                                <span class="price_km">18,939,000 đ</span>
                                                                <span><del>20,990,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/4.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">HP 15/da0051TU4ME64PA/ Intel Core i3-7020U/4GB DDR4-2133MHz</h6></a> 
                                                                <span class="price_km">9,450,000 đ</span>
                                                                <span><del>10,490,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                     <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href="chitietsanpham.html"><img src="public/images/5.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href="chitietsanpham.html"><h6 class="card-title ">HP Elitebook 1050 G1 5JJ71PA Core i7-8750H/GTX 1050/Dos (15.6" FHD)</h6></a> 
                                                                <span class="price_km">40,809,000 đ</span>
                                                                <span><del>44,809,000 đ</del></span>
                                                                <br>
                                                                <a href="chitietsanpham.html" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href=""><img src="public/images/dell10.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href=""><h6 class="card-title ">Dell Inspiron 3168 TRDM71 Intel Pentium N3710 1.6GHz DDR3</h6></a> 
                                                                <span class="price_km">10,500,000 đ</span>
                                                                <span><del>11,220,000 đ</del></span>
                                                                <br>
                                                                <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- 1 sản phẩm -->
                                                    <div class="item"> 
                                                        <div class="card card--small " >
                                                            <a href=""><img src="public/images/1.jpg" class="img-fluid" alt="..."></a> 
                                                            <div class="card-body ">
                                                                <a href=""><h6 class="card-title ">Dell Inspiron 5370 N3I3002W Core i3-8130U/ Win10 (13.3 inch FHD) (Pink)</h6></a> 
                                                                <span class="price_km">14,295,000 đ</span>
                                                                <span><del>15,990,000 đ</del></span>
                                                                <br>
                                                                <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <!-- hết -->
                        
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TIN NỔI BẬT -->
                    <div class="news mt-5">
                        <h3>TIN NỔI BẬT</h3>
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="card-deck">
                                    <div class="card col-sm-3 mx-2">
                                        <img class="card-img-top px-2 py-2" src="public/images/hp-ra-mat-may-tinh-trang-bi-chip-amd-45-200x155.jpg" alt="">
                                        <div class="card-body  px-1">
                                            <h6 class="card-title px-0">ASUS VivoBook 14/15 ra mắt, nhỏ gọn, 4 màu sắc</h6>
                                        </div>
                                    </div>  
                                    <div class="card col-sm-3 mx-2">
                                        <img class="card-img-top px-2 py-2" src="public/images/hp-ra-mat-may-tinh-trang-bi-chip-amd-45-200x155.jpg" alt="">
                                        <div class="card-body  px-1">
                                            <h6 class="card-title px-0">ASUS VivoBook 14/15 ra mắt, nhỏ gọn, 4 màu sắc</h6>
                                        </div>
                                    </div>  
                                    <div class="card col-sm-3 mx-2">
                                        <img class="card-img-top px-2 py-2" src="public/images/hp-ra-mat-may-tinh-trang-bi-chip-amd-45-200x155.jpg" alt="">
                                        <div class="card-body  px-1">
                                            <h6 class="card-title px-0">ASUS VivoBook 14/15 ra mắt, nhỏ gọn, 4 màu sắc</h6>
                                        </div>
                                    </div>  
                                    <div class="card col-sm-3 mx-2">
                                        <img class="card-img-top px-2 py-2" src="public/images/hp-ra-mat-may-tinh-trang-bi-chip-amd-45-200x155.jpg" alt="">
                                        <div class="card-body  px-1">
                                            <h6 class="card-title px-0">ASUS VivoBook 14/15 ra mắt, nhỏ gọn, 4 màu sắc</h6>
                                        </div>
                                    </div>  
                                    
                                    
                                    
                                      
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- sản phẩm DELL-->
                    <!-- sửa phầm hình ảnh, tên giá tiền bán giá tiền gốc -->
                    <div class="product_dell mt-5">
                            <h3>DELL</h3>
                            
                                <div class="row ">
                                    <div class="col-sm-3 text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell10.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 3168 TRDM71 Intel Pentium N3710 </h6></a> 
                                              <span class="price_km">8,500,000đ</span>
                                                
                                              <span><del>7,220,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell11.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 3543 (N3543A) /Intel Core i3-5005U</h6></a> 
                                              <span class="price_km">9,000,000đ</span>
                                              <span><del>9,500,000đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell13.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 70071890/i5-6300HQ/4GB RAM</h6></a> 
                                              <span class="price_km">21,000,000đ</span>
                                              <span><del>21,500,000đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell15.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 3567 N3567S Core i3-7020U/Dos(15 HD")</h6></a> 
                                              <span class="price_km">9,379,000 đ</span>
                                              <span><del>10,890,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell16.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 5370 N3I3002W Core i3-8130U/ Win10 </h6></a> 
                                              <span class="price_km">14,295,000 đ</span>
                                              <span><del>15,990,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3  text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell17.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Laptop Dell XPS 13 9370 415PX2 Core i7-8550U/Win10 </h6></a> 
                                              <span class="price_km">50,338,000 đ</span>
                                              <span><del>52,480,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3  text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell18.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 7370 7D61Y3 Core i7-8550U/Win10+Office </h6></a> 
                                              <span class="price_km">21,090,000 đ</span>
                                              <span><del>24,000,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3  text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/dell19.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Dell Inspiron 15 5570 M5I5335W Core i5-8250U/Win (FHD)</h6></a> 
                                              <span class="price_km">19,788,000 đ</span>
                                              <span><del>21,990,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp --> 
                                </div>
                    </div>
                    <!-- HẾT PHẦN SẢN PHẨM DELL -->

                    <!-- sản phẩm ASUS -->
                    <div class="product_asus mt-5">
                        <h3>ASUS</h3>
                                <div class="row ">
                                    <div class="col-sm-3 text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus7.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus TUF Gaming FX504GM-EN303T Core i7-8750H</h6></a> 
                                              <span class="price_km">10,000,000 đ</span>
                                              <span><del>10,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus6.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">ASUS ROG Zephyrus S GX531GW-ES006T Core i7-8750H/ RTX </h6></a> 
                                              <span class="price_km">18,800,000 đ</span>
                                              <span><del>19,900,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus4.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus Zenbook 15 UX533FD-A9027T Core i7-8565U/</h6></a> 
                                              <span class="price_km">21,000,000 đ</span>
                                              <span><del>22,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3  text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus2.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus ROG Zephyrus G GA502DU-AL024T AMD Win10 </h6></a> 
                                              <span class="price_km">17,000,000 đ</span>
                                              <span><del>19,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus13.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus F560UD-BQ400T Core i5-8250U/ Win10/ GTX  </h6></a> 
                                              <span class="price_km">9,600,000 đ</span>
                                              <span><del>10,990,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus12.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus Zenbook 13 UX333FA-A4181T Core i5-8265U </h6></a> 
                                              <span class="price_km">13,870,000 đ</span>
                                              <span><del>15,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus11.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus Zenbook UX331UAL-EG044TS Core i7-8550U/10 </h6></a> 
                                              <span class="price_km">16,000,000 đ</span>
                                              <span><del>17,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/asus10.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Asus TUF Gaming FX705GE-EW165T Core i7-8750H</h6></a> 
                                              <span class="price_km">23,000,000 đ</span>
                                              <span><del>25,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp --> 
                                </div>
                    </div>
                    <!-- Hết phần sản phẩm ASUS -->

                    <!-- SẢN PHẨM hp -->
                    <div class="product_hp mt-5">
                        <h3>HP</h3>
                                <div class="row ">
                                    <div class="col-sm-3 text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp10.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP ProBook 450 G5 2ZD47PA Core i5-8250U/Free Dos </h6></a> 
                                              <span class="price_km">7,600,000 đ</span>
                                              <span><del>8,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp11.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP Pavilion 15-cc157TX 3PN Core i5-8250U/RAM 8GB</h6></a> 
                                              <span class="price_km">19,060,000 đ</span>
                                              <span><del>20,900,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp12.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP 15-da1030TX 5NM13PA Core i7-8565U/ MX130/</h6></a> 
                                              <span class="price_km">12,800,000 đ</span>
                                              <span><del>14,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp3.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP Pavilion Gaming 15-cx0179TX 5EF42PA Core i5-</h6></a> 
                                              <span class="price_km">19,180,000 đ</span>
                                              <span><del>20,580,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp7.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP 15-da0358TU 6KD02PA Pentium Gold 4417U/ Win10</h6></a> 
                                              <span class="price_km">23,000,000 đ</span>
                                              <span><del>23,999,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp8.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP Probook 430 G6 5YN01PA Core i7-8565U/Dos (13.3)</h6></a> 
                                              <span class="price_km">18,090,000 đ</span>
                                              <span><del>19,150,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hp9.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP Elitebook 1050 G1 5JJ71PA Core i7-8750H/GTX 1050</h6></a> 
                                              <span class="price_km">26,200,000 đ</span>
                                              <span><del>26,990,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3  text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/hpenvy.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">HP Envy 13-ah1011TU 5HZ28PA: Core i5-8265U/Win10 </h6></a> 
                                              <span class="price_km">20,890,000 đ</span>
                                              <span><del>23,100,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp --> 
                                </div>
                    </div>
                    <!-- Hết phần sản phẩm HP -->

                    <!-- SẢN PHẨM MACBOOK  -->
                    <div class="product_macbook mt-5">
                        <h3>MACBOOK</h3>
                                <div class="row ">
                                    <div class="col-sm-3 text-center mt-3  ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/mb1.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Macbook Pro 2017 (13.3 inch) Core i5/256GB/Mac10 </h6></a> 
                                              <span class="price_km">39,070,000 đ</span>
                                              <span><del>40,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/mb2.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Apple Macbook Air 2017 13.3 Inch Core i7/ 8GB/ 128GB </h6></a> 
                                              <span class="price_km">29,900,000 đ</span>
                                              <span><del>31,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/mb3.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Macbook Pro 2017 (13.3 inch) Core i5/128GB SSD PCIe</h6></a> 
                                              <span class="price_km">23,100,000 đ</span>
                                              <span><del>25,500,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                    <div class="col-sm-3 text-center mt-3 ">
                                        <div class="card card--small " >
                                               <a href=""><img src="public/images/mb4.jpg" class="img-fluid" alt="..."></a> 
                                            <div class="card-body ">
                                             <a href=""><h6 class="card-title ">Apple Macbook Air 2018 Core i5/ 8GB/ 256GB/Macos </h6></a> 
                                              <span class="price_km">40,890,000 đ</span>
                                              <span><del>43,670,000 đ</del></span>
                                              <a href="#" class="btn btn-outline-dark">Thêm Giỏ Hàng</a>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- hết 1 sp -->
                                </div>
                    </div>
                    <!-- Hết phần sản phẩm MACBOOK -->
                    <!-- HẾT -->
                    </div>
            </div>
        </div>     
    </section>
    <pre>









        
    </pre>
</section>


    <!-- BEGIN FOOTER -->
    <footer class="py-5 bg--footer text-white">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>SPACE TEAM</h2>
                    <p>SPACE TEAM luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.</p>
                    <img src="public/images/img-foot.png"" alt="">
                </div>

                <div class="col-4">
                    <h4>Thông tin cửa hàng</h4>
                    <ul class="list-unstyled li--fix">
                        <li><i class="fas fa-map-marker my-2"> <p class="ml-2"> 351A Lạc Long Quân Phường 5 Quận 11</p></i></li>
                        <li> <i class="fas fa-phone-volume my-2"> <p  class="ml-2">0377.077.630</p> </i></li>
                        <li><i class="fas fa-envelope my-2"></i> <p  class="ml-2">spaceteam@gmail.com</p> </li>
                    </ul>
                </div>

                <div class="col-4">
                    <h4>
                        Chính sách mua hàng
                    </h4>
                    <ul class="fix--ul">
                        <li class="li--chinhsach">Quy định - chính sách</li>
                        <li class="li--chinhsach">Chính sách bảo hành - đổi trả</li>
                        <li class="li--chinhsach">Chính sách hội viện</li>
                        <li class="li--chinhsach">Giao hàng - lắp đặt</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
    <footer class="text-center footer--team text-white">
        <p class="py-2"> © Space Team | Trường Đại Học Sư Phạm Thành Phố Hồ Chí Minh</p>
     </footer>

     <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
     
     <!-- Link JS -->
     <script src="js/jquery-3.5.js"></script>
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script> 
     <script src="js/bootstrap.min.js"></script>
     <script src="1.js"></script>
     <script src="js/jquery.easing.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    

</body>
</html>