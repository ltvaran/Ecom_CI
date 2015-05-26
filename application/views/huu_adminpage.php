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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">

    <link rel="stylesheet" href="../../css/my_css.css">

    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.confirm.min.js"></script>
    <script type="text/javascript" src="../../js/my_javascript.js"></script>


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
        </div>
    </nav>


    <!-- Modal -->
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
                            Tên sản phẩm
                        </div>
                        <div class="col-md-4">
                            <input class="form-control">
                        </div>
                        <div class="col-md-2">
                            Mô tả
                        </div>
                        <div class="col-md-4">
                            <input class="form-control">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Cancel
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <table class="table table-striped">
        <caption>Striped Table Layout</caption>
        <thead>
        <tr>
            <th>Tên máy</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php


        foreach ($products as $product) {
            ?>
            <tr id="row-<?php echo $product["ID"] ?>">
                <td><?php echo $product["TENHANG"]; ?></td>
                <td><?php echo $product["SOLUONG"]; ?></td>
                <td><?php echo $product["GIATIEN"]; ?></td>

                <td>


                    <a class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</a>
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


</body>


</html>