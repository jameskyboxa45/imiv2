<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script></head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Manager</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">การตรวจจับความเสี่่ยง</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./dashboard.html">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="nav-link" href="./user.html">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">whatshot</i>
                  </div>
                  <p class="card-category">อัตราการเต้นหัวใจ</p>
                  <h3 class="card-title">         
                     <span id="lastHeartlate"></span>
                    <small>/s</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <span><i class="material-icons text-danger">warning</i>
                    <a id = "heartcheck"></a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">bloodtype</i>
                  </div>
                  <p class="card-category">ออกซิเจนในเลือด</p>
                  <h3 class="card-title">         
                    <span id="lastSp02"></span>
                   <small>%</small>
                 </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <span><i class="material-icons text-danger">warning</i>
                      <a id ="spo2check"></a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">notifications</i>
                   </div>
                  <p class="card-category">สถานะเสียง</p>
                  <h3 class="card-title">         
                    <span id="soundstatus"></span>
                   
                 </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button"  >ปิดเสียงแจ้งเตือน</button>

                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <canvas id="myChart" width="400" height="200"></canvas>
                </div>
                <div class="card-body">
                  <h4 class="card-title">กราฟอัตราการเต้นหัวใจ</h4>
                  
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> <span id="lastupdate">x</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <canvas id="myChart2" width="400" height="200"></canvas>
                </div>
                <div class="card-body">
                  <h4 class="card-title">กราฟค่าออกซิเจนในเลือด</h4>
                 
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> <span id="lastupdate2"></span>
                  </div>
                </div>  
              </div>
            </div>
          
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-9">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                     Tasks:
                    </div>
                  </div>
                </div>
                <div id="test" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#test" data-slide-to="0" class="active"></li>
                    <li data-target="#test" data-slide-to="1"></li>
                    <li data-target="#test" data-slide-to="2"></li>
                  </ul>
                
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://dm.lnwfile.com/pejlgo.jpg" alt="sensorวัดการเต้นของหัวใจ" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="https://fw.lnwfile.com/a80m9d.jpg" alt="sensoวัดอุณหภูมิร่างกาย" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="https://j.lnwfile.com/hiu7t7.jpg" alt="NodeMCU" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.programmersought.com/images/576/b733fc6c6efddb5d5295894739ea5200.png" alt="ThinkSpeak" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="https://fh.lnwfile.com/82d5cg.jpg" alt="Monitor" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="data:image/jpeg;base64,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" alt="ไฟ LED" width="460" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="https://j.lnwfile.com/q792v8.jpg" alt="อุปกรณ์เสียงเเจ้งเตือน" width="460" height="300">
                    </div>
                  </div>
                
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#test" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#test" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
          
                  
                
                </div>
              </div>
            </div>
            <div class="col-lg-6  col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Employees Stats</h4>
                
                </div>
                
                <iframe src= https://thingspeak.com/channels/1458407/maps/channel_show width="460" height="300" ></iframe>

              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="https://jameskywing.blogspot.com/">
                  MyBlog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Jame</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    function loaddata(){
      let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
         $.getJSON(url).done(function(data){
           console.log(data);
           let feed = data.feeds;
           console.log(feed);
               $("#lastHeartlate").text(feed[0].field1 );
               $("#soundstatus").text(feed[0].field2 );
               $("#lastSp02").text(feed[0].field3 );
               $("#lastupdate").text(feed[0].created_at);
               $("#lastupdate2").text(feed[0].created_at);
               
               
               
  
         })
         .fail(function(error){
  
  
         });
    }
    function alarm() {
      let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
         $.getJSON(url).done(function(data){
           console.log(data);
           let feed = data.feeds;
           var x = document.getElementById("heartcheck");
           var y = document.getElementById("spo2check");
           if(feed[0].field1>100 || feed[0].field1<60 ){
            
                 x.innerHTML = "หัวใจเต้นผิดปกติ";
           } if(feed[0].field1<=100 && feed[0].field1>=60 ){
            
            x.innerHTML = "หัวใจเต้นปกติ";
      }
      if(feed[0].field3 <= 95  ){
            
            y.innerHTML = "ออกซืเจนในเเลือดผิดปกติ";
      } if(feed[0].field1<=100 && feed[0].field1>95 ){
       
       y.innerHTML = "ออกซืเจนในเเลือดปกติ";
 }
          })
         .fail(function(error){
  
  
         });
}
     function showchart(plot_data){
       var ctx = document.getElementById('myChart').getContext('2d');
  
       
       var myChart = new Chart(ctx,{
             type: 'line' ,
             data:{
              
               labels:plot_data.xlabel,
               datasets:[{
                 label: plot_data.label,
                 data: plot_data.data,
                 borderColor: 'rgb(75, 192, 192)',
                
                 
               }]
             }
       });
     }
     function showchart2(data2){
       var ctx = document.getElementById('myChart2').getContext('2d');
  
       
       var myChart = new Chart(ctx,{
             type: 'line' ,
             data:{
              
               labels:data2.xlabel,
               datasets:[{
                 label: data2.label,
                 data: data2.data,
                 borderColor: 'rgb(75, 192, 192)',
                
                 
               }]
             }
       });
     }
  
    
      $(()=>{
         
         let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
         
         $.getJSON(url).done(function(data){
          let channel=data.channel;
           let feed = data.feeds;
           console.log(feed);
        
         var plot_data=Object();
             var xlabel=[];
             var heartrate=[];
             var sp02=[];
                
             
             $.each(feed,(k,v)=>{
                xlabel.push(v.entry_id);
                heartrate.push(v.field1);
                sp02.push(v.field3);
            
                
             });
                        
             plot_data.xlabel=xlabel;
             plot_data.data=heartrate;
             plot_data.label=channel.field1;
              showchart(plot_data);

              var data2 = new Object();
                data2.xlabel=xlabel;
                data2.data=sp02;
                data2.label=channel.field3;
                showchart2(data2);
                    
         })
         .fail(function(error){
  
        });
         loaddata();
        alarm();
         $("button").click(function(){
  $.post("https://api.thingspeak.com/update.json&quot",{
  api_key: "MK9S5I8G2ECORCB7",
  field2: "0" })
  location.reload(true);
   });
    }    )
  </script>
</body>

</html>