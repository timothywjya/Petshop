<<?php
    session_start();
	include 'connection.php';
?>
!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DASHBOARD FELICE PETSHOP</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/dashboard.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/998146e7bf.js" crossorigin="anonymous"></script>		
	</head>
	<body>
		<div class="d-flex" id="wrapper">

			<!-- Sidebar -->
			<div class="border-right" id="sidebar-wrapper">
  				<div class="side-bar">
     				<header style="width: 230px; height: 65px;">
						<div class="sidebar-heading"><img src="logo_felice.png" style="width: 70px; height: 70px;">&nbsp;FELICE PETSHOP</div>
					</header>
					<div class="menu">
						<div class="item"><a href="dashboard_menu.php" target="frmContent"><i class="fas fa-desktop"></i><span>Dashboard</span></a></div>
					 	<div class="item"><a href="admin_dashboard.php" target="frmContent"><i class="fas fa-users"></i><span>Admin</span></a></div>
					 	<div class="item">
							<a class="sub-btn"><i class="fas fa-fw fa-wrench"></i><span>Pages</span><i class="fas fa-angle-right dropdown"></i></a>
							<div class="sub-menu">
							   <a href="home_dashboard.php" class="sub-item" target="frmContent"><span>Home</span></a>
							   <a href="about_dashboard.php" class="sub-item" target="frmContent"><span>About</span></a>
							   <a href="services_dashboard.php" class="sub-item" target="frmContent"><span>Services</span></a>
							   <div class="item">
								<a class="sub-btn"><span>Products</span><i class="fas fa-angle-right dropdown"></i></a>
								<div class="sub-menu">
									<a href="product_list.php" class="sub-item" id="sub_item" target="frmContent"><span>Accessories</span></a>
							   		<a href="cat_list.php" class="sub-item" id="sub_item" target="frmContent"><span>Cat Food</span></a>
									<a href="dog_list.php" class="sub-item" id="sub_item" target="frmContent"><span>Dog Food</span></a>
								</div>
								</div>
							   <a href="contact_dashboard.php" class="sub-item" target="frmContent"><span>Contact</span></a>
							</div>
					   	</div>
					</div>
   				</div>
			</div>
			<!-- /#sidebar-wrapper -->
	
			<!-- Page Content -->
			<div id="page-content-wrapper">
				<nav class="navbar navbar-expand-lg navbar-light border-bottom" id="header" style="height: 80px">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span id="admin_name">
									<?php
									if(isset($_SESSION['email']))
									{
											$email = $_SESSION['email'];
											$query = "SELECT * FROM tb_user where user_email = '$email' limit 1";
								
											$result = mysqli_query($conn, $query);
											while($row = mysqli_fetch_assoc($result))
											{
												$f_name = $row['first_name'];
												$l_name = $row['last_name'];
												echo $f_name;
											}
									}
									?>
									<?php echo $l_name?>
								</span>
								<i class="fa-solid fa-circle-user" id="user_icon" style="font-size:35px;"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" id="logout" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="logout.php" onclick="return confirm ('Apakah Anda yakin ingin keluar?')" style="text-align:center">
										Log Out &nbsp;  
										<i class="fa-solid fa-arrow-right-from-bracket"></i>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
		
				<div class="container-fluid">
					<div>
						<iframe src="dashboard_menu.php" name="frmContent" style="border:0" height="1020px" width="100%"></iframe>
					</div><br><br><br>
					<!-- Footer -->
					<footer class="sticky-footer">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Felice PetShop Dashboard 2022</span>
                    </div>
					</footer>
					<!-- End of Footer -->
				</div>
			</div>
			<!-- /#page-content-wrapper -->

			

        </div>
        <!-- /#wrapper -->
		
		 <script type="text/javascript">
		   $(document).ready(function(){
			 $('.sub-btn').click(function(){
			   $(this).next('.sub-menu').slideToggle();
			   $(this).find('.dropdown').toggleClass('rotate');
			 });
		
		   });
		</script>
		
		<script>
			$(".item a").click(function() {   
				$('a').removeClass("active");
				$('i').removeClass("active"); 
				$(this).addClass("active");  
			});
		</script>
	</body>
</html>