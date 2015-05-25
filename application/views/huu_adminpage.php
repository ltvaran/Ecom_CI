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


    <script type="text/javascript">





        var controller = 'huu_adminpage';
        var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

        function deleteAction(id){
            $.ajax({
                'url' : base_url + '/' + controller + '/deleteProduct',
                'type' : 'POST', //the way you want to send data to your URL
                'data' : {'id' : id},
                'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                    var container = $('#container'); //jquery selector (get element by id)
                    if(data){
                        container.html(data);
                    }
                }
            });
        }



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
            <tr>
                <td><?php echo $product["TENHANG"]; ?></td>
                <td><?php echo $product["SOLUONG"]; ?></td>
                <td><?php echo $product["GIATIEN"]; ?></td>

                <td>
                    <button class="btn btn-warning " value="<?php echo $product["ID"]; ?>">Edit</button>
                    &nbsp;
                    <button class="btn btn-danger btDelete" id="xoa"  value="<?php echo $product["ID"]; ?>"   onclick="deleteAction(1);">Delete</button>
                </td>


            </tr>

        <?php }
        ?>
        </tbody>
    </table>


</div>


</body>


</html>