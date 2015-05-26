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

    <script type="text/javascript" src="../../js/my_javascript.js"></script>


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
    <?php

//    echo $products["ID"];
    foreach ($products as $product)
    {
        echo $product["TENHANG"] . "<br/>";
    }


    ?>

    <table class="table table-striped">
        <caption>Striped Table Layout</caption>
        <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Pincode</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tanmay</td>
            <td>Bangalore</td>
            <td>560001</td>

            <td>
                <button class="btn btn-warning" value="Edit">Edit</button>
                &nbsp;
                <button class="btn btn-danger" value="Delete">Delete</button>
            </td>

        </tr>

        </tbody>
    </table>


</div>


</body>


</html>