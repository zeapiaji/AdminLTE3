<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	</div>
		<?php include 'header.php' ?>	
		<?php include 'sidebar.php' ?>
		<?php include 'connection.php' ?>
		
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include 'content-header.php' ?>
   </div>
    
    <section class="content">
      <div class="container-fluid">
      
	      <!-- Box 1 -->
	      	<div class="row">
	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-secondary">
	              <div class="inner">
	                <h3>150</h3>
	                <p>Students</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-person"></i>
	              </div>
	              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>
	          <!-- ./col -->
	         <div class="col-lg-3 col-6">

            <!-- Box 2 -->
            <div class="small-box" style="background: cyan;">
              <div class="inner">
                <h3>150</h3>
                <p>Total Saldo</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         <div class="col-lg-3 col-6">

         	<!-- Box 2 -->
            <div class="small-box" style="background: coral;">
              <div class="inner">
                <h3>
                <?php 
                	$data= mysqli_query($conn,"SELECT * FROM users WHERE id_role = 3");
                	$count = mysqli_num_rows($data); 
                	echo $count; 
            	?>
                </h3>
                <p>Total Savers Today</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         <div class="col-lg-3 col-6">
         
      </div>
    </section>

<?php include 'js.php'; ?>
</body>
</html>