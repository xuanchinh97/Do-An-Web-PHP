<div class="header-cart ">
    <i class="fas fa-shopping-cart header-cart-icon"></i>
    <div id="y-cart-main">
        <p>Bạn đang có <span><?php if (isset($_SESSION['giohang'])) {
                                    echo count($_SESSION['giohang']);
                                } else {
                                    echo 0;
                                } ?></span> sản phẩm</p>
        <a href="index.php?page_layout=giohang">Chi tiết giỏ hàng</a>
    </div>
</div>
