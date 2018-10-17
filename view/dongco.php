<html>
    <head>
        <title>Động cơ</title>
        <meta charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/product.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .row .col-sm-6{
                text-align:left;
            }
            .container h2{
                color:red;
            }
            .table tr th{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <?php require_once("header.php") ?>
        <div class="wrapper">
            <div class="container">
                <div style="padding-top:120px">
                    <h2>Động Cơ</h2>
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Id sản phẩm</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tên sản phẩm</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Mã số động cơ</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Loại động cơ</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Dung tích xi-lanh (cc)</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hành trình pít-tông (mm)</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Công suất cực đại (kW (PS)/rpm)</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Mô-men xoắn cực đại</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tỉ số nén</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hệ thống phun nhiên liệu</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Loại nhiên liệu</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Dung tích bình nhiên liệu</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã số động cơ</th>
                                <th>Loại động cơ</th>
                                <th>Dung tích xi-lanh (cc)</th>
                                <th>Hành trình pít-tông (mm)</th>
                                <th>Công suất cực đại (kW (PS)/rpm)</th>
                                <th>Mô-men xoắn cực đại</th>
                                <th>Tỉ số nén</th>
                                <th>Hệ thống phun nhiên liệu</th>
                                <th>Loại nhiên liệu</th>
                                <th>Dung tích bình nhiên liệu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>X-Trail</td>
                                <td>HR15</td>
                                <td>Trục cam đôi – 4 xilanh thẳng hàng</td>
                                <td>1498</td>
                                <td>78,0 x 78,4</td>
                                <td>73 (99,3) / 6000</td>
                                <td>134 (13,7) / 4000</td>
                                <td>10,1</td>
                                <td> Hệ thống điều khiển Phun xăng tích hợp Đánh lửa điện tử</td>
                                <td>Xăng không chì, RON 92 hoặc RON 95</td>
                                <td>83</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>X-Trail</td>
                                <td>HR15</td>
                                <td>Trục cam đôi – 4 xilanh thẳng hàng</td>
                                <td>1498</td>
                                <td>78,0 x 78,4</td>
                                <td>73 (99,3) / 6000</td>
                                <td>134 (13,7) / 4000</td>
                                <td>10,1</td>
                                <td> Hệ thống điều khiển Phun xăng tích hợp Đánh lửa điện tử</td>
                                <td>Xăng không chì, RON 92 hoặc RON 95</td>
                                <td>83</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>X-Trail</td>
                                <td>HR15</td>
                                <td>Trục cam đôi – 4 xilanh thẳng hàng</td>
                                <td>1498</td>
                                <td>78,0 x 78,4</td>
                                <td>73 (99,3) / 6000</td>
                                <td>134 (13,7) / 4000</td>
                                <td>10,1</td>
                                <td> Hệ thống điều khiển Phun xăng tích hợp Đánh lửa điện tử</td>
                                <td>Xăng không chì, RON 92 hoặc RON 95</td>
                                <td>83</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>X-Trail</td>
                                <td>HR15</td>
                                <td>Trục cam đôi – 4 xilanh thẳng hàng</td>
                                <td>1498</td>
                                <td>78,0 x 78,4</td>
                                <td>73 (99,3) / 6000</td>
                                <td>134 (13,7) / 4000</td>
                                <td>10,1</td>
                                <td> Hệ thống điều khiển Phun xăng tích hợp Đánh lửa điện tử</td>
                                <td>Xăng không chì, RON 92 hoặc RON 95</td>
                                <td>83</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>X-Trail</td>
                                <td>HR15</td>
                                <td>Trục cam đôi – 4 xilanh thẳng hàng</td>
                                <td>1498</td>
                                <td>78,0 x 78,4</td>
                                <td>73 (99,3) / 6000</td>
                                <td>134 (13,7) / 4000</td>
                                <td>10,1</td>
                                <td> Hệ thống điều khiển Phun xăng tích hợp Đánh lửa điện tử</td>
                                <td>Xăng không chì, RON 92 hoặc RON 95</td>
                                <td>83</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("footer.php") ?>
    </body>
</html>