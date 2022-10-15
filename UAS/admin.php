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
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets/scss/style.css">
  <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li class="active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDiabetes" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel">Detail Diabetes </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body modal-lg" >
            <!-- Ini isinya modul pop up-->
            <div class="card-body" >
              <table class="table table-sm">
                <thead>
                  <tr>
                    <!-- <th scope="col">No</th> -->


                    <th scope="col">Pregnancies</th>
                    <th scope="col">PlasmaGlucose</th>
                    <th scope="col">DiastolicBlood</th>
                    <th scope="col">Tricep</th>
                    <th scope="col">SerumInsulin</th>
                    <th scope="col">BMI</th>
                    <th scope="col">DiabetesPedigre</th>
                    <th scope="col">AGE</th>
                    <th scope="col">Diabetic</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'connect.php';
      						$sql="select * from diabetes where diabetes = 1";
      						$result=mysqli_query($conn, $sql);

      						$no=1;
      						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tr><td>$a[Pregnancies]</td><td>$a[PlasmaG]</td><td>$a[DiastolicBloodPressure]</td><td>$a[TricepsThickness]</td><td>$a[SerumInsulin]</td><td>$a[BMI]</td><td>$a[DiabetesPedigree]</td><td>$a[Age]</td><td>$a[Diabetes]</td></tr>";
                     $no++;
      						}
                  echo "</tbody></table>";
      						?>
            </div>
            <!-- <p>There are three species of zebras.</p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalNONDiabetes" tabindex="-1" data-target=".bd-example-modal-lg" role="dialog" aria-labelledby="stockModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel">Data Non Diabetes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body-lg">
            <!-- Ini isinya modul pop up-->
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th scope="col">No</th> -->

                    <th scope="col">Pregnancies</th>
                    <th scope="col">PlasmaGlucose</th>
                    <th scope="col">DiastolicBlood</th>
                    <th scope="col">Tricep</th>
                    <th scope="col">SerumInsulin</th>
                    <th scope="col">BMI</th>
                    <th scope="col">DiabetesPedigre</th>
                    <th scope="col">AGE</th>
                    <th scope="col">Diabetic</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'connect.php';
      						$sql="select * from diabetes where diabetes = 1";
      						$result=mysqli_query($conn, $sql);

      						$no=1;
      						while ($a=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tr><td>$a[Pregnancies]</td><td>$a[PlasmaG]</td><td>$a[DiastolicBloodPressure]</td><td>$a[TricepsThickness]</td><td>$a[SerumInsulin]</td><td>$a[BMI]</td><td>$a[DiabetesPedigree]</td><td>$a[Age]</td><td>$a[Diabetes]</td></tr>";
                $no++;
      						}
                  echo "</tbody></table>";
      						?>
            </div>
            <!-- <p>There are three species of zebras.</p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="content mt-3">

      <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> You successfully login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="card text-white bg-flat-color-1">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <?php
                  include 'connect.php';
                  $sql= "select Diabetes from diabetes where Diabetes = 1";
                  $result= mysqli_query($conn, $sql);
                  $countdaging=mysqli_num_rows($result);
                             ?>
            <h4 class="mb-0">
              <span class="count"><?php echo $countdaging; ?></span>
            </h4>
            <p class="text-light">Diabetes</p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDiabetes">Detail </button>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <!-- <canvas id="widgetChart1"></canvas> -->
            </div>

          </div>

        </div>
      </div>

      <div class="col-sm-6">
        <div class="card text-white bg-flat-color-1">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <?php
                include 'connect.php';
                $sql= "select Diabetes from diabetes where Diabetes=0";
                $result= mysqli_query($conn, $sql);
                $countsapi=mysqli_num_rows($result);
                             ?>
            <h4 class="mb-0">
              <span class="count"><?php echo $countsapi; ?></span>
            </h4>
            <p class="text-light">Data Non Diabetes</p>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalNONDiabetes">Detail </button>
            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <!-- <canvas id="widgetChart2"></canvas> -->
            </div>

          </div>

        </div>
      </div>
      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
              <canvas id="widgetChart2"></canvas>
            </div>

          </div>
        </div>
      </div> -->
      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

          </div>

          <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
          </div>
        </div>
      </div> -->
      <!--/.col-->

      <!-- <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
          <div class="card-body pb-0">
            <div class="dropdown float-right">
              <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="dropdown-menu-content">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <h4 class="mb-0">
              <span class="count">10468</span>
            </h4>
            <p class="text-light">Members online</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
              <canvas id="widgetChart4"></canvas>
            </div>

          </div>
        </div>
      </div> -->
      <!--/.col-->



      <!-- GRAFIK BATANG-->
      <script type="text/javascript" src="js/Chart.js"></script>
      <?php
      include 'connect.php';
      ?>

      <div style="width: 800px;margin: 0px auto;">
        <canvas id="chartSDiagram"></canvas>
      </div>

      <br>
      <br>

      <script>
      var ctx = document.getElementById("chartSDiagram").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Diagram Batang Diabetes"],
          datasets: [
            {
            label: 'Diabetes',
            data: [


                    <?php
                    include 'connect.php';
                    $sql="select sum(Diabetes) as sum from diabetes where Diabetes = 1";
                    $result=mysqli_query($conn, $sql);


                    while ($a=mysqli_fetch_assoc($result)){
                    $output = $a['sum'];
                    echo "$output";

                    }

                     ?>
            ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
          },

          {
          label: 'Non Diabetes',
          data: [
            <?php
            include 'connect.php';
            $sql="select count(Diabetes) as sum from diabetes where Diabetes = 0";
            $result=mysqli_query($conn, $sql);


            while ($a=mysqli_fetch_assoc($result)){
            $output = $a['sum'];
            echo "$output";

            }
             ?>
          ],
          backgroundColor: [
            'rgba(245, 176, 65, 0.2)'
          ],
          borderColor: [
            'rgba(245, 176, 65, 1)'
          ],
          borderWidth: 1
          }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
      </script>
      <!-- GRAFIK -->

      <!-- DIAGRAM PIE -->
      <div style="width: 800px;margin: 0px auto;">
        <canvas id="chartPieDiabetes"></canvas>
        <center><p>Diagram Diabetes</p></center>
      </div>

      <br>
      <br>

      <script>
      var ctx = document.getElementById("chartPieDiabetes").getContext('2d');
      var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Diabetes", "NON Diabetes"],
        datasets: [{
          backgroundColor: [

            "#e74c3c",
            "#34495e"
          ],
          data: [

          <?php
          include 'connect.php';
          $sql="select count(Diabetes) as sum from diabetes where Diabetes = 1";
          $result=mysqli_query($conn, $sql);


          while ($a=mysqli_fetch_assoc($result)){
          $output = $a['sum'];
          echo "$output";

          } ?>,
          <?php
          include 'connect.php';
          $sql="select count(Diabetes) as sum from diabetes where Diabetes = 0";
          $result=mysqli_query($conn, $sql);


          while ($a=mysqli_fetch_assoc($result)){
          $output = $a['sum'];
          echo "$output";

          } ?>
          ]
        }]
      }
      });
      </script>
      <!-- GRAFIK -->












    </div> <!-- .content -->
  </div><!-- /#right-panel -->

  <!-- Right Panel -->

  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>


  <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/widgets.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
  <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
  <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
  <script>
    (function($) {
      "use strict";

      jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    })(jQuery);
  </script>

</body>

</html>
