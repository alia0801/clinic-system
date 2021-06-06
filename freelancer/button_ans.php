<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="http://127.0.0.1/clinic-system/index.php">My clinic database system</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1/clinic-system/index.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1/clinic-system/freelancer/query_page.php">Query</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1/clinic-system/freelancer/button_page.php">Button</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." /> -->
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Query answer</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <!-- <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> -->
            </div>
        </header>
        <?php
// 接收前一類輸入的類別，用來判斷之後做什麼處理
$_SESSION["type"] = $_POST["type"];
$query_type = strtolower($_POST["type"]);

//若是insert類，轉到下一頁繼續輸入
if ($query_type=='insert') {
    header("Location: http://127.0.0.1/clinic-system/freelancer/insert_page.php?table=".$_POST["insert_table"]); 
    exit; //確保重定向後，後續代碼不會被執行 
}

// 連接資料庫
$servername = "localhost";
$username = "root";
$password = "esfortest";
$dbname = "clinic";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 生成sql指令
// 分別判斷指令是屬於哪個類別後進行處理
if($query_type=='select'){
    
    // 取得前一頁輸入的資料並生成sql指令
    $table = $_POST['select_table'];
    if( ($table != 'register_record') and ($table != 'treat_record' )){
        // 取得資料
        $id = $_POST['select_id_1'];
        $column = $_POST['select_value'];

        //生成指令
        if( $column != '*'){
            $sql = "select `".$column."` from `".$table."` where `id` = ".$id; 
        }
        else{
            $sql = "select * from `".$table."` where `id` = ".$id;
        }
    }
    elseif ($table == 'register_record') {
        // 取得資料
        $id_1 = $_POST['select_id_1']; //outpatient_id
        $id_2 = $_POST['select_id_2']; //patient_id
        $id_3 = $_POST['select_id_3']; //nurse_id
        $column = $_POST['select_value'];

        //生成指令
        if( $column != '*'){
            $sql = "select `".$column."` from `".$table."` where ( `outpatient_id` = ".$id_1." and `patient_id` = ".$id_2." and `nurse_id` = ".$id_3.")" ; 
        }
        else{
            $sql = "select * from `".$table."` where ( `outpatient_id` = ".$id_1." and `patient_id` = ".$id_2." and `nurse_id` = ".$id_3.")" ; 
        }
    }
    elseif ($table == 'treat_record') {
        // 取得資料
        $id_1 = $_POST['select_id_1']; //doctor_id
        $id_2 = $_POST['select_id_2']; //patient_id
        $id_3 = $_POST['select_id_3']; //outpatient_id
        $column = $_POST['select_value'];

        //生成指令
        if( $column != '*'){
            $sql = "select `".$column."` from `".$table."` where ( `doctor_id` = ".$id_1." and `patient_id` = ".$id_2." and `outpatient_id` = ".$id_3.")" ; 
        }
        else{
            $sql = "select * from `".$table."` where ( `doctor_id` = ".$id_1." and `patient_id` = ".$id_2." and `outpatient_id` = ".$id_3.")" ; 
        }
    }
}
elseif($query_type=='delete'){
    // DELETE FROM table_name WHERE column_name operator value;
    // 取得前一頁輸入的資料並生成sql指令
    $table = $_POST['delete_table'];
    if( ($table != 'register_record') and ($table != 'treat_record' )){
        // 取得資料
        $id = $_POST['delete_id_1'];

        //生成指令
        $sql = "delete FROM `".$table."` WHERE `id` = ".$id;
    }
    elseif ($table == 'register_record') {
        // 取得資料
        $id_1 = $_POST['delete_id_1']; //outpatient_id
        $id_2 = $_POST['delete_id_2']; //patient_id
        $id_3 = $_POST['delete_id_3']; //nurse_id

        //生成指令
        $sql = "delete FROM `".$table."` where ( `outpatient_id` = ".$id_1." and `patient_id` = ".$id_2." and `nurse_id` = ".$id_3.")" ; 
    }
    elseif ($table == 'treat_record') {
        // 取得資料
        $id_1 = $_POST['delete_id_1']; //doctor_id
        $id_2 = $_POST['delete_id_2']; //patient_id
        $id_3 = $_POST['delete_id_3']; //outpatient_id

        //生成指令
        $sql = "delete FROM `".$table."` where ( `doctor_id` = ".$id_1." and `patient_id` = ".$id_2." and `outpatient_id` = ".$id_3.")" ; 
    }
}
elseif($query_type=='update'){
    // UPDATE table_name SET column1=value1, column2=value2, column3=value3··· WHERE some_column=some_value;
    // 取得資料
    $table = $_POST['update_table'];
    $column = $_POST['update_column'];
    
    // 處理取得的資料
    if($column!='salary'){
        $data = "'".$_POST['update_data']."'";
    }
    else{
        $data = $_POST['update_data'];
    }
    
    if( ($table != 'register_record') and ($table != 'treat_record' )){
        // 取得資料
        $id = $_POST['update_id_1'];

        //生成指令
        $sql = "update `".$table."` set `".$column."`=".$data." WHERE `id` = ".$id;
    }
    elseif ($table == 'register_record') {
        // 取得資料
        $id_1 = $_POST['update_id_1']; //outpatient_id
        $id_2 = $_POST['update_id_2']; //patient_id
        $id_3 = $_POST['update_id_3']; //nurse_id

        //生成指令
        $sql = "update `".$table."` set `".$column."`=".$data." where ( `outpatient_id` = ".$id_1." and `patient_id` = ".$id_2." and `nurse_id` = ".$id_3.")" ; 
    }
    elseif ($table == 'treat_record') {
        // 取得資料
        $id_1 = $_POST['update_id_1']; //doctor_id
        $id_2 = $_POST['update_id_2']; //patient_id
        $id_3 = $_POST['update_id_3']; //outpatient_id

        //生成指令
        $sql = "update `".$table."` set `".$column."`=".$data." where ( `doctor_id` = ".$id_1." and `patient_id` = ".$id_2." and `outpatient_id` = ".$id_3.")" ; 
    }
}
elseif($query_type=='nested-in'){
    // 取得資料
    if($_POST['nested_type']=='Nested-In'){
        $type = 'IN';
    }
    elseif($_POST['nested_type']=='Nested-Not In'){
        $type = 'NOT IN';
    }
    $table_select = $_POST['nested_table_select'];
    $select_col = $_POST['nested_column'];
    $select_constraint = $_POST['nested_column_constraint'];
    $nest_select_col = $_POST['nested_column_nest'];
    $nest_table = $_POST['nested_table_nest'];
    $nest_condition = $_POST['nested_condition'];

    //生成指令
    $sql = "SELECT ".$select_col." FROM `".$table_select."` WHERE `".$select_constraint."` ".$type." ( SELECT `".$nest_select_col."` FROM `".$nest_table."` WHERE ".$nest_condition." )";
}
elseif($query_type=='nested-exist'){
    // 取得資料
    if($_POST['exists_type']=='Nested-Exists'){
        $type = 'EXISTS';
    }
    elseif($_POST['exists_type']=='Nested-Not Exists'){
        $type = 'NOT EXISTS';
    }
    $table_select = $_POST['exists_table_select'];
    $select_col = $_POST['exists_column'];
    $nest_select_col = $_POST['exists_column_nest'];
    $nest_table = $_POST['exists_table_nest'];
    $nest_condition = $_POST['exists_condition'];

    // 生成指令
    $sql = "SELECT ".$select_col." FROM `".$table_select."` WHERE ".$type." ( SELECT `".$nest_select_col."` FROM `".$nest_table."` WHERE ".$nest_condition." )";
}
elseif($query_type=='aggregate'){
    // 取得資料
    if($_POST['aggregate_type']=='Aggregate-Count'){
        $type = 'COUNT';
    }
    elseif($_POST['aggregate_type']=='Aggregate-Sum'){
        $type = 'SUM';
    }
    elseif($_POST['aggregate_type']=='Aggregate-Max'){
        $type = 'MAX';
    }
    elseif($_POST['aggregate_type']=='Aggregate-Min'){
        $type = 'MIN';
    }
    elseif($_POST['aggregate_type']=='Aggregate-Avg'){
        $type = 'AVG';
    }
    $col_to_agg = $_POST['aggregate_column'];
    $table = $_POST['aggregate_table'];
    $condition = $_POST['aggregate_condition'];
    
    // 生成指令
    $sql = "select ".$type."(".$col_to_agg.") from `".$table."` where (".$condition.")";
}
elseif($query_type=='aggregate-having'){

    // 取得前一頁輸入的值
    if($_POST['having_type']=='Aggregate-Count'){
        $type = 'COUNT';
    }
    elseif($_POST['having_type']=='Aggregate-Sum'){
        $type = 'SUM';
    }
    elseif($_POST['having_type']=='Aggregate-Max'){
        $type = 'MAX';
    }
    elseif($_POST['having_type']=='Aggregate-Min'){
        $type = 'MIN';
    }
    elseif($_POST['having_type']=='Aggregate-Avg'){
        $type = 'AVG';
    }
    $col_to_agg = $_POST['having_column'];
    $table = $_POST['having_table'];
    $condition = $_POST['having_select_condition'];
    $group_col = $_POST['having_group'];
    $group_condition = $_POST['having_condition'];
    
    // 生成sql語法
    if ($group_col!=''){
        $sql = "SELECT ".$group_col.",".$type."(".$col_to_agg.") FROM `".$table."` WHERE (".$condition.") GROUP BY ".$group_col." HAVING ".$type."(".$col_to_agg.")".$group_condition;
    }
}

// 執行sql
// 分別判斷指令是屬於哪個類別後進行處理
if(($query_type=='select') or ($query_type=='nested-in')or ($query_type=='nested-exist') or ($query_type=='aggregate') or ($query_type=='aggregate-having') ){
    // 對資料庫下指令
    $result = $conn->query($sql);
    
    // 取得結果與各欄位名稱
    $row = mysqli_fetch_array($result);
    $keys1 = array_keys($row);
    $keys = array(0=>$keys1[1]);
    $count = 1;
    if (count($keys1)>=3){
        for ($i=3;$i<count($keys1);$i+=2){
            $keys[$count] = $keys1[$i];
            $count++;
          }
    }
}
else{//不是查詢類(update/delete)
    // 對資料庫下指令
    $result = $conn->query($sql);
}

?>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                <div class="panel-body">
<?php
echo '<p>'.$sql.'</p>';//印出sql指令
// 以下準備輸出結果
    //查詢類以表格方式輸出
    if( ($query_type=='select') or ($query_type=='nested-in')or ($query_type=='nested-exist') or ($query_type=='aggregate') or ($query_type=='aggregate-having') ){
                        echo "<table class='table'>";
                            echo "<thead>";
                                echo '<tr>';
                                    foreach( $keys as $k ){
                                        echo '<th>'.$k.'</th>';
                                    }  
                                echo '</tr>';
                            echo "</thead>";
                            echo "<tbody>";
                                    foreach( $result as $row ){
                                        echo '<tr>';
                                        foreach( $row as $r ){
                                            echo '<td>'.$r.'</td>';
                                        }
                                        echo '</tr>';
                                    }  
                            echo "</tbody>";
                        echo "</table>";
    }
    // 其他類別印出OK
    elseif(($query_type=='delete') or ($query_type=='update')){
        // echo '<p>'.$sql.'</p>';
        echo "<h5> Query OK! </h5>";
    }
?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
