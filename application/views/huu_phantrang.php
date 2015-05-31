<?php
/**
 * Created by PhpStorm.
 * User: tranbaohuu
 * Date: 5/22/2015
 * Time: 8:31 PM
 */


?>

<html>

<head>
<!--    phải để link css va javascript vậy khi phân trang ko bị vỡ css-->
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("css/my_css.css"); ?>" />


    <script type="text/javascript" src="<?php echo base_url("js/jquery-2.1.4.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("js/my_javascript.js"); ?>"></script>





    <script>

        //        var base_url = '<?php //echo site_url(); //you have to load the "url_helper" to use this function ?>//';
        //
        //        function deleteAction(table, condition, id) {
        //            $.ajax({
        //                    type: "GET",
        //                    url: "<?php //echo base_url(); ?>//" + "index.php/huu_adminpage/deleteProduct/" + table + "/" + condition + "/" + id,
        ////                    dataType: 'json',
        ////                    data: {id: id},
        //                    success: function () {
        //                        $("#row-" + id).remove();
        //
        //                    }
        //                }
        //            )
        //        }


    </script>

</head>
<body>
<div class="container-fluid">

    <?php
    ?>


    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">iOS</a></li>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Báo cáo</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Danh mục
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Thêm</a></li>
                        <li><a href="#">Sửa</a></li>
                        <li><a href="#">Xóa</a></li>

                    </ul>
                </li>

            </ul>
            <form class="navbar-form pull-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
                <button type="submit" class="btn btn-default" style="height: 34px;"><i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </nav>


    <!-- Modal -->
    <form method="post" action="<?php echo site_url(); ?>/huu_adminpage/editProduct">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width:800px; ">
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Thông tin
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-2">
                                Mã sản phẩm
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="tbID" name="idSanPham">
                            </div>
                        </div>
                        <br>

                        <div class="row">

                            <div class="col-md-2">
                                Tên sản phẩm
                            </div>
                            <div class="col-md-4">
                                <input name="tensp" id="tbTenSanPham" class="form-control">
                            </div>
                            <div class="col-md-2">
                                Mô tả
                            </div>
                            <div class="col-md-4">
                                <input name="mota" id="tbMota" class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="row">

                            <div class="col-md-2">
                                Giá
                            </div>
                            <div class="col-md-4">
                                <input name="gia" id="tbGiaTien" class="form-control">
                            </div>


                            <div class="col-md-2">
                                Số lượng
                            </div>
                            <div class="col-md-4">
                                <input name="soluong" id="tbSoLuong" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" name="id" value="">
                            Save
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>
    <!-- /.modal -->


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Tên máy</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php


        foreach ($products->result_array() as $product) {
            ?>
            <tr id="row-<?php echo $product["ID"] ?>">
                <td id="cotID-<?php echo $product["ID"]; ?>" style="display: none;"><?php echo $product["ID"]; ?></td>
                <td id="cotTenHang-<?php echo $product["ID"]; ?>"><?php echo $product["TENHANG"]; ?></td>
                <td id="cotMota-<?php echo $product["ID"]; ?>"><?php echo $product["MOTA"]; ?></td>
                <td id="cotSoLuong-<?php echo $product["ID"]; ?>"><?php echo $product["SOLUONG"]; ?></td>
                <td id="cotGiaTien-<?php echo $product["ID"]; ?>"><?php echo $product["GIATIEN"]; ?></td>

                <td>


                    <button type="button" value="<?php echo $product["ID"]; ?>" class="btn btn-warning btn-edit"
                            id="<td id=" cotID-<?php echo $product["ID"]; ?>" data-toggle="modal"
                    data-target="#myModal">Edit</button>
                    &nbsp;

                    <a class="btn btn-danger"
                       href="<?php echo site_url(); ?>/huu_adminpage/deleteProduct/<?php echo $product["ID"]; ?>">Delete</a>

                </td>


            </tr>

        <?php }

        ?>
        </tbody>
    </table>


</div>

<?php  echo $this->pagination->create_links(); ?>

</body>


</html>