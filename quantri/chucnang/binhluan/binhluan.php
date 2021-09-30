<script>
    function xoabl() {
        var conf = confirm('bạn có muốn xóa bình luận này không?');
        return conf;
    }
</script>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$rowPerPage = 5;
$perPage = $page * $rowPerPage - $rowPerPage;
$sql = "SELECT * FROM blsanpham LIMIT $perPage,$rowPerPage";
$query = mysqli_query($conn, $sql);

$totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM blsanpham"));
$totalPages = ceil($totalRows / $rowPerPage);
$listPage = "";
for ($i = 1; $i <= $totalPages; $i++) {
    if ($page == $i) {
        $listPage .= '<li class="active"><a href="quantri.php?page_layout=blsp&page=' . $i . '">' . $i . '</a></li>';
    } else {
        $listPage .= '<li><a href="quantri.php?page_layout=blsp&page=' . $i . '">' . $i . '</a></li>';
    }
}
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="quantri.php"><svg class="glyph stroked home">
                    <use xlink:href="#stroked-home"></use>
                </svg></a></li>
        <li class="active"></li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý bình luận</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=thembl" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm bình luận</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>
                            <th data-sortable="true">ID bình luận</th>
                            <th data-sortable="true">ID sản phẩm</th>
                            <th data-sortable="true">Tên</th>
                            <th data-sortable="true">Điện thoại</th>
                            <th data-sortable="true">Nội dung bình luận</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td data-checkbox="true"><?php echo $row['id_bl']; ?></td>
                                <td data-checkbox="true"><?php echo $row['id_sp']; ?></td>
                                <td data-checkbox="true"><?php echo $row['ten']; ?></td>
                                <td data-checkbox="true"><?php echo $row['dien_thoai']; ?></td>
                                <td data-checkbox="true"><a href="quantri.php?page_layout=suabl&id_bl=<?php echo $row['id_bl']; ?>"><?php echo $row['binh_luan']; ?></a></td>
                                <td>
                                    <a href="quantri.php?page_layout=suabl&id_bl=<?php echo $row['id_bl']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;">
                                                <use xlink:href="#stroked-brush" />
                                            </svg></span></a>
                                </td>
                                <td>
                                    <a onclick="return xoabl();" href="./chucnang/binhluan/xoabl.php?id_bl=<?php echo $row['id_bl']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;">
                                                <use xlink:href="#stroked-cancel" />
                                            </svg></span></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php
                    echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/.row-->