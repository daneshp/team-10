<?php session_start(); ?>
<!DOCTYPE html>

<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/fusioncharts.js"></script>
    <script src="js/fusioncharts.charts.js"></script>
    <script src="js/fusioncharts.theme.fint.js"></script>
    <script src="js/pie1.js"></script>
    <script src="js/pie2.js"></script>
    <script src="js/pie3.js"></script>
  </head>

  <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
      <div class="loader">
        <div class="preloader">
          <div class="spinner-layer pl-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
        <p>Please wait...</p>
      </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
          <a href="javascript:void(0);" class="bars"></a>
          <a class="navbar-brand" href="index.html">ADMIN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div>
      </div>
    </nav>
    <!-- #Top Bar -->
    <section>
      <!-- Left Sidebar -->
      <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
          <div class="image">
            <img src="images/user.png" width="48" height="48" alt="User" />
          </div>
          <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
            <div class="email"><?php echo $_SESSION['email']; ?></div>
            <div class="btn-group user-helper-dropdown">
              <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
              <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li><a href="../signout.php"><i class="material-icons">input</i>Sign Out</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
          <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="index.php">
                <span>Donor</span>
              </a>
            </li>
            <li>
              <a href="volunteer.php">
                  <span>Volunteers</span>
                </a>
            </li>
            <li class="active">
              <a href="patient.php">
                  <span>Patients</span>
                </a>
            </li>
          </ul>
        </div>

        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
          <div class="copyright">
            &copy; 2017 - 2018 <a href="javascript:void(0);">Admin</a>.
          </div>
          <div class="version">
            <b>Version: </b> 1.0.5
          </div>
        </div>
        <!-- #Footer -->
      </aside>
      <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="block-header">

          
          <button id="cmd">Generate PDF</button>

          <h2>DASHBOARD</h2>
        </div>




<!-- <div id="content">
    <h3>Sample h3 tag</h3>
    <p>Sample pararaph</p>
</div>
<div id="editor"></div>
<button id="cmd">Generate PDF</button> -->




        <div class="row clearfix" id="content">
          <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">

                        <div class="body">
                            <div  id="chart-container1" class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
        </div>
        <script>
          $(document).ready(function(){
      $.ajax({
        url: 'http://localhost/team-10/admin/pie_data/pie_data1.php',
        type: 'GET',
        success : function(data) {
            var chartData=data;    
        var chartProperties = {
             "caption": "Split of patients by types",
            "subCaption": "This year",
            "numberPrefix": "",
            "showPercentInTooltip": "0",
            "decimals": "1",
            "useDataPlotColorForLabels": "1",
            //Theme
            "theme": "fint"
          };
          apiChart = new FusionCharts({
            type: 'pie2d',
            renderAt: 'chart-container1',
            width: '550',
            height: '350',
            dataFormat: 'json',
            dataSource: {
              "chart": chartProperties,
              "data": chartData
            }
          });
          apiChart.render();
        }
      });
    });
        </script>

        <div class="row clearfix">
          <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">

                        <div class="body">
                            <div id="chart-container2" class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                <div class="row clearfix">
                  <!-- Task Info -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="card">

                                <div class="body">
                                    <div id="chart-container3" class="table-responsive">
                                          <div id="map" style="width: 100%; height: 400px"></div>

                                          <script
                                             src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
                                          </script>

                                          <script
                                             src="http://leaflet.github.io/Leaflet.heat/dist/leaflet-heat.js">
                                          </script>
                                        <script src="2013-earthquake.js"></script>
                                          <script>

                                              var map = L.map('map').setView([19.7515,75.7139], 5);
                                              mapLink =
                                                  '<a href="http://openstreetmap.org">OpenStreetMap</a>';
                                              L.tileLayer(
                                                  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                  attribution: '&copy; ' + mapLink + ' Contributors',
                                                  maxZoom: 18,
                                              }).addTo(map);

                                              var heat = L.heatLayer(quakePoints,{
                                                  radius: 30,
                                                  blur: 20,
                                                  maxZoom: 10,
                                              }).addTo(map);

                                          </script>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

        </div>
    </section>


    

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <script>
      var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('report.pdf');
});

// This code is collected but useful, click below to jsfiddle link.

    </script>
  </body>

</html>
