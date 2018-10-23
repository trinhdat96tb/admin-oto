<html>
    <head>
        <title>Contact</title>
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
                padding-top:100px;

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
                    <h2>Khách hàng</h2>
                    <div class="table-responsive" style="padding:30px">          
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Tên khách hàng</th>
                                    <th>Sđt</th>
                                    <th>Email</th>
                                    <th>Lời nhắn</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td>1</td>
                                    <td>Trịnh</td>
                                    <td>0886567096</td>
                                    <td>chaydan9xtb@gmail.com</td>
                                    <td>liên hệ lại để tư vấn giúp tôi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Công</td>
                                    <td>0886567096</td>
                                    <td>trinhdat96tb@gmail.com</td>
                                    <td>liên hệ lại để tư vấn giúp tôi</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Đạt</td>
                                    <td>0886567096</td>
                                    <td>congdat.trinh@tanchonggroup.com</td>
                                    <td>liên hệ lại để tư vấn giúp tôi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bùi</td>
                                    <td>0886567096</td>
                                    <td>buiminh@gmail.com</td>
                                    <td>liên hệ lại để tư vấn giúp tôi</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Minh</td>
                                    <td>0886567096</td>
                                    <td>minhsml@gmail.com</td>
                                    <td>liên hệ lại để tư vấn giúp tôi</td>
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