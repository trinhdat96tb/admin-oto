<html>
    <head>
        <title>Nội thất</title>
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
                    <h2>Nội Thất</h2>
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Id sản phẩm</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Phiên bản</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ảnh chi tiết</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Đồng hồ hiển thị đa thông tin</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Màn hình kết nối điện thoại thông minh</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Gương chiếu hậu trong xe chống lóa</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ngăn đựng đồ cửa trước với giá để chai</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hộc đựng găng tay</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hệ thống điều hòa nhiệt độ</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Dung tích khoang chứa đồ</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tựa tay hàng ghế phía sau với giá để cốc</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Đèn trần</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Cửa gió hàng ghế phía sau</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hệ thống âm thanh</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Chất liệu ghế</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ghế lái chỉnh tay, trượt, gập & nâng hạ/Ghế phụ</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ngăn chứa đồ sau ghế phụ trước</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tay nắm cửa trong mạ crôm</label>
                                <input type="password" class="form-control" id="pwd" placeholder="input">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead>
                            <tr>
                                <th style="text-align:center">Id</th>
                                <th style="text-align:center">Phiên bản</th>
                                <th style="text-align:center">Ảnh</th>
                                <th style="text-align:center">Đồng hồ hiển thị đa thông tin</th>
                                <th style="text-align:center">Màn hình kết nối điện thoại thông minh</th>
                                <th style="text-align:center">Gương chiếu hậu trong xe</th>
                                <th style="text-align:center">Ngăn đựng đồ cửa trước</th>
                                <th style="text-align:center">Hộc đựng găng tay</th>
                                <th style="text-align:center">Hệ thống điều hòa nhiệt độ</th>
                                <th style="text-align:center">Dung tích khoang chứa đồ</th>
                                <th style="text-align:center">Tựa tay hàng ghế phía</th>
                                <th style="text-align:center">Đèn trần</th>
                                <th style="text-align:center">Cửa gió hàng ghế phía sau</th>
                                <th style="text-align:center">Âm thanh</th>
                                <th style="text-align:center">Chất liệu ghế</th>
                                <th style="text-align:center">Ghế lái chỉnh tay</th>
                                <th style="text-align:center">Ngăn chứa đồ sau ghế phụ trước</th>
                                <th style="text-align:center">Tay nắm cửa trong mạ crôm</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sunny XL</td>
                                <td>../images/1.jpg</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>490 lít</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>4 loa 2DIN AM/FM & 1CD</td>
                                <td>Da</td>
                                <td>Chỉnh tay, trượt & gập</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sunny XL</td>
                                <td>../images/2.jpg</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>490 lít</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>4 loa 2DIN AM/FM & 1CD</td>
                                <td>Nỉ</td>
                                <td>Chỉnh tay, trượt & gập</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sunny XL</td>
                                <td>../images/3.jpg</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>490 lít</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>4 loa 2DIN AM/FM & 1CD</td>
                                <td>Da</td>
                                <td>Chỉnh tay, trượt & gập</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sunny XL</td>
                                <td>../images/5.jpg</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>490 lít</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>4 loa 2DIN AM/FM & 1CD</td>
                                <td>Nỉ</td>
                                <td>Chỉnh tay, trượt & gập</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sunny XL</td>
                                <td>../images/6.jpg</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>490 lít</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>4 loa 2DIN AM/FM & 1CD</td>
                                <td>Da</td>
                                <td>Chỉnh tay, trượt & gập</td>
                                <td>Có</td>
                                <td>Có</td>
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