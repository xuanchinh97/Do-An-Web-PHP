<?php
if (isset($_SESSION['email'])) {
?>
    <div id="login" class="col-md-7 col-sm-12 col-xs-4 text-right">
        <div id="login-main">
            <ul>
                <li id="user"><?php echo $_SESSION['email']; ?>
                    <div>
                        <ul id="user-main">
                            <li><a href="./quantri/chucnang/dangxuat/dangxuat.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<?php
} else {
?>
    <div id="login" class="col-md-7 col-sm-12 col-xs-4 text-right">
        <div id="login-main">
            <p><a href="./quantri/index.php">Login</a> <span> / </span> <a href="./chucnang/tao_tk/taotk.php">Sign In</a></p>
        </div>
    </div>
<?php
}
?>