<?php
ob_start();
session_start();
include_once './ketnoi.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['mk'];
    if (isset($email) && isset($pass)) {
        $sql = "SELECT *FROM thanhvien WHERE email='$email' and mat_khau='$pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        $rows = mysqli_num_rows($query);
        if ($rows > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
        } else {
            echo '<center class="alert alert-danger">Tài khoản không tồn tại hoặc bạn không có quyền truy cập!</center>';
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./anh/faicon.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Xuân Chinh Mobile</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/datepicker3.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">

</head>

<body>

    <div class="row margin-top">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Đăng nhập hệ thống quản trị</div>
                <div class="panel-body">
                    <?php
                    if (!isset($_SESSION['email'])) {
                    ?>
                        <form method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tài khoản E-mail" name="email" type="email" autofocus="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="mk" type="password" required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" value="Remember Me">Ghi nhớ
                                    </label>
                                </div>
                                <br />
                                <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary ">
                                <input type="reset" name="resset" value="Làm mới" class="btn btn-danger margin-left" />
                                <a href="../index.php"><input type="button" value="Trở về" class="btn btn-default float-right" /></a>
                            </fieldset>
                        </form>
                    <?php
                    } else {
                        if ($row['quyen_truy_cap'] == 2) {
                            header('location: ./quantri.php');
                        } else {
                            header('location: ../index.php');
                        }
                    }
                    ?>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->



    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        ! function($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function() {
            if ($(window).width() > 768)
                $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function() {
            if ($(window).width() <= 767)
                $('#sidebar-collapse').collapse('hide')
        })
    </script>
</body>

</html>