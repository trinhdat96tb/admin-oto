<html>
    <head>
        <title>Ngoại thất</title>
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
                    <h2>Ngoại thất</h2>
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
                                <label for="pwd">Cụm đèn pha</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Cản trước</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Cản sau</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Ốp sườn xe</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Kính hậu sấy điện</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Gương chiếu hậu</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Lưới tản nhiệt viền crôm</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Gạt mưa trước</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Tay nắm cửa ngoài mạ crôm</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Cánh lướt gió</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Id sản phẩm</th>
                                <th>Phiên bản</th>
                                <th>Ảnh chi tiết</th>
                                <th>Cụm đèn pha</th>
                                <th>Cản trước</th>
                                <th>Cản sau</th>
                                <th>Ốp sườn xe</th>
                                <th>Kính hậu sấy điện</th>
                                <th>Gương chiếu hậu</th>
                                <th>Lưới tản nhiệt viền crôm</th>
                                <th>Gạt mưa trước</th>
                                <th>Tay nắm cửa ngoài mạ crôm</th>
                                <th>Cánh lướt gió</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sunny XL</td>
                                <td>../images/1.jpg</td>
                                <td>Halogen</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td>Chỉnh tay. Có chế độ gạt mưa gián đoạn</td>
                                <td>Có</td>
                                <td>Có</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sunny XL</td>
                                <td>../images/2.jpg</td>
                                <td>Halogen</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Chỉnh tay. Có chế độ gạt mưa gián đoạn</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sunny XL</td>
                                <td>../images/3.jpg</td>
                                <td>Halogen</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Chỉnh tay. Có chế độ gạt mưa gián đoạn</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sunny XL</td>
                                <td>../images/4.jpg</td>
                                <td>Halogen</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Chỉnh tay. Có chế độ gạt mưa gián đoạn</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sunny XL</td>
                                <td>../images/5.jpg</td>
                                <td>Halogen</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Không</td>
                                <td>Có</td>
                                <td>Chỉnh tay. Có chế độ gạt mưa gián đoạn</td>
                                <td>Không</td>
                                <td>Có</td>
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