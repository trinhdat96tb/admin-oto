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
        </style>
    </head>
    <body>
        <?php require_once("header.php") ?>
        <div class="wrapper">
            <div class="container">
                <div style="padding-top:120px">
                    <h2>Chi tiết sản phẩm</h2>
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Id sản phẩm</label>
                                <input type="nameImg" class="form-control" id="nameImg" placeholder="Enter name image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tên sản phẩm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter link image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ảnh sẩn phẩm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter location image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Phiên bản</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter location image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Số sàn</label>
                                <input type="nameImg" class="form-control" id="nameImg" placeholder="Enter name image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Chất liệu ghế</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter link image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Công suất cực đại</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter location image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Mô men xoắn cực đại</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter mô men xoắn cực đại">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id_ctsp</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Phiên bản</th>
                                <th>Số sàn</th>
                                <th>Số chỗ ngồi</th>
                                <th>Chất liệu ghế</th>
                                <th>Công suất cực đại</th>
                                <th>Mô men xoắn cực đại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teana</td>
                                <td>../images/product/teana.jpg</td>
                                <td>2.5 SL</td>
                                <td>5</td>
                                <td>5</td>
                                <td>Da</td>
                                <td>161/3600 (Hp/rpm)</td>
                                <td>403/2000 (Nm /rpm)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>X-Trail</td>
                                <td>../images/product/x-trail.jpg</td>
                                <td>V-series 2.0 SL Premium</td>
                                <td>5</td>
                                <td>5+2</td>
                                <td>Nỉ</td>
                                <td>161/3600 (Hp/rpm)</td>
                                <td>403/2000 (Nm /rpm)</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>X-Trail</td>
                                <td>../images/product/x-trail.jpg</td>
                                <td>V-series 2.0 SL Luxury</td>
                                <td>4</td>
                                <td>5</td>
                                <td>Da</td>
                                <td>161/3600 (Hp/rpm)</td>
                                <td>403/2000 (Nm /rpm)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Navara</td>
                                <td>../images/product/navara.jpg</td>
                                <td>PREMIUM R (EL)</td>
                                <td>4</td>
                                <td>5</td>
                                <td>Da</td>
                                <td>161/3600 (Hp/rpm)</td>
                                <td>403/2000 (Nm /rpm)</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sunny</td>
                                <td>../images/product/sunny.jpg</td>
                                <td>XL</td>
                                <td>4</td>
                                <td>5</td>
                                <td>Da</td>
                                <td>161/3600 (Hp/rpm)</td>
                                <td>403/2000 (Nm /rpm)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once("footer.php") ?>
    </body>
</html>