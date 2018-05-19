<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BPU-JMMI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/table.css" rel="stylesheet">
  <link href="css/keuangan.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
  <header id="header">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">BPU - JMMI</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="user">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"">Jadwal Mengajar <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="userJadwal">Jadwal Mengajar Tersedia</a></li>
              <li><a href="userJadwalTerdaftar">Jadwal Mengajar Saya</a></li>
            </ul>
          </li>          
          <li><a href="">Profil</a></li>           
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../BPU-JMMI"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
  </header>
  
<body>
  <div id="preloader"></div>
  <div class="container fluid">
    <h1>Jadwal Mengajar BPU - JMMI 2018</h1>
    <div class="col-sm-12">
      <div class="panel panel-default panel-table" id="table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
            </div>
            <div class="col col-xs-6 text-center">
              <h4></h4>
            </div>
          </div>
        </div>        
        <div class="panel-body">
          <table class="table table-striped table-bordered table-list">
            <thead>
              <tr>                  
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Desa Binaan</th>
                  <th>Tempat</th>
                  <th><em class="fa fa-cog"></em></th>
              </tr> 
            </thead>
            <tbody>
            @foreach ($jadwalTerdaftar as $jadwals)
              <tr>               
                <td>{{ $jadwals->jadwal->tanggal }} </td>
                <td>{{ $jadwals->jadwal->waktu }} </td>
                <td>{{ $jadwals->jadwal->desaBinaan->nama_desa_binaan }}</td>
                <td>{{ $jadwals->jadwal->tempat }}</td>                           
                <td align="center">
                  <a>
                    <form action="/userJadwalTerdaftar/{{$jadwals->id_jadwal_pengurus}}" method="POST">{{ csrf_field() }}<button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button></form>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col col-xs-4">Page 1 of 5
            </div>
            <div class="col col-xs-8">
              <ul class="pagination hidden-xs pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              <ul class="pagination visible-xs pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>     
    </div>    
  </div>
  

  <!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>BPU-JMMI</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
