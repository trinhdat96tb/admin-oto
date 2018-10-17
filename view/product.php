<html>
    <head>
        <title>Sản phẩm</title>
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
        </style>
    </head>
    <body>
        <?php require_once("header.php") ?>
        <div class="wrapper">
            <div class="container">
                <div style="padding-top:120px">
                    <h2>Sản phẩm</h2>
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Id sản phẩm</label>
                                <input type="nameImg" class="form-control" id="nameImg" placeholder="Input...">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tên sản phẩm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Input...">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Phiên bản</label>
                                <input type="nameImg" class="form-control" id="nameImg" placeholder="Input...">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ảnh sản phẩm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Input...">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Giá sản phẩm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Input...">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Giá khuyến mãi</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Input...">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id_sp</th>
                                <th>Tên sản phẩm</th>
                                <th>Phiên bản</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Giá KM</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>XV PREMIUM</td>
                                <td>../images/product/sunny.jpg</td>
                                <td>465.000.000đ</td>
                                <td>450.000.000đ</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>X-Trail</td>
                                <td>V-series 2.0 SL Luxury</td>
                                <td>../images/product/xtrail.jpg</td>
                                <td>1.195.000.000đ</td>
                                <td>1.125.000.000đ</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Navara</td>
                                <td>SL</td>
                                <td>../images/product/navara.jpg</td>
                                <td>795.000.000đ</td>
                                <td>750.000.000đ</td><td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Teana</td>
                                <td>2.5 SL</td>
                                <td>../images/product/teana.jpg</td>
                                <td>1.195.000.000đ</td>
                                <td>1.125.000.000đ</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>sunny</td>
                                <td>XL</td>
                                <td>../images/product/sunny.jpg</td>
                                <td>1.195.000.000đ</td>
                                <td>1.125.000.000đ</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
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