<!DOCTYPE html>
<html>
	<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Intellipro Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php //echo Uri::base(false);?>/assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
  <?php //Debug::dump(
 // Model_Product::getProductCount());die;//getTotalQuantityBidded());die;
 $allprod= $allprod= [1,2,3,4,5,6,7,8,9,10,11,12];
 $countmaize = 0 ;
 $maize = []; // = Guava , for the demo
foreach($allprod as $item) {
   // $maize[] = [$item['bidmonth']-1,$item['quantity']];
    $maize[] =[$countmaize,rand(3700,4000)];
    //Debug::dump($maize);die;
    $countmaize ++;
}
 $countpeache = 0 ;
$allprod= [1,2,3,4,5,6,7,8,9,10,11,12];
 $Peaches = []; // = tomatoes! for the demo
foreach($allprod as $item) {
    $Peaches[] = [$countpeache,rand(4500,5000)];
     $countpeache ++;
   // $Peaches[] = [$item['bidmonth']-0,$item['quantity']];
}
$allprod= [1,2,3,4,5,6,7,8,9,10,11,12];
 $countmango = 0 ;
 $Mango = [];
foreach($allprod as $item) {
    //$Mango[] = [$item['bidmonth']-1,$item['quantity']];
    $Mango[] = [$countmango,rand(4200,4700)];
     $countmango ++;
}

  //Debug::dump(json_encode($Mango));die;
 ?>
<body>
		<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from projects ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>

                <p>Past and Current Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo Uri::base().'project' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from tasks ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?><sup style="font-size: 20px"></sup></h3>

                <p>Project Tasks</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo Uri::base().'task' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from userprofiles ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>

                <p>Project Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo Uri::base().'userprofile' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(module) as total from patterns ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['total'] ;

                                            echo $rcds;

                ?></h3>

                <p>Total Recurring issues Identified</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo Uri::base().'pattern' ; ?>" class="small-box-footer">View issues <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
     <!--    start of graph -->
 

        <!-- jQuery -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/demo.js"></script>
</body>
</html>

