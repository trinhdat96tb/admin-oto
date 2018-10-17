<html>
    <head>
        <title>Slider</title>
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
                    <h2>SLIDE HOME</h2>
                    <form>
                        <div class="form-group">
                            <label for="nameImg">Name image</label>
                            <input type="nameImg" class="form-control" id="nameImg" placeholder="Enter name image">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Link</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter link image">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Location</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter location image">
                        </div>
                        <button id="btn_submit" type="submit" class="btn btn-danger" onclick="submitSlide();">Submit</button>
                    </form>
                    <div class="table-responsive" style="padding:30px">          
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name Image</th>
                                    <th>Link</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>slide1</td>
                                    <td>../images/slide/slide1.jpg</td>
                                    <td>home</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#myModal">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                        <!-- modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Modal Header</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Some text in the modal.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>slide2</td>
                                    <td>../images/slide/slide2.jpg</td>
                                    <td>home</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>slide3</td>
                                    <td>../images/slide/slide3.jpg</td>
                                    <td>home</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>slide4</td>
                                    <td>../images/slide/slide4.jpg</td>
                                    <td>home</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>slide5</td>
                                    <td>../images/slide/slide5.jpg</td>
                                    <td>home</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>slide6</td>
                                    <td>../images/slide/slide5.jpg</td>
                                    <td>product</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>slide5</td>
                                    <td>../images/slide/slide5.jpg</td>
                                    <td>product</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>slide5</td>
                                    <td>../images/slide/slide5.jpg</td>
                                    <td>product</td>
                                    <td>
                                        <button id="btn_edit">Edit</button>
                                        <button id="btn_delete" onclick="deleteSlide();">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>slide5</td>
                                    <td>../images/slide/slide5.jpg</td>
                                    <td>product</td>
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
        </div>
        <?php require_once("footer.php") ?>
    </body>
</html>