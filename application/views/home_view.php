<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SALLY BOSS</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<script src="<?php echo base_url() ?>vendor/js/slide.js"></script>
    <script src="<?php echo base_url() ?>vendor/js/timesale.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendor/css/reponsive.css">
    <link rel="stylesheet" href=" <?php echo base_url() ?>vendor/css/product.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font/fontawesome/css/all.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
	<header class="header_web">
        <?php include "template/menu.php" ?>
        <div class="header_bg">
            <div class="header_sider">
                <img class="header_img" src="https://i.pinimg.com/originals/99/9d/5f/999d5f061d4154cb3eaed528978342c2.jpg" stt="0" alt="" style="z-index: 3;">
                <img class="header_img header_hidden_left display-none" src="https://images6.alphacoders.com/435/435743.jpg" stt="1" alt="" style="z-index: 2;">
                <img class="header_img header_hidden_left display-none" src="http://cdn29.us1.fansshare.com/pictures/urbanfashion/men-urban-fall-fashion-wallpaper-men-urban-fashion-mens-fashion-blog-fiskertalk-awesome-wallpaper-314612297.jpg" stt="2" alt="" style="z-index: 1;">
                <div class="btn-slides">
                    <div class="header_button-icon-pre">
                        <div id="header_previous">
                            <i class="material-icons">arrow_back_ios</i>
                        </div>
                    </div>
                    <div class="header_button-icon-next">
                        <div id="header_next">
                            <i class="material-icons">arrow_forward_ios</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="container_xuhuong">
            <div class="container_xuhuong_header">
                <div class="xuhuong_name">
                    <h2 class="name">
                        Xu hướng tìm kiếm
                    </h2>
                </div>
            </div>
            <div class="container_xuhuong_list_item">
                <div class="container_xuhuong_allitem">
                    <div class="container_xuhuong_item">
                        <div class="xuhuong_item_img">
                            <a href="" class="content_xuhuong_link">
                                <img class="xuhuong_img" src="<?php echo base_url() ?>vendor/img/home/xuhuong1.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="xuhuong_text">Thời trang nam</h3>
                    </div>
                    <div class="container_xuhuong_item">
                        <div class="xuhuong_item_img">
                            <a href="" class="content_xuhuong_link">
                                <img class="xuhuong_img" src="<?php echo base_url() ?>vendor/img/home/xuhuong1.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="xuhuong_text">Thời trang nam</h3>
                    </div>
                    <div class="container_xuhuong_item">
                        <div class="xuhuong_item_img">
                            <a href="" class="content_xuhuong_link">
                                <img class="xuhuong_img" src="<?php echo base_url() ?>vendor/img/home/xuhuong1.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="xuhuong_text">Thời trang nam</h3>
                    </div>
                    <div class="container_xuhuong_item">
                        <div class="xuhuong_item_img">
                            <a href="" class="content_xuhuong_link">
                                <img class="xuhuong_img" src="<?php echo base_url() ?>vendor/img/home/xuhuong1.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="xuhuong_text">Thời trang nam</h3>
                    </div>
                    <div class="container_xuhuong_item">
                        <div class="xuhuong_item_img">
                            <a href="" class="content_xuhuong_link">
                                <img class="xuhuong_img" src="<?php echo base_url() ?>vendor/img/home/xuhuong1.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="xuhuong_text">Thời trang nam</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_khuyenmai">                
            <div class="khuyenmai-box">
                <div class="khuyenmai-header">
                    <div class="text_sale">
                        <h2 class="text">Siêu Khuyến Mãi</h2>
                    </div>
                    <div class="time_khuyenmai" countdown="" data-date="December 15 2020 12:23:10">
                        <span class="text_time">Chỉ còn:</span>
                        <span class="time" data-days="">00</span> ngày
                        <span class="time" data-hours="">00</span> giờ 
                        <span class="time" data-minutes="">00</span> phút
                        <span class="time" data-seconds="">00</span> giây
                    </div>
                </div>

                <div class="khuyenmai-body">
                    <a href="" class="khuyenmai-body__items">
                    	<div class="box_sale">
                            <span class="items-logo-sale">-50%  </span>
                            <div class="items-img">
                                <img src="<?php echo base_url() ?>vendor/img/home/product_sale1.jpg" alt="">
                            </div>
                    	</div>
                        <span class="items-name">Áo xxxxxxx</span>
                        <div class="price-group">
                            <div class="price-current">100.000đ</div>
                            <div class="price-cost">200.000đ</div>
                        </div>
                    </a>
                    <a href="" class="khuyenmai-body__items">
                        <div class="box_sale">
                            <span class="items-logo-sale">-50%</span>
                            <div class="items-img">
                                <img src="https://product.hstatic.net/1000406425/product/dsc_4971---sw031-da_f8608dce70a64fb6a774a80d383dc9ed_master_ac899c618c9a41dd88e24d4c415e6acd_large.jpg" alt="">
                            </div>
                    	</div>
                        <span class="items-name">Áo xxxxxxx</span>
                        <div class="price-group">
                            <div class="price-current">100.000đ</div>
                            <div class="price-cost">200.000đ</div>
                        </div>
                    </a>
                    <a href="" class="khuyenmai-body__items">
                        <div class="box_sale">
                            <span class="items-logo-sale">-50%</span>
                            <div class="items-img">
                                <img src="https://product.hstatic.net/1000406425/product/dsc_4971---sw031-da_f8608dce70a64fb6a774a80d383dc9ed_master_ac899c618c9a41dd88e24d4c415e6acd_large.jpg" alt="">
                            </div>
                    	</div>
                        <span class="items-name">Áo xxxxxxx</span>
                        <div class="price-group">
                            <div class="price-current">100.000đ</div>
                            <div class="price-cost">200.000đ</div>
                        </div>
                    </a>
                    <a href="" class="khuyenmai-body__items">
                        <div class="box_sale">
                            <span class="items-logo-sale">-50%</span>
                            <div class="items-img">
                                <img src="https://product.hstatic.net/1000406425/product/dsc_4971---sw031-da_f8608dce70a64fb6a774a80d383dc9ed_master_ac899c618c9a41dd88e24d4c415e6acd_large.jpg" alt="">
                            </div>
                    	</div>
                        <span class="items-name">Áo xxxxxxx</span>
                        <div class="price-group">
                            <div class="price-current">100.000đ</div>
                            <div class="price-cost">200.000đ</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


   <?php include "template/footer.php" ?>

    
</body>
</html>