<html>
    <head>
        <title>Tin Tức</title>
        <meta charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/product.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .container h2{
                color:red;
            }
            .top-main{
                padding-top:90px;
            }
            .container h2{
                color:red;
            }
            .table tr td{
                text-algin:center;
            }
            @media screen and (max-width: 800px){
                .top-main{
                    padding-top:50px !important;
                }
            }
        </style>
        <script>   
            function deleteSlide() {
                alert('do you want to delete?');
            }
            function submitSlide(){
                alert('submit success');
            }
            
        </script>
    </head>
    <body>
        <?php require_once("header.php") ?>
        <div class="wrapper">
            <div class="container">
                <div style="padding-top:120px">
                    <h2>TIN TỨC</h2>
                    <form>
                        <div class="form-group">
                            <label for="nameImg">Tiêu đề:</label>
                            <input type="nameImg" class="form-control" id="nameImg" placeholder="Enter title document">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Hình ảnh:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter image document">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Nội dung:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter content document">
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <div class="table-responsive" style="padding:30px">          
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Ghi chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc toàn quốc 2018</td>
                                    <td>
                                        <p>Hà Nội, trong hai ngày 06 và 07/10/2018, Nissan Việt Nam đã tổ chức thành công Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc toàn quốc 2018. Sự kiện diễn ra tại Đại lý Nissan Phạm Văn Đồng với sự tham gia của 34 Kỹ thuật viên đến từ các Đại lý Nissan 3S trên toàn quốc.</p>
                                        <p>Bên cạnh việc mang đến những sản phẩm tiên phong về công nghệ thì Nissan Việt Nam cũng không ngừng nỗ lực để đáp ứng tốt nhất các nhu cầu của khách hàng về dịch vụ trước và sau bán hàng. Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc chính là cơ hội để các kỹ thuật viên được cọ xát trau dồi kiến thức chuyên môn lẫn kỹ năng thực hành, nâng cao chất lượng dịch vụ, đồng thời chuẩn hóa tiêu chuẩn toàn cầu cho kỹ thuật viên trên toàn bộ hệ thống Nissan 3S tại Việt Nam.</p>
                                        <p>Đặc biệt, đây là sự kiện nằm trong khuân khổ Hội thi tay nghề kỹ thuật viên xuất sắc toàn cầu (NISTEC) được tổ chức tại Thái Lan và Nhật Bản. Chính vì vậy, các kỹ thuật viên xuất sắc được lựa chọn trong hội thi sẽ là những hạt giống tốt để tiếp tục được đào tạo và đại diện cho Việt Nam tham dự các sân chơi lớn trên trường quốc tế.</p>
                                    </td>
                                    <td style="text-align:center">
                                        <button>Edit</button>
                                        <button style="margin-top:5px">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chương trình khuyến mại tháng 10/2018</td>
                                    <td>
                                        <p>Hà Nội, trong hai ngày 06 và 07/10/2018, Nissan Việt Nam đã tổ chức thành công Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc toàn quốc 2018. Sự kiện diễn ra tại Đại lý Nissan Phạm Văn Đồng với sự tham gia của 34 Kỹ thuật viên đến từ các Đại lý Nissan 3S trên toàn quốc.</p>
                                        <p>Bên cạnh việc mang đến những sản phẩm tiên phong về công nghệ thì Nissan Việt Nam cũng không ngừng nỗ lực để đáp ứng tốt nhất các nhu cầu của khách hàng về dịch vụ trước và sau bán hàng. Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc chính là cơ hội để các kỹ thuật viên được cọ xát trau dồi kiến thức chuyên môn lẫn kỹ năng thực hành, nâng cao chất lượng dịch vụ, đồng thời chuẩn hóa tiêu chuẩn toàn cầu cho kỹ thuật viên trên toàn bộ hệ thống Nissan 3S tại Việt Nam.</p>
                                        <p>Đặc biệt, đây là sự kiện nằm trong khuân khổ Hội thi tay nghề kỹ thuật viên xuất sắc toàn cầu (NISTEC) được tổ chức tại Thái Lan và Nhật Bản. Chính vì vậy, các kỹ thuật viên xuất sắc được lựa chọn trong hội thi sẽ là những hạt giống tốt để tiếp tục được đào tạo và đại diện cho Việt Nam tham dự các sân chơi lớn trên trường quốc tế.</p>
                                    </td>
                                    <td style="text-align:center">
                                        <button>Edit</button>
                                        <button style="margin-top:5px">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nissan Navara xuất sắc giành ngôi vị Á quân tại VOC 2018</td>
                                    <td>
                                        <p>Hà Nội, trong hai ngày 06 và 07/10/2018, Nissan Việt Nam đã tổ chức thành công Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc toàn quốc 2018. Sự kiện diễn ra tại Đại lý Nissan Phạm Văn Đồng với sự tham gia của 34 Kỹ thuật viên đến từ các Đại lý Nissan 3S trên toàn quốc.</p>
                                        <p>Bên cạnh việc mang đến những sản phẩm tiên phong về công nghệ thì Nissan Việt Nam cũng không ngừng nỗ lực để đáp ứng tốt nhất các nhu cầu của khách hàng về dịch vụ trước và sau bán hàng. Hội thi tay nghề Kỹ thuật viên Nissan xuất sắc chính là cơ hội để các kỹ thuật viên được cọ xát trau dồi kiến thức chuyên môn lẫn kỹ năng thực hành, nâng cao chất lượng dịch vụ, đồng thời chuẩn hóa tiêu chuẩn toàn cầu cho kỹ thuật viên trên toàn bộ hệ thống Nissan 3S tại Việt Nam.</p>
                                        <p>Đặc biệt, đây là sự kiện nằm trong khuân khổ Hội thi tay nghề kỹ thuật viên xuất sắc toàn cầu (NISTEC) được tổ chức tại Thái Lan và Nhật Bản. Chính vì vậy, các kỹ thuật viên xuất sắc được lựa chọn trong hội thi sẽ là những hạt giống tốt để tiếp tục được đào tạo và đại diện cho Việt Nam tham dự các sân chơi lớn trên trường quốc tế.</p>
                                    </td>
                                    <td style="text-align:center">
                                        <button>Edit</button>
                                        <button style="margin-top:5px">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("footer.php") ?>
    </body>
</html>