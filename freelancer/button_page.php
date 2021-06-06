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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Button</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">Choose query type and input keyword</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </header>

        <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
    <div class="container">
    <!-- 根據各類query需求，建立輸入欄位 -->
    <form id = "info" action="button_ans.php" method="post" name="info" class="fullwidth">
      <!-- Portfolio Grid Items -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="form-floating">
                            <label for="type">Query type</label>
                            <br><!-- 這裡選擇要query的種類 -->
                                <input type="text" class="form-control" id="type" name="type" list="category" placeholder="Choose a type" value="" autocomplete="off">
                                <datalist id="category">  
                                     <option value="Select">
                                     <option value="Delete">
                                     <option value="Insert">
                                     <option value="Update">
                                     <option value="Nested-In">
                                     <option value="Nested-Exist">
                                     <option value="Aggregate">
                                     <option value="Aggregate-Having">
                                </datalist>
                        <h6> <br> 
                            hint:
                            <br>
                            In table "register_record", id-1 is 'outpatient_id', id-2 is 'patient_id', id-3 is 'nurse_id'.
                            <br>
                            In table "treat_record", id-1 is 'doctor_id', id-2 is 'patient_id', id-3 is 'outpatient_id'.
                            <br>
                            In other table, just enter id-1 as id. 
                        </h6>
                        </div>
                    </div>
                </div>
        </br>

      <div class="row">
        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-3">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Select </h3>
                            <br>
                                    <h5> which table: </h5>
                                        <input class="form-control" id="select_table"name="select_table" type="text" list="table_category" value="" />
                                        <h5> select what: (all=*) <h5>
                                        <input class="form-control" id="select_value"name="select_value" type="text" value="" />
                                        <h5> id-1: </h5>
                                        <input class="form-control" id="select_id_1" name="select_id_1" type="text" value="" />
                                        <h5> id-2: </h5>
                                        <input class="form-control" id="select_id_2" name="select_id_2" type="text" value="" />
                                        <h5> id-3: </h5>
                                        <input class="form-control" id="select_id_3" name="select_id_3" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-3">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Delete </h3>
                            <br>
                                        <h5> which table: </h5>
                                        <input class="form-control" id="delete_table"name="delete_table" type="text" list="table_category" value="" />
                                        <h5> id-1: </h5>
                                        <input class="form-control" id="delete_id_1" name="delete_id_1" type="text" value="" />
                                        <h5> id-2: </h5>
                                        <input class="form-control" id="delete_id_2" name="delete_id_2" type="text" value="" />
                                        <h5> id-3: </h5>
                                        <input class="form-control" id="delete_id_3" name="delete_id_3" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-3">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Insert </h3>
                            <br>
                                        <h5> which table: </h5>
                                        <input class="form-control" id="insert_table"name="insert_table" type="text" list="table_category" value="" />
                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-3">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Update </h3>
                            <br>
                                        <h5> which table: </h5>
                                        <input class="form-control" id="update_table"name="update_table" type="text" list="table_category" value="" />
                                        <h5> which column: </h5>
                                        <input class="form-control" id="update_column"name="update_column" type="text" value="" />
                                        <h5> data: </h5>
                                        <input class="form-control" id="update_data" name="update_data" type="text" value="" />
                                        <h5> id-1: </h5>
                                        <input class="form-control" id="update_id_1" name="update_id_1" type="text" value="" />
                                        <h5> id-2: </h5>
                                        <input class="form-control" id="update_id_2" name="update_id_2" type="text" value="" />
                                        <h5> id-3: </h5>
                                        <input class="form-control" id="update_id_3" name="update_id_3" type="text" value="" />

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-6">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Nested(In/Not in) </h3>
                            <br>
                                <h5> which type: </h5>
                                <input class="form-control" id="nested_type" name="nested_type" type="text" value="" list="nested_category"  autocomplete="off" />
                                <datalist id="nested_category">  
                                     <option value="Nested-In">
                                     <option value="Nested-Not In">
                                </datalist>   
                                <h5> select which table: </h5>
                                <input class="form-control" id="nested_table_select"name="nested_table_select" type="text" list="table_category" value="" />
                                <datalist id="table_category">  
                                     <option value="chemist">
                                     <option value="doctor">
                                     <option value="examine_record">
                                     <option value="nurse">
                                     <option value="outpatient">
                                     <option value="patient">
                                     <option value="prescription">
                                     <option value="register_record">
                                     <option value="treat_record">
                                </datalist> 
                                <h5> select which column: </h5>
                                <input class="form-control" id="nested_column"name="nested_column" type="text" value="" />
                                <h5> constraint by which column: </h5>
                                <input class="form-control" id="nested_column_constraint"name="nested_column_constraint" type="text" value="" />
                                
                                <h5> nested select which column: </h5>
                                <input class="form-control" id="nested_column_nest"name="nested_column_nest" type="text" value="" />
                                <h5> nested select which table: </h5>
                                <input class="form-control" id="nested_table_nest"name="nested_table_nest" type="text" list="table_category" value="" />
                                <h5> nested select by what condition: </h5><h6>format: [column name] [operation] [value]<br> eg. id=5, salary>50000 </h6>
                                <input class="form-control" id="nested_condition"name="nested_condition" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Portfolio Item 6 -->
                <div class="col-md-6 col-lg-6">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Nested(Exists/Not exists) </h3>
                            <br>
                                <h5> which type: </h5>
                                <input class="form-control" id="exists_type" name="exists_type" type="text" value="" list="nested_category2"  autocomplete="off" />
                                <datalist id="nested_category2">  
                                     <option value="Nested-Exists">
                                     <option value="Nested-Not Exists">
                                </datalist>   
                                <h5> select which table: </h5>
                                <input class="form-control" id="exists_table_select"name="exists_table_select" type="text" list="table_category" value="" />
                                <datalist id="table_category">  
                                     <option value="chemist">
                                     <option value="doctor">
                                     <option value="examine_record">
                                     <option value="nurse">
                                     <option value="outpatient">
                                     <option value="patient">
                                     <option value="prescription">
                                     <option value="register_record">
                                     <option value="treat_record">
                                </datalist> 
                                <h5> select which column: </h5>
                                <input class="form-control" id="exists_column"name="exists_column" type="text" value="" />
                                
                                <h5> nested select which column: </h5>
                                <input class="form-control" id="exists_column_nest"name="exists_column_nest" type="text" value="" />
                                <h5> nested select which table: </h5>
                                <input class="form-control" id="exists_table_nest"name="exists_table_nest" type="text" list="table_category" value="" />
                                <h5> nested select by what condition: </h5><h6>format: [column name] [operation] [value]<br> eg. id=5, salary>50000 </h6>
                                <input class="form-control" id="exists_condition"name="exists_condition" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Aggregate<br>(Count/Sum/Max/Min/Avg) </h3>
                            <br>
                                <h5> which type: <h5>
                                <input class="form-control" id="aggregate_type"name="aggregate_type" type="text" value="" list="aggregate_category"  autocomplete="off" />
                                <datalist id="aggregate_category">  
                                     <option value="Aggregate-Count">
                                     <option value="Aggregate-Sum">
                                     <option value="Aggregate-Max">
                                     <option value="Aggregate-Min">
                                     <option value="Aggregate-Avg">
                                </datalist>
                                <h5> select which table: </h5>
                                <input class="form-control" id="aggregate_table"name="aggregate_table" type="text" list="table_category" value="" />
                                
                                <h5> aggregate to which column: </h5>
                                <input class="form-control" id="aggregate_column"name="aggregate_column" type="text" value="" />
                                
                                <h5> select what condition:</h5><h6>format: [column name] [operation] [value]<br> eg. id=5, salary>50000 </h6>
                                <input class="form-control" id="aggregate_condition"name="aggregate_condition" type="text" value="" />
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
              <br>
            <div class="card text-center" style = "background: #007bff; padding:3px">
                <div class="stat-widget-two">
                    <div class="stat-content">
                        <div class="card bg-retired" style = "background: #c0defc">
                            <h3 class="card-title">Aggregate<br>(Having) </h3>
                            <br>
                                <h5> which aggregate function: <h5>
                                <input class="form-control" id="having_type"name="having_type" type="text" value="" list="aggregate_category"  autocomplete="off" />
                                
                                <h5> select which table: </h5>
                                <input class="form-control" id="having_table"name="having_table" type="text" list="table_category" value="" />
                                
                                <h5> aggregate to which column: </h5>
                                <input class="form-control" id="having_column"name="having_column" type="text" value="" />
                                
                                <h5> select what condition:</h5><h6>format: [column name] [operation] [value]<br> eg. id=5, salary>50000 </h6>
                                <input class="form-control" id="having_select_condition"name="having_select_condition" type="text" value="" />
                                
                                <h5> group by which column: </h5>
                                <input class="form-control" id="having_group"name="having_group" type="text" value="" />
                                
                                <h5> having condition: </h5><h6>format: [operation] [value]<br> eg. >3, < 50000  </h6>
                                <input class="form-control" id="having_condition"name="having_condition" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Item 4 -->

      </div>
      <!-- /.row -->

    </div>
    <div class="text-center mt-4">
    <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Go!</button>
    </div>
    </form>
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
