<nav class="header_all-menu">
   <div class="header_logo">
       
   </div>
   <div class="header_menu">
       <ul class="header_menu-list">
           <li class="header_menu-item">
                <a class="header_menu-link" href="/Index">TRANG CHỦ</a>
           </li>
           <li class="header_menu-item">
               <a class="header_menu-link" href="/Product">TẤT CẢ SẢN PHẨM</a>
            </li>
           <li class="header_menu-item">
               <a class="header_menu-link" href="/Product/products/clothes">THỜI TRANG NAM</a>
            </li>
           <li class="header_menu-item">
               <a class="header_menu-link" href="/Product/products/shoes">GIÀY</a>
            </li>
           <li class="header_menu-item">
                <a class="header_menu-link" href="/Product/products/watch">ĐỒNG HỒ</a>
            </li>
           <li class="header_menu-item">
                <a class="header_menu-link" href="/Product/products/hat">MŨ</a>
            </li>
            <li class="header_menu-item">
                <a class="header_menu-link" href="/Cart">Giỏ hàng</a>
            </li>
           <li class="header_menu-item menu_hover-acc">
                <span class="material-icons header_menu-link account">person</span>
                <?php  ?>
                <span class="header_menu-link"><?= $this->session->userdata('taikhoan'); ?></span>
                
                <?php if ($this->session->userdata('taikhoan')): ?>
                  <ul class="header_acc_list">
                  <li class="header_acc_item">
                      <a href="" class="info_link">Thông tin tài khoản</a>
                  </li>
                  <li class="header_acc_item">
                      <a href="/LoginRegister/logout" class="info_link">Đăng xuất</a>
                  </li>
                  <li class="header_acc_item">
                      <a href="/LoginRegister/changePassword" class="info_link">Đổi mật khẩu</a>
                  </li>
                </ul>
                <?php else: ?>
                  <ul class="header_acc_list">
                  <li class="header_acc_item">
                      <a href="/LoginRegister/dangnhap" class="info_link">Đăng nhập</a>
                  </li>
                  <li class="header_acc_item">
                      <a href="/LoginRegister/dangky" class="info_link">Đăng ký</a>
                  </li>
                </ul>
                <?php endif ?>                
            </li>
       </ul>
   </div>
</nav>