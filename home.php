<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">



        <!-- Navigation-->


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Trần Nhật Duật</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/me.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Về tôi</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Sở thích</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Học tập</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Admin</a></li>
                </ul>
            </div>
        </nav>










        <!-- Page Content-->


        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        TRẦN NHẬT
                        <span class="text-primary">DUẬT</span>
                    </h1>
                    <div class="subheading mb-5">
                        Sa Hạ, Hoàng Nam, Nghĩa Hưng, Nam Định, SĐT 0866546300 ·
                        <a href="mailto:1851061357@e.tlu.edu.vn">1851061357@e.tlu.edu.vn</a>
                    </div>
                    <p>Xin Chào! Tôi là Duật Trần Nhật. Hiện tại tôi đang theo học ngành <b>Công Nghệ Thông Tin </b> tại trường <b>Đại học thủy lợi</b></p>
                    <p>Tôi cũng chỉ mới chập chững vào nghề thôi nên kinh nghiệm không có dày dặn, mong mọi người ủng hộ và giúp đỡ</p>
                    <p><b>Thanks for watching!!!</b></p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.instagram.com/18huskywannafly/"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="https://github.com/huskywannafly3081"><i class="fab fa-github"></i></a>
                        
                        <a class="social-icon" href="https://www.facebook.com/trannhatduat/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />









            <!-- Experience-->


            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Sở thích</h2>
                    

                    <div>
                    <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        
        $conn = mysqli_connect('localhost', 'root','', 'btl2');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(idst) as total from st');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        //$result = mysqli_query($conn, "SELECT * FROM users LIMIT $start, $limit");
 
        ?>

   
   


                    
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM st";
                    if($result = mysqli_query($conn, "SELECT * FROM st LIMIT $start, $limit")){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Tên</th>";
                                        echo "<th>Nội dung</th>";
                                       
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['namest'] . "</td>";
                                        echo "<td>" . $row['noidungst'] . "</td>";
                                        
                                        
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            
                        } 
                        
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }





                    
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="displayst.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="displayst.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="displayst.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        







                    </div>




                </div>
            </section>
            <hr class="m-0" />








            <!-- Education-->


            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>

                    <div>

                    <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        
        $conn = mysqli_connect('localhost', 'root','', 'btl2');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(idedu) as total from edu');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 25;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        //$result = mysqli_query($conn, "SELECT * FROM users LIMIT $start, $limit");
 
        ?>




                    
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM edu";
                    if($result = mysqli_query($conn, "SELECT * FROM edu LIMIT $start, $limit")){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                       
                                        echo "<th>Tên</th>";
                                        echo "<th>Bắt đầu</th>";
                                        echo "<th>Kết thúc</th>";
                                        echo "<th>Nội dung</th>";
                                        

                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['nameedu'] . "</td>";
                                        echo "<td>" . $row['timestart'] . "</td>";
                                        echo "<td>" . $row['timeend'] . "</td>";
                                        echo "<td>" . $row['noidungedu'] . "</td>";

                                        
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            
                        } 
                        
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }





                    
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="displayedu.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="displayedu.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="displayedu.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>







                    </div>
                    
                    
                </div>
            </section>
            <hr class="m-0" />








            <!-- Skills-->


            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>




                    <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        
        $conn = mysqli_connect('localhost', 'root','', 'btl2');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(idskin) as total from skin');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        //$result = mysqli_query($conn, "SELECT * FROM users LIMIT $start, $limit");
 
        
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM skin";
                    if($result = mysqli_query($conn, "SELECT * FROM skin LIMIT $start, $limit")){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                       
                                        echo "<th>Tên</th>";
                                        echo "<th>Nội dung</th>";
                                        echo "<th>Thông thạo(%)</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['nameskin'] . "</td>";
                                        echo "<td>" . $row['noidung'] . "</td>";
                                        echo "<td>" . $row['phantram'] . "</td>";
                                        
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            
                        } 
                        
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }





                    
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="home.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="home.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="home.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        



                    




                    
                </div>
            </section>
            <hr class="m-0" />









            <!-- Liên hệ-->


            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">LIÊN HỆ</h2>
                    <form action="send.php" method="post">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Liên hệ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">Name</label>
                                    <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="..." required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Chủ đề</label>
                                    <input type="text" name="chu" class="form-control" id="validationDefault02" placeholder="..." required>
                                </div>



                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Nội dung</label>
                                    <input type="text" name="sdt" class="form-control" id="validationDefault02" placeholder="..." required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Email</label>
                                    <input type="email" name="email" class="form-control" id="validationDefault02" placeholder="..." required>
                                </div>
                                
                            
                            
                            
                            
                            <div class="dropdown-divider"></div>
                            <button type="submit" class="btn btn-primary">GỬI</button>
                            <div class="dropdown-divider"></div>
                            
                        </div>
                        
                    </div>
                </div>
            </form>

                    








                </div>
            </section>
            <hr class="m-0" />









            <!-- Login-->



            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Login</h2>



                    <form action="login.php" method="post">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email..." required>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password..." required>
                            </div>
                            <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="dropdownCheck">
                                Remember me
                            </label>
                        </div> -->
                            <button type="submit" class="btn btn-primary" name="sign-in">Sign in</button>
                            <div class="dropdown-divider"></div>
                            <a type="button" class="dropdown-item" href="#" data-dismiss="modal" data-toggle="modal" data-target="#sign-up">
                                
                            </a>

                            
                        </div>
                        
                    </div>
                </div>
            </form>
                    
                </div>
            </section>
        </div>






        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
