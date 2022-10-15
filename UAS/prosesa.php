<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aplikasi Naive Bayes</title>
        <meta name="description" content="Aplikasi Naive Bayes">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>

    <body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./">Naive Bayes</a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                </div>


                      <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                          <li class="active">
                            <a href="admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                          </li>
                          <<h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Modify</a>
                              <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-bars"></i><a href="proses.php">Proses</a></li>


                              </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                              <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="datadiabetes.php">Data Database</a></li>
                                <li><i class="fa fa-table"></i><a href="Customer.php">Data Customer</a></li>

                              </ul>
                            </li>

                        </ul>
                      </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>

                            <div class="dropdown for-notification">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">5</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="notification">
                                    <p class="red">You have 3 Notification</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <i class="fa fa-check"></i>
                                        <p>Server #1 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <i class="fa fa-info"></i>
                                        <p>Server #2 overloaded.</p>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <i class="fa fa-warning"></i>
                                        <p>Server #3 overloaded.</p>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown for-message">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-email"></i>
                                    <span class="count bg-primary">9</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="message">
                                    <p class="red">You have 4 Mails</p>
                                    <a class="dropdown-item media bg-flat-color-1" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jonathan Smith</span>
                                            <span class="time float-right">Just now</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-4" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Jack Sanders</span>
                                            <span class="time float-right">5 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-5" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Cheryl Wheeler</span>
                                            <span class="time float-right">10 minutes ago</span>
                                            <p>Hello, this is an example msg</p>
                                        </span>
                                    </a>
                                    <a class="dropdown-item media bg-flat-color-3" href="#">
                                        <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                        <span class="message media-body">
                                            <span class="name float-left">Rachel Santos</span>
                                            <span class="time float-right">15 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="index.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="flag-icon flag-icon-id"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="language">
                                <div class="dropdown-item">
                                    <span class="flag-icon flag-icon-fr"></span>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-es"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-us"></i>
                                </div>
                                <div class="dropdown-item">
                                    <i class="flag-icon flag-icon-it"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Data Test</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="admin.php">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Data Test</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">
                <?php
                $koneksi = mysqli_connect("localhost","root","","naivebayes");
                
                //menghitung Total Data
                echo "Menghitung Total Data : <br><br>";
                $diabetes = "SELECT COUNT(*) as total FROM diabetes";
                $hasil = $koneksi->query($diabetes);
                $hasildiabetes = mysqli_fetch_assoc($hasil);
                echo "Jumlah Data = " . $hasildiabetes['total'] . "<br>";
                
                //menghitung diabetes positive
                echo "<hr> Menghitung Diabetes Positive : <br><br>";
                $diabetesya = "SELECT COUNT(*) as Positive FROM diabetes WHERE Diabetes = '1'";
                $hasilya = $koneksi->query($diabetesya);
                $hasildiabetesya = mysqli_fetch_assoc($hasilya);
                echo "Jumlah Diabetes Positive = " . $hasildiabetesya['Positive'] . "<br>";
                
                //menghitung diabetes negative
                echo "<hr> Menghitung Diabetes Negative : <br><br>";
                $diabetestidak = "SELECT COUNT(*) as Negative FROM diabetes WHERE diabetes = '0'";
                $hasiltidak = $koneksi->query($diabetestidak);
                $hasildiabetestidak = mysqli_fetch_assoc($hasiltidak);
                echo "Jumlah Diabetes Negative = " . $hasildiabetestidak['Negative'] . "<br>";

                //-----------------------------------------Positive Plus Hamil---------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan Kehamilan : <br><br>";
                //menghitung diabetes Positive dan Pregancies 0
                $diabetesyahamil0 = "SELECT COUNT(*) as positive0 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 0";
                $hasilyahamil0 = $koneksi->query($diabetesyahamil0);
                $hasildiabetesyahamil0 = mysqli_fetch_assoc($hasilyahamil0);
                echo "Jumlah Diabetes Positive dan Hamil 0 Kali = " . $hasildiabetesyahamil0['positive0'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 1
                $diabetesyahamil1 = "SELECT COUNT(*) as positive1 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 1";
                $hasilyahamil1 = $koneksi->query($diabetesyahamil1);
                $hasildiabetesyahamil1 = mysqli_fetch_assoc($hasilyahamil1);
                echo "Jumlah Diabetes Positive dan Hamil 1 Kali = " . $hasildiabetesyahamil1['positive1'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 2
                $diabetesyahamil2 = "SELECT COUNT(*) as positive2 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 2";
                $hasilyahamil2 = $koneksi->query($diabetesyahamil2);
                $hasildiabetesyahamil2 = mysqli_fetch_assoc($hasilyahamil2);
                echo "Jumlah Diabetes Positive dan Hamil 2 Kali = " . $hasildiabetesyahamil2['positive2'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 3
                $diabetesyahamil3 = "SELECT COUNT(*) as positive3 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 3";
                $hasilyahamil3 = $koneksi->query($diabetesyahamil3);
                $hasildiabetesyahamil3 = mysqli_fetch_assoc($hasilyahamil3);
                echo "Jumlah Diabetes Positive dan Hamil 3 Kali = " . $hasildiabetesyahamil3['positive3'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 4
                $diabetesyahamil4 = "SELECT COUNT(*) as positive4 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 4";
                $hasilyahamil4 = $koneksi->query($diabetesyahamil4);
                $hasildiabetesyahamil4 = mysqli_fetch_assoc($hasilyahamil4);
                echo "Jumlah Diabetes Positive dan Hamil 4 Kali = " . $hasildiabetesyahamil4['positive4'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 5
                $diabetesyahamil5 = "SELECT COUNT(*) as positive5 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 5";
                $hasilyahamil5 = $koneksi->query($diabetesyahamil5);
                $hasildiabetesyahamil5 = mysqli_fetch_assoc($hasilyahamil5);
                echo "Jumlah Diabetes Positive dan Hamil 5 Kali = " . $hasildiabetesyahamil5['positive5'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 6
                $diabetesyahamil6 = "SELECT COUNT(*) as positive6 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 6";
                $hasilyahamil6 = $koneksi->query($diabetesyahamil6);
                $hasildiabetesyahamil6 = mysqli_fetch_assoc($hasilyahamil6);
                echo "Jumlah Diabetes Positive dan Hamil 6 Kali = " . $hasildiabetesyahamil6['positive6'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 7
                $diabetesyahamil7 = "SELECT COUNT(*) as positive7 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 7";
                $hasilyahamil7 = $koneksi->query($diabetesyahamil7);
                $hasildiabetesyahamil7 = mysqli_fetch_assoc($hasilyahamil7);
                echo "Jumlah Diabetes Positive dan Hamil 7 Kali = " . $hasildiabetesyahamil7['positive7'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 8
                $diabetesyahamil8 = "SELECT COUNT(*) as positive8 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 8";
                $hasilyahamil8 = $koneksi->query($diabetesyahamil8);
                $hasildiabetesyahamil8 = mysqli_fetch_assoc($hasilyahamil8);
                echo "Jumlah Diabetes Positive dan Hamil 8 Kali = " . $hasildiabetesyahamil8['positive8'] . "<br>";

                //menghitung diabetes Positive dan Pregancies 9
                $diabetesyahamil9 = "SELECT COUNT(*) as positive9 FROM diabetes WHERE diabetes = 1 AND Pregnancies = 9";
                $hasilyahamil9 = $koneksi->query($diabetesyahamil9);
                $hasildiabetesyahamil9 = mysqli_fetch_assoc($hasilyahamil9);
                echo "Jumlah Diabetes Positive dan Hamil 9 Kali = " . $hasildiabetesyahamil9['positive9'] . "<br>";

                //---------------------------------------------Negative Plus Hamil--------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan Kehamilan : <br><br>";
                //menghitung diabetes Negative dan Pregancies 0
                $diabetestidakhamil0 = "SELECT COUNT(*) as negative0 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 0";
                $hasiltidakhamil0 = $koneksi->query($diabetestidakhamil0);
                $hasildiabetestidakhamil0 = mysqli_fetch_assoc($hasiltidakhamil0);
                echo "Jumlah Diabetes Negative dan Hamil 0 Kali = " . $hasildiabetestidakhamil0['negative0'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 1
                $diabetestidakhamil1 = "SELECT COUNT(*) as negative1 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 1";
                $hasiltidakhamil1 = $koneksi->query($diabetestidakhamil1);
                $hasildiabetestidakhamil1 = mysqli_fetch_assoc($hasiltidakhamil1);
                echo "Jumlah Diabetes Negative dan Hamil 1 Kali = " . $hasildiabetestidakhamil1['negative1'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 2
                $diabetestidakhamil2 = "SELECT COUNT(*) as negative2 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 2";
                $hasiltidakhamil2 = $koneksi->query($diabetestidakhamil2);
                $hasildiabetestidakhamil2 = mysqli_fetch_assoc($hasiltidakhamil2);
                echo "Jumlah Diabetes Negative dan Hamil 2 Kali = " . $hasildiabetestidakhamil2['negative2'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 3
                $diabetestidakhamil3 = "SELECT COUNT(*) as negative3 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 3";
                $hasiltidakhamil3 = $koneksi->query($diabetestidakhamil3);
                $hasildiabetestidakhamil3 = mysqli_fetch_assoc($hasiltidakhamil3);
                echo "Jumlah Diabetes Negative dan Hamil 3 Kali = " . $hasildiabetestidakhamil3['negative3'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 4
                $diabetestidakhamil4 = "SELECT COUNT(*) as negative4 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 4";
                $hasiltidakhamil4 = $koneksi->query($diabetestidakhamil4);
                $hasildiabetestidakhamil4 = mysqli_fetch_assoc($hasiltidakhamil4);
                echo "Jumlah Diabetes Negative dan Hamil 4 Kali = " . $hasildiabetestidakhamil4['negative4'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 5
                $diabetestidakhamil5 = "SELECT COUNT(*) as negative5 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 5";
                $hasiltidakhamil5 = $koneksi->query($diabetestidakhamil5);
                $hasildiabetestidakhamil5 = mysqli_fetch_assoc($hasiltidakhamil5);
                echo "Jumlah Diabetes Negative dan Hamil 5 Kali = " . $hasildiabetestidakhamil5['negative5'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 6
                $diabetestidakhamil6 = "SELECT COUNT(*) as negative6 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 6";
                $hasiltidakhamil6 = $koneksi->query($diabetestidakhamil6);
                $hasildiabetestidakhamil6 = mysqli_fetch_assoc($hasiltidakhamil6);
                echo "Jumlah Diabetes Negative dan Hamil 6 Kali = " . $hasildiabetestidakhamil6['negative6'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 7
                $diabetestidakhamil7 = "SELECT COUNT(*) as negative7 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 7";
                $hasiltidakhamil7 = $koneksi->query($diabetestidakhamil7);
                $hasildiabetestidakhamil7 = mysqli_fetch_assoc($hasiltidakhamil7);
                echo "Jumlah Diabetes Negative dan Hamil 7 Kali = " . $hasildiabetestidakhamil7['negative7'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 8
                $diabetestidakhamil8 = "SELECT COUNT(*) as negative8 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 8";
                $hasiltidakhamil8 = $koneksi->query($diabetestidakhamil8);
                $hasildiabetestidakhamil8 = mysqli_fetch_assoc($hasiltidakhamil8);
                echo "Jumlah Diabetes Negative dan Hamil 8 Kali = " . $hasildiabetestidakhamil8['negative8'] . "<br>";

                //menghitung diabetes Negative dan Pregancies 9
                $diabetestidakhamil9 = "SELECT COUNT(*) as negative9 FROM diabetes WHERE diabetes = 0 AND Pregnancies = 9";
                $hasiltidakhamil9 = $koneksi->query($diabetestidakhamil9);
                $hasildiabetestidakhamil9 = mysqli_fetch_assoc($hasiltidakhamil9);
                echo "Jumlah Diabetes Negative dan Hamil 9 Kali = " . $hasildiabetestidakhamil9['negative9'] . "<br>";

                //-----------------------------------------------Positive Plasma Glukosa----------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan Plasma Glukosa : <br><br>";
                //menghitung diabetes Positive dan PlasmaG Kurang Glukosa
                $diabetesyaplasmagkurang = "SELECT COUNT(*) as positivekurang FROM diabetes WHERE diabetes = 1 AND PlasmaG < 80";
                $hasilyaplasmakurang = $koneksi->query($diabetesyaplasmagkurang);
                $hasildiabetesyaplasmakurang = mysqli_fetch_assoc($hasilyaplasmakurang);
                echo "Jumlah Diabetes Positive dan PlasmaG Kurang = " . $hasildiabetesyaplasmakurang['positivekurang'] . "<br>";
                
                //menghitung diabetes Positive dan PlasmaG Normal
                $diabetesyaplasmanormal = "SELECT COUNT(*) as positivenormal FROM diabetes WHERE diabetes = 1 AND PlasmaG Between 80 and 100";
                $hasilyaplasmanormal = $koneksi->query($diabetesyaplasmanormal);
                $hasildiabetesyaplasmanormal = mysqli_fetch_assoc($hasilyaplasmanormal);
                echo "Jumlah Diabetes Positive dan PlasmaG Normal = " . $hasildiabetesyaplasmanormal['positivenormal'] . "<br>";
                
                //menghitung diabetes Positive dan PlasmaG Berlebih
                $diabetesyaplasmaberlebih = "SELECT COUNT(*) as positiveberlebih FROM diabetes WHERE diabetes = 1 AND PlasmaG Between 101 and 125";
                $hasilyaplasmaberlebih = $koneksi->query($diabetesyaplasmaberlebih);
                $hasildiabetesyaplasmaberlebih = mysqli_fetch_assoc($hasilyaplasmaberlebih);
                echo "Jumlah Diabetes Positive dan PlasmaG Berlebih = " . $hasildiabetesyaplasmaberlebih['positiveberlebih'] . "<br>";
                
                //menghitung diabetes Positive dan PlasmaG Diabetic
                $diabetesyaplasmadiabetic = "SELECT COUNT(*) as positivediabetic FROM diabetes WHERE diabetes = 1 AND PlasmaG > 125";
                $hasilyaplasmadiabetic = $koneksi->query($diabetesyaplasmadiabetic);
                $hasildiabetesyaplasmadiabetic = mysqli_fetch_assoc($hasilyaplasmadiabetic);
                echo "Jumlah Diabetes Positive dan PlasmaG Diabetic = " . $hasildiabetesyaplasmadiabetic['positivediabetic'] . "<br>";

                //-----------------------------------------------Negative Plasma Glukosa--------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan Plasma Glukosa : <br><br>";
                //menghitung diabetes Negative dan PlasmaG Kurang
                $diabetestidakplasmakurang = "SELECT COUNT(*) as negativekurang FROM diabetes WHERE diabetes = 0 AND PlasmaG < 80";
                $hasiltidakplasmakurang = $koneksi->query($diabetestidakplasmakurang);
                $hasildiabetestidakplasmakurang = mysqli_fetch_assoc($hasiltidakplasmakurang);
                echo "Jumlah Diabetes Negative dan PlasmaG Kurang = " . $hasildiabetestidakplasmakurang['negativekurang'] . "<br>";
                
                //menghitung diabetes Negative dan PlasmaG Normal
                $diabetestidakplasmanormal = "SELECT COUNT(*) as negativenormal FROM diabetes WHERE diabetes = 0 AND PlasmaG Between 80 and 100";
                $hasiltidakplasmanormal = $koneksi->query($diabetestidakplasmanormal);
                $hasildiabetestidakplasmanormal = mysqli_fetch_assoc($hasiltidakplasmanormal);
                echo "Jumlah Diabetes Negative dan PlasmaG Normal = " . $hasildiabetestidakplasmanormal['negativenormal'] . "<br>";
                
                //menghitung diabetes Negative dan PlasmaG Berlebih
                $diabetestidakplasmaberlebih = "SELECT COUNT(*) as negativeberlebih FROM diabetes WHERE diabetes = 0 AND PlasmaG Between 101 and 125";
                $hasiltidakplasmaberlebih = $koneksi->query($diabetestidakplasmaberlebih);
                $hasildiabetestidakplasmaberlebih = mysqli_fetch_assoc($hasiltidakplasmaberlebih);
                echo "Jumlah Diabetes Negative dan PlasmaG Berlebih = " . $hasildiabetestidakplasmaberlebih['negativeberlebih'] . "<br>";
                
                //menghitung diabetes Negative dan PlasmaG Diabetic
                $diabetestidakplasmadiabetic = "SELECT COUNT(*) as negativediabetic FROM diabetes WHERE diabetes = 0 AND PlasmaG > 125";
                $hasiltidakplasmadiabetic = $koneksi->query($diabetestidakplasmadiabetic);
                $hasildiabetestidakplasmadiabetic = mysqli_fetch_assoc($hasiltidakplasmadiabetic);
                echo "Jumlah Diabetes Negative dan PlasmaG Diabetic = " . $hasildiabetestidakplasmadiabetic['negativediabetic'] . "<br>";
                
                //--------------------------------------------------Positive Tekanan Darah---------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan Tekanan Darah : <br><br>";
                //menghitung diabetes Positiv dan Tekanan Darah Normal
                $diabetesyatekanannormal = "SELECT COUNT(*) as yatdnormal FROM diabetes WHERE diabetes = 1 AND DiastolicBloodPressure < 80";
                $hasilyatekanannormal = $koneksi->query($diabetesyatekanannormal);
                $hasildiabetesyatekanannormal = mysqli_fetch_assoc($hasilyatekanannormal);
                echo "Jumlah Diabetes Positive dan Tekanan Darah Normal = " . $hasildiabetesyatekanannormal['yatdnormal'] . "<br>";
                
                //menghitung diabetes Positiv dan Tekanan Darah Stage 1
                $diabetesyastage1 = "SELECT COUNT(*) as yatdstage1 FROM diabetes WHERE diabetes = 1 AND DiastolicBloodPressure Between 80 and 89";
                $hasilyastage1 = $koneksi->query($diabetesyastage1);
                $hasildiabetesyastage1 = mysqli_fetch_assoc($hasilyastage1);
                echo "Jumlah Diabetes Positive dan Tekanan Darah Stage 1 = " . $hasildiabetesyastage1['yatdstage1'] . "<br>";
                
                //menghitung diabetes Positiv dan Tekanan Darah Stage 2
                $diabetesyastage2 = "SELECT COUNT(*) as yastage2 FROM diabetes WHERE diabetes = 1 AND DiastolicBloodPressure Between 90 and 120 ";
                $hasilyastage2 = $koneksi->query($diabetesyastage2);
                $hasildiabetesyastage2 = mysqli_fetch_assoc($hasilyastage2);
                echo "Jumlah Diabetes Positive dan Tekanan Darah Stage 2 = " . $hasildiabetesyastage2['yastage2'] . "<br>";

                //menghitung diabetes Positiv dan Tekanan Darah Stage 3
                $diabetesyastage3 = "SELECT COUNT(*) as yastage3 FROM diabetes WHERE diabetes = 1 AND DiastolicBloodPressure > 120 ";
                $hasilyastage3 = $koneksi->query($diabetesyastage3);
                $hasildiabetesyastage3 = mysqli_fetch_assoc($hasilyastage3);
                echo "Jumlah Diabetes Positive dan Tekanan Darah Stage 3 = " . $hasildiabetesyastage3['yastage3'] . "<br>";

                //--------------------------------------------------Negative Tekanan Darah-------------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan Tekanan Darah : <br><br>";
                //menghitung diabetes Negative dan Tekanan Darah Normal
                $diabetestidaktekanannormal = "SELECT COUNT(*) as tidaktdnormal FROM diabetes WHERE diabetes = 0 AND DiastolicBloodPressure < 80 ";
                $hasiltidaktekanannormal = $koneksi->query($diabetestidaktekanannormal);
                $hasildiabetestidaktekanannormal = mysqli_fetch_assoc($hasiltidaktekanannormal);
                echo "Jumlah Diabetes Negative dan Tekanan Darah Normal = " . $hasildiabetestidaktekanannormal['tidaktdnormal'] . "<br>";
                
                //menghitung diabetes Negative dan Tekanan Darah Stage 1
                $diabetestidakstage1 = "SELECT COUNT(*) as tidakstage1 FROM diabetes WHERE diabetes = 0 AND DiastolicBloodPressure Between 80 and 89";
                $hasiltidakstage1 = $koneksi->query($diabetestidakstage1);
                $hasildiabetestidakstage1 = mysqli_fetch_assoc($hasiltidakstage1);
                echo "Jumlah Diabetes Negative dan Tekanan Darah Stage 1 = " . $hasildiabetestidakstage1['tidakstage1'] . "<br>";
                
                //menghitung diabetes Negative dan Tekanan Darah Stage 2
                $diabetestidakstage2 = "SELECT COUNT(*) as tidakstage2 FROM diabetes WHERE diabetes = 0 AND DiastolicBloodPressure Between 90 and 120";
                $hasiltidakstage2 = $koneksi->query($diabetestidakstage2);
                $hasildiabetestidakstage2 = mysqli_fetch_assoc($hasiltidakstage2);
                echo "Jumlah Diabetes Negative dan Tekanan Darah Stage 2 = " . $hasildiabetestidakstage2['tidakstage2'] . "<br>";

                //menghitung diabetes Negative dan Tekanan Darah Stage 3
                $diabetestidakstage3 = "SELECT COUNT(*) as tidakstage3 FROM diabetes WHERE diabetes = 0 AND DiastolicBloodPressure > 120";
                $hasiltidakstage3 = $koneksi->query($diabetestidakstage3);
                $hasildiabetestidakstage3 = mysqli_fetch_assoc($hasiltidakstage3);
                echo "Jumlah Diabetes Negative dan Tekanan Darah Stage 3 = " . $hasildiabetestidakstage3['tidakstage3'] . "<br>";

                //----------------------------------------------Positive TricepsThickness---------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan TricepsThickness : <br><br>";
                //menghitung diabetes Positive dan TricepsThickness Normal
                $diabetesyattnormal = "SELECT COUNT(*) as yattnormal FROM diabetes WHERE diabetes = 1 AND TricepsThickness Between 7 and 25";
                $hasilyattnormal = $koneksi->query($diabetesyattnormal);
                $hasildiabetesyattnormal = mysqli_fetch_assoc($hasilyattnormal);
                echo "Jumlah Diabetes Positive dan TricepsThickness Normal = " . $hasildiabetesyattnormal['yattnormal'] . "<br>";
                
                //menghitung diabetes Positive dan TricepsThickness Sedikit Berlebih
                $diabetesyattsberlebih = "SELECT COUNT(*) as yattsberlebih FROM diabetes WHERE diabetes = 1 AND TricepsThickness Between 26 and 39";
                $hasilyattsberlebih = $koneksi->query($diabetesyattsberlebih);
                $hasildiabetesyattsberlebih = mysqli_fetch_assoc($hasilyattsberlebih);
                echo "Jumlah Diabetes Positive dan TricepsThickness Sedikit Berlebih = " . $hasildiabetesyattsberlebih['yattsberlebih'] . "<br>";
                
                //menghitung diabetes Positive dan TricepsThickness Berlebih
                $diabetesyattberlebih = "SELECT COUNT(*) as yattberlebih FROM diabetes WHERE diabetes = 1 AND TricepsThickness > 39";
                $hasilyattberlebih = $koneksi->query($diabetesyattberlebih);
                $hasildiabetesyattberlebih = mysqli_fetch_assoc($hasilyattberlebih);
                echo "Jumlah Diabetes Positive dan TricepsThickness Berlebih = " . $hasildiabetesyattberlebih['yattberlebih'] . "<br>";

                //----------------------------------------------Negative TricepsThickness---------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan TricepsThickness : <br><br>";
                //menghitung diabetes Negative dan TricepsThickness Normal
                $diabetestidakttnormal = "SELECT COUNT(*) as tidakttnormal FROM diabetes WHERE diabetes = 0 AND TricepsThickness Between 7 and 25";
                $hasiltidakttnormal = $koneksi->query($diabetestidakttnormal);
                $hasildiabetestidakttnormal = mysqli_fetch_assoc($hasiltidakttnormal);
                echo "Jumlah Diabetes Negative dan TricepsThickness Normal = " . $hasildiabetestidakttnormal['tidakttnormal'] . "<br>";
                
                //menghitung diabetes Negative dan TricepsThickness Sedikit Berlebih
                $diabetestidakttsberlebih = "SELECT COUNT(*) as tidakttsberlebih FROM diabetes WHERE diabetes = 0 AND TricepsThickness Between 26 and 39";
                $hasiltidakttsberlebih = $koneksi->query($diabetestidakttsberlebih);
                $hasildiabetestidakttsberlebih = mysqli_fetch_assoc($hasiltidakttsberlebih);
                echo "Jumlah Diabetes Negative dan TricepsThickness Sedikit Berlebih = " . $hasildiabetestidakttsberlebih['tidakttsberlebih'] . "<br>";
                
                //menghitung diabetes Positive dan TricepsThickness Berlebih
                $diabetestidakttberlebih = "SELECT COUNT(*) as tidakttberlebih FROM diabetes WHERE diabetes = 0 AND TricepsThickness > 39";
                $hasiltidakttberlebih = $koneksi->query($diabetestidakttberlebih);
                $hasildiabetestidakttberlebih = mysqli_fetch_assoc($hasiltidakttberlebih);
                echo "Jumlah Diabetes Negative dan TricepsThickness Berlebih = " . $hasildiabetestidakttberlebih['tidakttberlebih'] . "<br>";

                //----------------------------------------------Positive SerumInsulin-------------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan Serum Insulin : <br><br>";
                //menghitung diabetes Positive dan SerumeInsulin Normal
                $diabetesyasinormal = "SELECT COUNT(*) as yasinormal FROM diabetes WHERE diabetes = 1 AND SerumInsulin Between 14 and 40 ";
                $hasilyasinormal = $koneksi->query($diabetesyasinormal);
                $hasildiabetesyasinormal = mysqli_fetch_assoc($hasilyasinormal);
                echo "Jumlah Diabetes Positive dan SerumInsulin Normal = " . $hasildiabetesyasinormal['yasinormal'] . "<br>";
                
                //menghitung diabetes Positive dan SerumeInsulin Sedikit Berlebih
                $diabetesyasisberlebih = "SELECT COUNT(*) as yasisberlebih FROM diabetes WHERE diabetes = 1 AND SerumInsulin Between 41 and 70 ";
                $hasilyasisberlebih = $koneksi->query($diabetesyasisberlebih);
                $hasildiabetesyasisberlebih = mysqli_fetch_assoc($hasilyasisberlebih);
                echo "Jumlah Diabetes Positive dan SerumInsulin Sedikit Berlebih = " . $hasildiabetesyasisberlebih['yasisberlebih'] . "<br>";

                //menghitung diabetes Positive dan SerumeInsulin Berlebih
                $diabetesyasiberlebih = "SELECT COUNT(*) as yasiberlebih FROM diabetes WHERE diabetes = 1 AND SerumInsulin > 70 ";
                $hasilyasiberlebih = $koneksi->query($diabetesyasiberlebih);
                $hasildiabetesyasiberlebih = mysqli_fetch_assoc($hasilyasiberlebih);
                echo "Jumlah Diabetes Positive dan SerumInsulin Berlebih = " . $hasildiabetesyasiberlebih['yasiberlebih'] . "<br>";

                //----------------------------------------------Negative SerumInsulin-------------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan Serum Insulin : <br><br>";
                //menghitung diabetes Negative dan SerumeInsulin Normal
                $diabetestidaksinormal = "SELECT COUNT(*) as tidaksinormal FROM diabetes WHERE diabetes = 0 AND SerumInsulin Between 14 and 40 ";
                $hasiltidaksinormal = $koneksi->query($diabetestidaksinormal);
                $hasildiabetestidaksinormal = mysqli_fetch_assoc($hasiltidaksinormal);
                echo "Jumlah Diabetes Negative dan SerumInsulin Normal = " . $hasildiabetestidaksinormal['tidaksinormal'] . "<br>";
                
                //menghitung diabetes Negative dan SerumeInsulin Sedikit Berlebih
                $diabetestidaksisberlebih = "SELECT COUNT(*) as tidaksisberlebih FROM diabetes WHERE diabetes = 0 AND SerumInsulin Between 41 and 70 ";
                $hasiltidaksisberlebih = $koneksi->query($diabetestidaksisberlebih);
                $hasildiabetestidaksisberlebih = mysqli_fetch_assoc($hasiltidaksisberlebih);
                echo "Jumlah Diabetes Negative dan SerumInsulin Sedikit Berlebih = " . $hasildiabetestidaksisberlebih['tidaksisberlebih'] . "<br>";

                //menghitung diabetes Negative dan SerumeInsulin Berlebih
                $diabetestidaksiberlebih = "SELECT COUNT(*) as tidaksiberlebih FROM diabetes WHERE diabetes = 0 AND SerumInsulin > 70 ";
                $hasiltidaksiberlebih = $koneksi->query($diabetestidaksiberlebih);
                $hasildiabetestidaksiberlebih = mysqli_fetch_assoc($hasiltidaksiberlebih);
                echo "Jumlah Diabetes Negative dan SerumInsulin Berlebih = " . $hasildiabetestidaksiberlebih['tidaksiberlebih'] . "<br>";

                //---------------------------------------------------Positive BMI------------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan BMI : <br><br>";
                //menghitung diabetes Positiv dan BMI Underweight
                $diabetesyabmiunder = "SELECT COUNT(*) as yabmiunder FROM diabetes WHERE diabetes = 1 AND BMI < 20";
                $hasilyabmiunder = $koneksi->query($diabetesyabmiunder);
                $hasildiabetesyabmiunder = mysqli_fetch_assoc($hasilyabmiunder);
                echo "Jumlah Diabetes Positive dan BMI Underweight = " . $hasildiabetesyabmiunder['yabmiunder'] . "<br>";
                
                //menghitung diabetes Positiv dan BMI Healthy
                $diabetesyabmisehat = "SELECT COUNT(*) as yabmisehat FROM diabetes WHERE diabetes = 1 AND BMI Between 20 and 25";
                $hasilyabmisehat = $koneksi->query($diabetesyabmisehat);
                $hasildiabetesyabmisehat = mysqli_fetch_assoc($hasilyabmisehat);
                echo "Jumlah Diabetes Positive dan BMI Sehat = " . $hasildiabetesyabmisehat['yabmisehat'] . "<br>";
                
                //menghitung diabetes Positiv dan BMI Overweight
                $diabetesyabmiover = "SELECT COUNT(*) as yabmiover FROM diabetes WHERE diabetes = 1 AND BMI Between 26 and 30 ";
                $hasilyabmiover = $koneksi->query($diabetesyabmiover);
                $hasildiabetesyabmiover = mysqli_fetch_assoc($hasilyabmiover);
                echo "Jumlah Diabetes Positive dan BMI Overweight = " . $hasildiabetesyabmiover['yabmiover'] . "<br>";

                //menghitung diabetes Positiv dan BMI Obesitas
                $diabetesyabmiobes = "SELECT COUNT(*) as yabmiobes FROM diabetes WHERE diabetes = 1 AND BMI > 30 ";
                $hasilyabmiobes = $koneksi->query($diabetesyabmiobes);
                $hasildiabetesyabmiobes = mysqli_fetch_assoc($hasilyabmiobes);
                echo "Jumlah Diabetes Positive dan BMI Obesitas = " . $hasildiabetesyabmiobes['yabmiobes'] . "<br>";

                //---------------------------------------------------Negative BMI------------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan BMI : <br><br>";
                //menghitung diabetes Negative dan BMI Underweight
                $diabetestidakbmiunder = "SELECT COUNT(*) as tidakbmiunder FROM diabetes WHERE diabetes = 0 AND BMI < 20";
                $hasiltidakbmiunder = $koneksi->query($diabetestidakbmiunder);
                $hasildiabetestidakbmiunder = mysqli_fetch_assoc($hasiltidakbmiunder);
                echo "Jumlah Diabetes Negative dan BMI Underweight = " . $hasildiabetestidakbmiunder['tidakbmiunder'] . "<br>";
                
                //menghitung diabetes Negative dan BMI Healthy
                $diabetestidakbmisehat = "SELECT COUNT(*) as tidakbmisehat FROM diabetes WHERE diabetes = 0 AND BMI Between 20 and 25";
                $hasiltidakkbmisehat = $koneksi->query($diabetestidakbmisehat);
                $hasildiabetestidakbmisehat = mysqli_fetch_assoc($hasiltidakkbmisehat);
                echo "Jumlah Diabetes Negative dan BMI Sehat = " . $hasildiabetestidakbmisehat['tidakbmisehat'] . "<br>";
                
                //menghitung diabetes Negative dan BMI Overweight
                $diabetestidakbmiover = "SELECT COUNT(*) as tidakbmiover FROM diabetes WHERE diabetes = 0 AND BMI Between 26 and 30 ";
                $hasiltidakbmiover = $koneksi->query($diabetestidakbmiover);
                $hasildiabetestidakbmiover = mysqli_fetch_assoc($hasiltidakbmiover);
                echo "Jumlah Diabetes Negative dan BMI Overweight = " . $hasildiabetestidakbmiover['tidakbmiover'] . "<br>";

                //menghitung diabetes Negative dan BMI Obesitas
                $diabetestidakbmiobes = "SELECT COUNT(*) as tidakbmiobes FROM diabetes WHERE diabetes = 0 AND BMI > 30 ";
                $hasiltidakbmiobes = $koneksi->query($diabetestidakbmiobes);
                $hasildiabetestidakbmiobes = mysqli_fetch_assoc($hasiltidakbmiobes);
                echo "Jumlah Diabetes Negative dan BMI Obesitas = " . $hasildiabetestidakbmiobes['tidakbmiobes'] . "<br>";

                //---------------------------------------------------Positive Usia------------------------------------------------
                echo "<hr> Menghitung Diabetes Positive dan Usia : <br><br>";
                //menghitung diabetes Positiv dan Usia Muda
                $diabetesyausiamuda = "SELECT COUNT(*) as yausiamuda FROM diabetes WHERE diabetes = 1 AND Age Between 20 And 29";
                $hasilyausiamuda = $koneksi->query($diabetesyausiamuda);
                $hasildiabetesyausiamuda = mysqli_fetch_assoc($hasilyausiamuda);
                echo "Jumlah Diabetes Positive dan Usia Muda = " . $hasildiabetesyausiamuda['yausiamuda'] . "<br>";
                
                //menghitung diabetes Positiv dan Usia Paruh Baya
                $diabetesyausiapb = "SELECT COUNT(*) as yausiapb FROM diabetes WHERE diabetes = 1 AND Age Between 30 And 44";
                $hasilyausiapb = $koneksi->query($diabetesyausiapb);
                $hasildiabetesyausiapb = mysqli_fetch_assoc($hasilyausiapb);
                echo "Jumlah Diabetes Positive dan Usia Paruh Baya = " . $hasildiabetesyausiapb['yausiapb'] . "<br>";

                //menghitung diabetes Positiv dan Tua
                $diabetesyausiatua = "SELECT COUNT(*) as yausiatua FROM diabetes WHERE diabetes = 1 AND Age > 44";
                $hasilyausiatua = $koneksi->query($diabetesyausiatua);
                $hasildiabetesyausiatua = mysqli_fetch_assoc($hasilyausiatua);
                echo "Jumlah Diabetes Positive dan Usia Tua = " . $hasildiabetesyausiatua['yausiatua'] . "<br>";

                //---------------------------------------------------Negative Usia------------------------------------------------
                echo "<hr> Menghitung Diabetes Negative dan Usia : <br><br>";
                //menghitung diabetes Negative dan Usia Muda
                $diabetestidakusiamuda = "SELECT COUNT(*) as tidakusiamuda FROM diabetes WHERE diabetes = 0 AND Age Between 20 And 29";
                $hasiltidakusiamuda = $koneksi->query($diabetestidakusiamuda);
                $hasildiabetestidakusiamuda = mysqli_fetch_assoc($hasiltidakusiamuda);
                echo "Jumlah Diabetes Negative dan Muda = " . $hasildiabetestidakusiamuda['tidakusiamuda'] . "<br>";
                
                //menghitung diabetes Negative dan Usia Paruh Baya
                $diabetestidakusiapb = "SELECT COUNT(*) as tidakusiapb FROM diabetes WHERE diabetes = 0 AND Age Between 30 And 44";
                $hasiltidakusiapb = $koneksi->query($diabetestidakusiapb);
                $hasildiabetestidakusiapb = mysqli_fetch_assoc($hasiltidakusiapb);
                echo "Jumlah Diabetes Negative dan Usia Paruh Baya = " . $hasildiabetestidakusiapb['tidakusiapb'] . "<br>";

                //menghitung diabetes Negative dan Tua
                $diabetestidakusiatua = "SELECT COUNT(*) as tidakusiatua FROM diabetes WHERE diabetes = 0 AND Age > 44";
                $hasiltidakusiatua = $koneksi->query($diabetestidakusiatua);
                $hasildiabetestidakusiatua = mysqli_fetch_assoc($hasiltidakusiatua);
                echo "Jumlah Diabetes Negative dan Usia Tua = " . $hasildiabetestidakusiatua['tidakusiatua'] . "<br>";

                //---------------------------------------------------------------------------------------------------------
                
                //probabilitas masing-masing kelas
                $pdiabetesya = $hasildiabetesya['Positive']/$hasildiabetes['total'];
                $pdiabetestidak = $hasildiabetestidak['Negative']/$hasildiabetes['total'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut kehamilan
                $pdiabetesyahamil0 = $hasildiabetesyahamil0['positive0']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil1 = $hasildiabetesyahamil1['positive1']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil2 = $hasildiabetesyahamil2['positive2']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil3 = $hasildiabetesyahamil3['positive3']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil4 = $hasildiabetesyahamil4['positive4']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil5 = $hasildiabetesyahamil5['positive5']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil6 = $hasildiabetesyahamil6['positive6']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil7 = $hasildiabetesyahamil7['positive7']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil8 = $hasildiabetesyahamil8['positive8']/$hasildiabetesya['Positive'];
                $pdiabetesyahamil9 = $hasildiabetesyahamil9['positive9']/$hasildiabetesya['Positive'];



                //probabilitas kelas tidak pada atribut kehamilan
                $pdiabetestidakhamil0 = $hasildiabetestidakhamil0['negative0']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil1 = $hasildiabetestidakhamil1['negative1']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil2 = $hasildiabetestidakhamil2['negative2']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil3 = $hasildiabetestidakhamil3['negative3']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil4 = $hasildiabetestidakhamil4['negative4']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil5 = $hasildiabetestidakhamil5['negative5']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil6 = $hasildiabetestidakhamil6['negative6']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil7 = $hasildiabetestidakhamil7['negative7']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil8 = $hasildiabetestidakhamil8['negative8']/$hasildiabetestidak['Negative'];
                $pdiabetestidakhamil9 = $hasildiabetestidakhamil9['negative9']/$hasildiabetestidak['Negative'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut PlasmaG
                $pdiabetesyaplasmakurang = $hasildiabetesyaplasmakurang['positivekurang']/$hasildiabetesya['Positive'];
                $pdiabetesyaplasmanormal = $hasildiabetesyaplasmanormal['positivenormal']/$hasildiabetesya['Positive'];
                $pdiabetesyaplasmaberlebih = $hasildiabetesyaplasmaberlebih['positiveberlebih']/$hasildiabetesya['Positive'];
                $pdiabetesyaplasmadiabetic = $hasildiabetesyaplasmadiabetic['positivediabetic']/$hasildiabetesya['Positive'];       

                //probabilitas kelas tidak pada atribut PlasmaG
                $pdiabetestidakplasmakurang = $hasildiabetestidakplasmakurang['negativekurang']/$hasildiabetestidak['Negative'];
                $pdiabetestidakplasmanormal = $hasildiabetestidakplasmanormal['negativenormal']/$hasildiabetestidak['Negative'];
                $pdiabetestidakplasmaberlebih = $hasildiabetestidakplasmaberlebih['negativeberlebih']/$hasildiabetestidak['Negative'];
                $pdiabetestidakplasmadiabetic = $hasildiabetestidakplasmadiabetic['negativediabetic']/$hasildiabetestidak['Negative'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut Tekanan Darah Diastolic
                $pdiabetesyatdnormal = $hasildiabetesyatekanannormal['yatdnormal']/$hasildiabetesya['Positive'];
                $pdiabetesyatdstage1 = $hasildiabetesyastage1['yatdstage1']/$hasildiabetesya['Positive'];
                $pdiabetesyatdstage2 = $hasildiabetesyastage2['yastage2']/$hasildiabetesya['Positive'];
                $pdiabetesyatdstage3 = $hasildiabetesyastage3['yastage3']/$hasildiabetesya['Positive'];

                //probabilitas kelas tidak pada atribut Tekanan Darah Diastolic
                $pdiabetestidaktdnormal = $hasildiabetestidaktekanannormal['tidaktdnormal']/$hasildiabetestidak['Negative'];
                $pdiabetestidakstage1 = $hasildiabetestidakstage1['tidakstage1']/$hasildiabetestidak['Negative'];
                $pdiabetestidakstage2 = $hasildiabetestidakstage2['tidakstage2']/$hasildiabetestidak['Negative'];
                $pdiabetestidakstage3 = $hasildiabetestidakstage3['tidakstage3']/$hasildiabetestidak['Negative'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut TricepsThickness
                $pdiabetesyattnormal = $hasildiabetesyattnormal['yattnormal']/$hasildiabetesya['Positive'];
                $pdiabetesyattsberlebih = $hasildiabetesyattsberlebih['yattsberlebih']/$hasildiabetesya['Positive'];
                $pdiabetesyattberlebih = $hasildiabetesyattberlebih['yattberlebih']/$hasildiabetesya['Positive'];

                //probabilitas kelas tidak pada atribut TricepsThickness
                $pdiabetestidakttnormal = $hasildiabetestidakttnormal['tidakttnormal']/$hasildiabetestidak['Negative'];
                $pdiabetestidakttsberlebih = $hasildiabetestidakttsberlebih['tidakttsberlebih']/$hasildiabetestidak['Negative'];
                $pdiabetestidakttberlebih = $hasildiabetestidakttberlebih['tidakttberlebih']/$hasildiabetestidak['Negative'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut Serum Insulin
                $pdiabetesyasinormal = $hasildiabetesyasinormal['yasinormal']/$hasildiabetesya['Positive'];
                $pdiabetesyasisberlebih = $hasildiabetesyasisberlebih['yasisberlebih']/$hasildiabetesya['Positive'];
                $pdiabetesyasiberlebih = $hasildiabetesyasiberlebih['yasiberlebih']/$hasildiabetesya['Positive'];

                //probabilitas kelas tidak pada atribut Serum Insulin
                $pdiabetestidaksinormal = $hasildiabetestidaksinormal['tidaksinormal']/$hasildiabetestidak['Negative'];
                $pdiabetestidaksisberlebih = $hasildiabetestidaksisberlebih['tidaksisberlebih']/$hasildiabetestidak['Negative'];
                $pdiabetestidaksiberlebih = $hasildiabetestidaksiberlebih['tidaksiberlebih']/$hasildiabetestidak['Negative'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut BMI
                $pdiabetesyabmiunder = $hasildiabetesyabmiunder['yabmiunder']/$hasildiabetesya['Positive'];
                $pdiabetesyabmisehat = $hasildiabetesyabmisehat['yabmisehat']/$hasildiabetesya['Positive'];
                $pdiabetesyabmiover = $hasildiabetesyabmiover['yabmiover']/$hasildiabetesya['Positive'];
                $pdiabetesyabmiobes = $hasildiabetesyabmiobes['yabmiobes']/$hasildiabetesya['Positive'];

                //probabilitas kelas tidak pada atribut BMI
                $pdiabetestidakbmiunder = $hasildiabetestidakbmiunder['tidakbmiunder']/$hasildiabetesya['Positive'];
                $pdiabetestidakbmisehat = $hasildiabetestidakbmisehat['tidakbmisehat']/$hasildiabetesya['Positive'];
                $pdiabetestidakbmiover = $hasildiabetestidakbmiover['tidakbmiover']/$hasildiabetesya['Positive'];
                $pdiabetestidakbmiobes = $hasildiabetestidakbmiobes['tidakbmiobes']/$hasildiabetesya['Positive'];

                //---------------------------------------------------------------------------------------------------------

                //probabilitas kelas ya pada atribut Usia
                $pdiabetesyausiamuda = $hasildiabetesyausiamuda['yausiamuda']/$hasildiabetesya['Positive'];
                $pdiabetesyausiapb = $hasildiabetesyausiapb['yausiapb']/$hasildiabetesya['Positive'];
                $pdiabetesyausiatua = $hasildiabetesyausiatua['yausiatua']/$hasildiabetesya['Positive'];

                //probabilitas kelas tidak pada atribut Usia
                $pdiabetestidakusiamuda = $hasildiabetestidakusiamuda['tidakusiamuda']/$hasildiabetesya['Positive'];
                $pdiabetestidakusiapb = $hasildiabetestidakusiapb['tidakusiapb']/$hasildiabetesya['Positive'];
                $pdiabetestidakusiatua = $hasildiabetestidakusiatua['tidakusiatua']/$hasildiabetesya['Positive'];

                echo "<hr> Menghitung Probabilitas : <br><br>";
                
                echo "Probabilitas Diabetes Positive Pada Masing-Masing Kelas = " . $pdiabetesya . "<br>";
                echo "Probabilitas Diabetes Negative Pada Masing-Masing Kelas = " . $pdiabetestidak . "<br>";
                
                echo "<br><hr>Probabilitas Positive Pregnancies :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 0 Kali = " . $pdiabetesyahamil0 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 1 Kali = " . $pdiabetesyahamil1 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 2 Kali = " . $pdiabetesyahamil2 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 3 Kali = " . $pdiabetesyahamil3 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 4 Kali = " . $pdiabetesyahamil4 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 5 Kali = " . $pdiabetesyahamil5 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 6 Kali = " . $pdiabetesyahamil6 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 7 Kali = " . $pdiabetesyahamil7 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 8 Kali = " . $pdiabetesyahamil8 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Kehamilan 9 Kali = " . $pdiabetesyahamil9 . "<br>";

                echo "<br><hr>Probabilitas Negative Pregnancies :<br><br>";
                
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 0 Kali = " . $pdiabetestidakhamil0 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 1 Kali = " . $pdiabetestidakhamil1 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 2 Kali = " . $pdiabetestidakhamil2 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 3 Kali = " . $pdiabetestidakhamil3 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 4 Kali = " . $pdiabetestidakhamil4 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 5 Kali = " . $pdiabetestidakhamil5 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 6 Kali = " . $pdiabetestidakhamil6 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 7 Kali = " . $pdiabetestidakhamil7 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 8 Kali = " . $pdiabetestidakhamil8 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Kehamilan 9 Kali = " . $pdiabetestidakhamil9 . "<br>";

                echo "<br><hr>Probabilitas Positive Plasma Glukosa :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan Plasma Glukosa Kurang = " . $pdiabetesyaplasmakurang . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Plasma Glukosa Normal = " . $pdiabetesyaplasmanormal . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Plasma Glukosa Berlebih = " . $pdiabetesyaplasmaberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Plasma Glukosa Diabetic = " . $pdiabetesyaplasmadiabetic . "<br>";

                echo "<br><hr>Probabilitas Negative Plasma Glukosa :<br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan Plasma Glukosa Kurang = " . $pdiabetestidakplasmakurang . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Plasma Glukosa Normal = " . $pdiabetestidakplasmanormal . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Plasma Glukosa Berlebih = " . $pdiabetestidakplasmaberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Plasma Glukosa Diabetic = " . $pdiabetestidakplasmadiabetic . "<br>";

                echo "<br><hr>Probabilitas Positive Tekanan Darah :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan Tekanan Darah Normal = " . $pdiabetesyatdnormal . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Tekanan Darah Stage 1 = " . $pdiabetesyatdstage1 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Tekanan Darah Stage 2 = " . $pdiabetesyatdstage2 . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Tekanan Darah Stage 3 = " . $pdiabetesyatdstage3 . "<br>";

                echo "<br><hr>Probabilitas Negative Tekanan Darah :<br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan Tekanan Darah Normal = " . $pdiabetestidaktdnormal . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Tekanan Darah Stage 1 = " . $pdiabetestidakstage1 . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Tekanan Darah Stage 2 = " . $pdiabetestidakstage2. "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Tekanan Darah Stage 3 = " . $pdiabetestidakstage3. "<br>";

                echo "<br><hr>Probabilitas Positive TricepsThickness :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan TricepsThickness Normal = " . $pdiabetesyattnormal . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan TricepsThickness Sedikit Berlebih = " . $pdiabetesyattsberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan TricepsThickness Berlebih = " . $pdiabetesyattberlebih . "<br>";

                echo "<br><hr>Probabilitas Negative TricepsThickness :<br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan TricepsThickness Normal = " . $pdiabetestidakttnormal . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan TricepsThickness Sedikit Berlebih = " . $pdiabetestidakttsberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan TricepsThickness Berlebih = " . $pdiabetestidakttberlebih . "<br>";

                echo "<br><hr>Probabilitas Positive Serum Insulin :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan Serum Insulin Normal = " . $pdiabetesyasinormal . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Serum Insulin Sedikit Berlebih = " . $pdiabetesyasisberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Serum Insulin Berlebih = " . $pdiabetesyasiberlebih . "<br>";

                echo "<br><hr>Probabilitas Negative Serum Insulin :<br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan Serum Insulin Normal = " . $pdiabetestidaksinormal . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Serum Insulin Sedikit Berlebih = " . $pdiabetestidaksisberlebih . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Serum Insulin Berlebih = " . $pdiabetestidaksiberlebih . "<br>";

                echo "<br><hr>Probabilitas Positive BMI : <br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan BMI Underweight = " . $pdiabetesyabmiunder . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan BMI Sehat = " . $pdiabetesyabmisehat . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan BMI Overweight = " . $pdiabetesyabmiover . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan BMI Obesitas = " . $pdiabetesyabmiobes . "<br>";

                echo "<br><hr>Probabilitas Negative BMI : <br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan BMI Underweight = " . $pdiabetestidakbmiunder . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan BMI Sehat = " . $pdiabetestidakbmisehat . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan BMI Overweight = " . $pdiabetestidakbmiover . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan BMI Obesitas = " . $pdiabetestidakbmiobes . "<br>";

                echo "<br><hr>Probabilitas Positive Usia :<br><br>";

                echo "Probabilitas atribut Diabetes Positive Dan Usia Muda = " . $pdiabetesyausiamuda . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Usia Paruh Baya = " . $pdiabetesyausiapb . "<br>";
                echo "Probabilitas atribut Diabetes Positive Dan Usia Tua = " . $pdiabetesyausiatua . "<br>";

                echo "<br><hr>Probabilitas Negative Usia :<br><br>";

                echo "Probabilitas atribut Diabetes Negative Dan Usia Muda = " . $pdiabetestidakusiamuda . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Usia Paruh Baya = " . $pdiabetestidakusiapb . "<br>";
                echo "Probabilitas atribut Diabetes Negative Dan Usia Tua = " . $pdiabetestidakusiatua . "<br>";

                

                if (isset($_POST['test'])) {
                  if (isset($_POST["kehamilan"])) {
                          $pilihan1 = $_POST["kehamilan"];
                          if ($pilihan1=="hamil0") {
                              $kehamilanp = $pdiabetesyahamil0;
                              $kehamilann = $pdiabetestidakhamil0;

                          }elseif ($pilihan1=="hamil1") {

                              $kehamilanp = $pdiabetesyahamil1;
                              $kehamilann = $pdiabetestidakhamil1;

                          }elseif ($pilihan1=="hamil2") {

                              $kehamilanp = $pdiabetesyahamil2;
                              $kehamilann = $pdiabetestidakhamil2;

                          }elseif ($pilihan1=="hamil3") {

                              $kehamilanp = $pdiabetesyahamil3;
                              $kehamilann = $pdiabetestidakhamil3;

                          }elseif ($pilihan1=="hamil4") {

                              $kehamilanp = $pdiabetesyahamil4;
                              $kehamilann = $pdiabetestidakhamil4;
                          
                          }elseif ($pilihan1=="hamil5") {

                              $kehamilanp = $pdiabetesyahamil5;
                              $kehamilann = $pdiabetestidakhamil5;

                          }elseif ($pilihan1=="hamil6") {

                              $kehamilanp = $pdiabetesyahamil6;
                              $kehamilann = $pdiabetestidakhamil6;

                          }elseif ($pilihan1=="hamil7") {

                              $kehamilanp = $pdiabetesyahamil7;
                              $kehamilann = $pdiabetestidakhamil7;

                          }elseif ($pilihan1=="hamil8") {

                              $kehamilanp = $pdiabetesyahamil8;
                              $kehamilann = $pdiabetestidakhamil8;
                          
                          }elseif ($pilihan1=="hamil9") {

                              $kehamilanp = $pdiabetesyahamil9;
                              $kehamilann = $pdiabetestidakhamil9;

                          }

                      }
                      if (isset($_POST["plasma_glukosa"])) {
                              $pilihan2 = $_POST["plasma_glukosa"];
                              if ($pilihan2=="kurangglukosa") {
                                  $plasmap = $pdiabetesyaplasmakurang;
                                  $plasman = $pdiabetestidakplasmakurang;

                              }elseif ($pilihan2=="normalglukosa") {

                                $plasmap = $pdiabetesyaplasmanormal;
                                $plasman = $pdiabetestidakplasmanormal;

                              }elseif ($pilihan2=="glukosaberlebih") {

                                $plasmap = $pdiabetesyaplasmaberlebih;
                                $plasman = $pdiabetestidakplasmaberlebih;

                              }elseif ($pilihan2=="glukosadiabetic") {
                                $plasmap = $pdiabetesyaplasmadiabetic;
                                $plasman = $pdiabetestidakplasmadiabetic;

                              }

                          }
                          if (isset($_POST["tekanandarah"])) {
                                  $pilihan2 = $_POST["tekanandarah"];
                                  if ($pilihan2=="tekanannormal") {
                                      $tekananp = $pdiabetesyatdnormal;
                                      $tekanann = $pdiabetestidaktdnormal;

                                  }elseif ($pilihan2=="tekananstage1") {
                                    $tekananp = $pdiabetesyatdstage1;
                                    $tekanann = $pdiabetestidakstage1;

                                  }elseif ($pilihan2=="tekananstage2") {
                                    $tekananp = $pdiabetesyatdstage2;
                                    $tekanann = $pdiabetestidakstage2;
                                  }elseif ($pilihan2=="tekananstage3") {
                                    $tekananp = $pdiabetesyatdstage3;
                                    $tekanann = $pdiabetestidakstage3;

                                  }

                              }
                              if (isset($_POST["Triceps"])) {
                                      $pilihan2 = $_POST["Triceps"];
                                      if ($pilihan2=="normaltricep") {
                                          $tricepp = $pdiabetesyattnormal;
                                          $tricepn = $pdiabetestidakttnormal;

                                      }elseif ($pilihan2=="sedikitberlebihtricep") {
                                        $tricepp = $pdiabetesyattsberlebih;
                                        $tricepn = $pdiabetestidakttsberlebih;

                                      }elseif ($pilihan2=="berlebihtricep") {
                                        $tricepp = $pdiabetesyattberlebih;
                                        $tricepn = $pdiabetestidakttberlebih;
                                      }

                                  }
                                  if (isset($_POST["Serum"])){
                                  $pilihan6 = $_POST["Serum"];
                                  if ($pilihan6=="Normalinsulin") {
                                      $serump = $pdiabetesyasinormal;
                                      $serumn = $pdiabetestidaksinormal;

                                  }elseif ($pilihan6=="sedikitberlebihinsulin") {
                                      $serump = $pdiabetesyasisberlebih;
                                      $serumn = $pdiabetestidaksisberlebih;

                                  }elseif ($pilihan6=="berlebihinsulin") {
                                      $serump = $pdiabetesyasiberlebih;
                                      $serumn = $pdiabetestidaksiberlebih;

                                  }

                          }
                          if (isset($_POST["BMI"]))
                          {
                                  $pilihan6 = $_POST["BMI"];
                                  if ($pilihan6=="Underweight") {
                                      $bmip = $pdiabetesyabmiunder;
                                      $bmin = $pdiabetestidakbmiunder;

                                  }elseif ($pilihan6=="Healty") {
                                      $bmip = $pdiabetesyabmisehat;
                                      $bmin = $pdiabetestidakbmisehat;

                                  }elseif ($pilihan6=="Overweight") {
                                      $bmip = $pdiabetesyabmiover;
                                      $bmin = $pdiabetestidakbmiover;

                                  }elseif ($pilihan6=="Obesitas") {
                                      $bmip = $pdiabetesyabmiobes;
                                      $bmin = $pdiabetestidakbmiobes;

                                  }

                          }
                          if (isset($_POST["Usia"]))
                          {
                                  $pilihan7 = $_POST["Usia"];
                                  if ($pilihan7=="muda") {
                                      $usiap = $pdiabetesyausiamuda;
                                      $usian = $pdiabetestidakusiamuda;

                                  }elseif ($pilihan7=="paruhbaya") {
                                      $usiap = $pdiabetesyausiapb;
                                      $usian = $pdiabetestidakusiapb;

                                  }elseif ($pilihan7=="tua") {
                                      $usiap = $pdiabetesyausiatua;
                                      $usian = $pdiabetestidakusiatua;

                          }
                        }


                      $positif = is_numeric($diabetesya)*is_numeric($kehamilanp)*is_numeric($plasmap)*is_numeric($tekananp)*is_numeric($tricepp)*is_numeric($serump)*is_numeric($bmip)*is_numeric($usiap);
                      $negatif = is_numeric($diabetestidak)*is_numeric($kehamilann)*is_numeric($plasman)*is_numeric($tekanann)*is_numeric($tricepn)*is_numeric($serumn)*is_numeric($bmin)*is_numeric($usian);

                      if ($positif<$negatif) {
                        echo "<br>Hasil Test Data<br>";
                        echo"Kriteria yang dipilih lebih banyak yang negatif diabetes";
                        echo "$positif";
                        echo "$negatif";
                      }else {
                        echo "<br>Hasil Test Data<br>";
                        echo"Kriteria yang dipilih lebih banyak yang positif diabetes";
                        echo "$positif";
                        echo "$negatif";
                      }
                }







                



                // echo "<br>";
                // echo "Data Testing <br>";
                // echo "Kehamilan = 2 <br> 
                //       Plasma Glukosa = Normal <br> 
                //       Tekanan Darah = Normal <br> 
                //       TricepsThickness = Normal <br> 
                //       Serum Insulin = Normal <br> 
                //       BMI = Sehat <br> 
                //       Usia = Muda <br>";
                // echo "<br>";
                
                // $Main = $pdiabetesya*$pdiabetesyahamil2*$pdiabetesyaplasmanormal*$pdiabetesyatdnormal*$pdiabetesyattnormal*$pdiabetesyasinormal*$pdiabetesyabmisehat*$diabetesyausiamuda;
                // $TidakMain = $pdiabetestidak*$pdiabetestidakhamil2*$pdiabetestidakplasmanormal*$pdiabetestidaktdnormal*$pdiabetestidakttnormal*$pdiabetestidaksinormal*$pdiabetestidakbmisehat*$diabetestidakusiamuda;
                //                 if($Main>$TidakMain){
                //                     echo "Nilai Keputusan Naive Bayes = ". $Main . "<br>";
                //                     echo "<br>";
                //                     echo "Terbang <br>";
                //                     echo "Ayo Kita Main Paralayang Terbang Mengintari Dunia";
                //                 }
                //                 else{
                //                     echo "Nilai Keputusan Naive Bayes = ". $TidakMain . "<br>";
                //                     echo "<br>";
                //                     echo "Tidak Terbang <br>";
                //                     echo "YAHHHHHHHH Kita Dirumah Aja Yukkkkkkk";
                //                 }
                   

                ?>


            </div>
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                      <div class="col-lg">
                          <div class="card">
                              <div class="card-header">
                                  <strong class="card-title">Insert Data Test</strong>
                              </div>
                              <div class="card-body card-block">
                                  <form method=post action=insertdaging.php class="form-horizontal">
                                     <div class="row form-group">
                                        <div class="col col-sm-5"><label for="kehamilan" class=" form-control-label">Pregnancies</label></div>
                                           <div class="col col-sm-6">
                                            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                              <select id="kehamilan">
                                                  <option nama="hamil0" value="hamil0">Hamil 0 Kali</option>
                                                  <option nama="hamil1" value="hamil1">Hamil 1 Kali</option>
                                                  <option nama="hamil2" value="hamil2">Hamil 2 Kali</option>
                                                  <option nama="hamil3" value="hamil3">Hamil 3 Kali</option>
                                                  <option nama="hamil4" value="hamil4">Hamil 4 Kali</option>
                                                  <option nama="hamil5" value="hamil5">Hamil 5 Kali</option>
                                                  <option nama="hamil6" value="hamil6">Hamil 6 Kali</option>
                                                  <option nama="hamil7" value="hamil7">Hamil 7 Kali</option>
                                                  <option nama="hamil8" value="hamil8">Hamil 8 Kali</option>
                                                  <option nama="hamil9" value="hamil9">Hamil 9 Kali</option>
                                               </select>   
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="plasma_glukosa" class=" form-control-label">Plasma Glucosa</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                              <select id="plasma_glukosa">
                                                  <option nama="kurangglukosa" value="kurangglukosa">Kurang Glukosa</option>
                                                  <option nama="normalglukosa" value="normalglukosa">Normal (80-100)</option>
                                                  <option nama="glukosaberlebih" value="glukosaberlebih">Berlebih (101-125)</option>
                                                  <option nama="glukosadiabetic" value="glukosadiabetic">Diabetic (> 125)</option>
                                              </select> 
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="tekanandarah" class=" form-control-label">Tekanan Darah Diastolic</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                              <select id="tekanandarah">
                                                  <option nama="tekanannormal" value="tekanannormal">Normal (< 80)</option>
                                                  <option nama="tekananstage1" value="tekananstage1">Tekanan Darah Tinggi Stage 1 (80-89)</option>
                                                  <option nama="tekananstage2" value="tekananstage2">Tekanan Darah Tinggi Stage 2 (> 90)</option>
                                                  <option nama="tekananstage3" value="tekananstage3">Tekanan Darah Tinggi Stage 3 (> 120)</option>
                                              </select> 
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="Triceps" class=" form-control-label">Triceps Thickness</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                            <select id="Triceps">
                                                  <option nama="normaltricep" value="normaltricep">Normal (7 - 25)</option>
                                                  <option nama="sedikitberlebihtricep" value="sedikitberlebihtricep">Sedikit Berlebih (26-39)</option>
                                                  <option nama="berlebihtricep" value="berlebihtricep">Berlebih (> 39)</option>
                                              </select> 
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="Serum" class=" form-control-label">Serum Insulin</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                            <select id="Serum">
                                                  <option nama="Normalinsulin" value="Normalinsulin">Normal (14 - 40)</option>
                                                  <option nama="sedikitberlebihinsulin" value="sedikitberlebihinsulin">Sedikit Berlebih (41-70)</option>
                                                  <option nama="berlebihinsulin" value="berlebihinsulin">Berlebih (> 70)</option>
                                              </select>
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="BMI" class=" form-control-label">BMI</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                              <select id="BMI">
                                                  <option nama="Underweight" value="Underweight">Underweight (< 20)</option>
                                                  <option nama="Healty" value="Healty">Healty (21 - 25)</option>
                                                  <option nama="Overweight" value="Overweight">Overweight (26 - 30)</option>
                                                  <option nama="Obesitas" value="Obesitas">Obesitas (> 30)</option>
                                              </select>
                                            </form>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-sm-5"><label for="Usia" class=" form-control-label">Usia</label></div>
                                          <div class="col col-sm-6">
                                            <form >
                                              <select id="Usia">
                                                  <option nama="muda" value="muda">Muda (20 - 29)</option>
                                                  <option nama="paruhbaya" value="paruhbaya">Paruh Baya (30 - 44)</option>
                                                  <option nama="tua" value="tua">Tua (>45)</option>
                                              </select>
                                            </form>
                                          </div>
                                      </div>

                              </div>

                              <div class="card-footer">
                                  <button class="btn btn-primary btn-sm" type="submit" name="test">TEST</button>
                                  <!-- <button class="btn btn-primary btn-sm" type="button" name="update">Insert</button> -->
                                  <!-- <input type=submit class="btn btn-primary btn-sm" name=insert value=InsertData> -->
                                  <button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-ban"></i> Clear</button>

                              </div>
                              </form>
                          </div>
                      </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/lib/data-table/datatables-init.js"></script>


        <script type="text/javascript">
          $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
          });
        </script>

    </body>

</html>
