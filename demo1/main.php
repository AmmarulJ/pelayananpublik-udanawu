
<?php include 'header.php'; ?>
<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="main.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">fitur</h4>
						</li>
						<li class="nav-item">
							<a href="?halaman=maps">
							<i class="fa-solid fa-map-location-dot" style="color: #8d9498;"></i>
								<p>Maps</p>
							</a>
						</li><li class="nav-item">
							<a href="?halaman=form">
							<i class="fa-solid fa-message" style="color: #8d9498;"></i>
								<p>SiDak</p>
							</a></li>
							<li class="nav-item">
							<a href="/Kecamatan Udanawu Dalam Angka 2022.pdf" download>
							<i class="fa-solid fa-file" style="color: #8d9498;"></i>
								<p>Pelaporan Kec. Udanawu</p>
							</a></li>
						<li class="mx-4 mt-2">
							<a href="../index.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span> Home </a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
			<?php
          if(isset($_GET['halaman'])){
            $hal = $_GET['halaman'];
            switch($hal){
              case 'beranda';
                include 'beranda.php';
              break;
			  case 'simbatur';
                include 'simbatur.php';
			  break;
			  case 'simpendik';
                include 'simpendik.php';
			  break;
			  case 'simsos';
                include 'simsos.php';
			  break;
			  case 'simkes';
                include 'simkes.php';
			  break;
			  case 'maps';
                include 'maps.php';
			  break;
			  case 'kesehatan';
			  include 'mapsimkes.php';
			  break;
			  case 'form';
			  include 'form.php';
			  break;
			  case 'sekolah';
			  include 'sekolah.php';
			  break;
			  case 'simlay';
			  include 'simlay.php';
			  break;
            }
          }else{
            include 'beranda.php';
          }
        ?>
			</div>
<?php include 'footer.php'; ?>