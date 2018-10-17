<html>
    <head>
        <title>Thông Số Khác</title>
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
                    <h2>Thông Số Khác</h2>
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
                                <label for="pwd">Hộp số</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hệ thống phanh trước và Sau</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nameImg">Hệ thống truyền động</label>
                                <input type="nameImg" class="form-control" id="nameImg"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Hệ thống lái</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Mức tiêu thụ nhiên liệu chu trình đô thị</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Mức tiêu thụ nhiên liệu chu trình ngoài đô thị</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Kích thước mâm xe</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="pwd">Kích thước lốp xe</label>
                                <input type="password" class="form-control" id="pwd"  placeholder="input">
                            </div>
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead>
                            <tr>
                                <th style="text-align:center">Id sản phẩm</th>
                                <th style="text-align:center">Phiên bản</th>
                                <th style="text-align:center">Hộp số</th>
                                <th style="text-align:center">Hệ thống phanh trước và Sau</th>
                                <th style="text-align:center">Hệ thống truyền động</th>
                                <th style="text-align:center">Hệ thống lái</th>
                                <th style="text-align:center">Mức tiêu thụ nhiên liệu chu trình đô thị</th>
                                <th style="text-align:center">Mức tiêu thụ nhiên liệu chu trình ngoài đô thị</th>
                                <th style="text-align:center">Kích thước mâm xe</th>
                                <th style="text-align:center">Kích thước lốp xe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>Hộp số tay 5 cấp / 5MT</td>
                                <td>Phanh đĩa x tang trống</td>
                                <td>2WD</td>
                                <td>Tay lái gật gù & trợ lực điện</td>
                                <td>6,4</td>
                                <td>8,75</td>
                                <td>Mâm Thép 14”x5.5J/14”x5.5J Steel</td>
                                <td>175/70 R14</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>Hộp số tay 5 cấp / 5MT</td>
                                <td>Phanh đĩa x tang trống</td>
                                <td>2WD</td>
                                <td>Tay lái gật gù & trợ lực điện</td>
                                <td>6,4</td>
                                <td>8,75</td>
                                <td>Mâm Thép 14”x5.5J/14”x5.5J Steel</td>
                                <td>175/70 R14</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>Hộp số tay 5 cấp / 5MT</td>
                                <td>Phanh đĩa x tang trống</td>
                                <td>2WD</td>
                                <td>Tay lái gật gù & trợ lực điện</td>
                                <td>6,4</td>
                                <td>8,75</td>
                                <td>Mâm Thép 14”x5.5J/14”x5.5J Steel</td>
                                <td>175/70 R14</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>Hộp số tay 5 cấp / 5MT</td>
                                <td>Phanh đĩa x tang trống</td>
                                <td>2WD</td>
                                <td>Tay lái gật gù & trợ lực điện</td>
                                <td>6,4</td>
                                <td>8,75</td>
                                <td>Mâm Thép 14”x5.5J/14”x5.5J Steel</td>
                                <td>175/70 R14</td>
                                <td style="text-align:center">
                                    <button id="btn_edit">Edit</button>
                                    <button id="btn_delete" onclick="deleteSlide();" style="margin-top:5px">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sunny</td>
                                <td>Hộp số tay 5 cấp / 5MT</td>
                                <td>Phanh đĩa x tang trống</td>
                                <td>2WD</td>
                                <td>Tay lái gật gù & trợ lực điện</td>
                                <td>6,4</td>
                                <td>8,75</td>
                                <td>Mâm Thép 14”x5.5J/14”x5.5J Steel</td>
                                <td>175/70 R14</td>
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