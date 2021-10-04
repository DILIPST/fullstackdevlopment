<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Profile</title>
		<link rel = "icon" href = "Like.png" type = "image/x-icon">
		<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<!-- CSS Files -->
		<link href="material-dashboard.css?v=2.1.2" rel="stylesheet" />
	</head>
	<body class="">
		<div class="wrapper ">
			<div class="sidebar" data-color="black" data-background-color="black" >
				<div class="logo">
					<a href="../Home.php" class="simple-text logo-normal"><a href="../Home.php" class="simple-text logo-normal"><img src="logo.png" width="130" height="130"><br>Raise My Voice</a>
				</div>
				<div class="sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item  ">
							<a class="nav-link" href="dashboard_admin.php">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item active ">
							<a class="nav-link" href="profile.php">
								<i class="material-icons">person</i>
								<p>User Complaints</p>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="tables.php">
								<i class="material-icons">content_paste</i>
								<p>Table List</p>
							</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="notifications.php">
								<i class="material-icons">notifications</i>
								<p>Notifications</p>
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
							<h3>Administrator</h3><h5>User Complaints</h5>
						</div>
					</div>
				</nav>
				<!-- End Navbar -->
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8">
								<div class="card">
									<div class="card-header card-header-primary">
										<h4 class="card-title">Complaint</h4>
										<p class="card-category">Viewing Complaint</p>
										<div class="collapse navbar-collapse justify-content-end">
											
										</div>
									</div>
									<div class="card-body">
											<form class="navbar-form" method="GET">
											  <div class="input-group no-border">
												<input type="text" class="form-control" placeholder="ID Search" name="user_id" value="<?php if(isset($_GET['user_id'])){echo $_GET['user_id'];}?>">
												<button type="submit" class="btn btn-white btn-round btn-just-icon">
												  <i class="material-icons">search</i>
												  <div class="ripple-container"></div>
												</button>
											  </div>
											</form>
											<?php
												$con = mysqli_connect("sql207.epizy.com","epiz_28433216","KwQXsYkBpEI","epiz_28433216_raisemyvoice");
												if(isset($_GET['user_id']))
												{
													$user_id = $_GET['user_id'];
													$query = "SELECT * FROM complaints WHERE user_id='$user_id'";
													$query_run = mysqli_query($con,$query);
													if(mysqli_num_rows($query_run)>0)
													{
														foreach($query_run as $row)
														{
															?>
															<form action="delete.php" method="POST" enctype="multipart/form-data">
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="bmd-label-floating">Complaint ID</label>
														<input type="number" name="user_id" class="form-control" value="<?=$row['user_id'];?>" />
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="bmd-label-floating">Date - Time</label>
														<input type="text" name="date" class="form-control" value="<?=$row['date'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label class="bmd-label-floating">First name</label>
														<input type="text" class="form-control" value="<?=$row['fname'];?>" disabled />
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label class="bmd-label-floating">Last name</label>
														<input type="text" class="form-control" value="<?=$row['lname'];?>" disabled />
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														<label class="bmd-label-floating">Show name</label>
														<input type="text" class="form-control" value="<?=$row['sname'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-7">
													<div class="form-group">
														<label class="bmd-label-floating">E-mail address</label>
														<input type="email" class="form-control" value="<?=$row['email'];?>" disabled />
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label class="bmd-label-floating">Postal Code</label>
														<input type="number" class="form-control" value="<?=$row['zip'];?>" disabled />
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="bmd-label-floating">Complaint</label>
														<textarea type="text" name="complaint" class="form-control" rows="8" cols="60" value="" disabled><?=$row['complaint'];?></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="bmd-label-floating">Proof</label><br>&emsp;&emsp;&emsp;&emsp;
														<?php
															echo'<img src="data:image;base64,'.base64_encode($row['proof']).'" alt="Proof" style="width:500px; height:300px">'
														?>
													</div>
												</div>
											</div>
															<?php
														}
													}
													else
													{
														echo "No Records Found";
													}
												}
											?>
									</div>
								</div>
								<button type="submit" class="btn btn-primary pull-right" value="delete">DELETE RECORD"</button>
                                </form>
							</div>
						</div>
					</div>
				</div>
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
			$(document).ready(function() 
			{
				$().ready(function() 
				{
					$sidebar = $('.sidebar');
					$sidebar_img_container = $sidebar.find('.sidebar-background');
					$full_page = $('.full-page');
					$sidebar_responsive = $('body > .navbar-collapse');
					window_width = $(window).width();
					fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
					if (window_width > 767 && fixed_plugin_open == 'Dashboard') 
					{
						if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) 
						{
							$('.fixed-plugin .dropdown').addClass('open');
						}
					}
					$('.fixed-plugin a').click(function(event) 
					{
						// Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
						if ($(this).hasClass('switch-trigger')) 
						{
							if (event.stopPropagation) 
							{
								event.stopPropagation();
							}
							else if (window.event) 
							{
								window.event.cancelBubble = true;
							}
						}
					});
					$('.fixed-plugin .active-color span').click(function() 
					{
						$full_page_background = $('.full-page-background');
						$(this).siblings().removeClass('active');
						$(this).addClass('active');
						var new_color = $(this).data('color');
						if ($sidebar.length != 0) 
						{
							$sidebar.attr('data-color', new_color);
						}
						if ($full_page.length != 0) 
						{
							$full_page.attr('filter-color', new_color);
						}
						if ($sidebar_responsive.length != 0) 
						{
							$sidebar_responsive.attr('data-color', new_color);
						}
					});
					$('.fixed-plugin .background-color .badge').click(function() 
					{
						$(this).siblings().removeClass('active');
						$(this).addClass('active');
						var new_color = $(this).data('background-color');
						if ($sidebar.length != 0) 
						{
							$sidebar.attr('data-background-color', new_color);
						}
					});
					$('.fixed-plugin .img-holder').click(function() 
					{
						$full_page_background = $('.full-page-background');
						$(this).parent('li').siblings().removeClass('active');
						$(this).parent('li').addClass('active');
						var new_image = $(this).find("img").attr('src');
						if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) 
						{
							$sidebar_img_container.fadeOut('fast', function() 
							{
								$sidebar_img_container.css('background-image', 'url("' + new_image + '")');
								$sidebar_img_container.fadeIn('fast');
							});
						}
						if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) 
						{
							var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
							$full_page_background.fadeOut('fast', function() 
							{
								$full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
								$full_page_background.fadeIn('fast');
							});
						}
						if ($('.switch-sidebar-image input:checked').length == 0) 
						{
							var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
							var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
							$sidebar_img_container.css('background-image', 'url("' + new_image + '")');
							$full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
						}
						if ($sidebar_responsive.length != 0) 
						{
							$sidebar_responsive.css('background-image', 'url("' + new_image + '")');
						}
					});
					$('.switch-sidebar-image input').change(function() 
					{
						$full_page_background = $('.full-page-background');
						$input = $(this);
						if ($input.is(':checked')) 
						{
							if ($sidebar_img_container.length != 0) 
							{
								$sidebar_img_container.fadeIn('fast');
								$sidebar.attr('data-image', '#');
							}
							if ($full_page_background.length != 0) 
							{
								$full_page_background.fadeIn('fast');
								$full_page.attr('data-image', '#');
							}
							background_image = true;
						}
						else 
						{
							if ($sidebar_img_container.length != 0) 
							{
								$sidebar.removeAttr('data-image');
								$sidebar_img_container.fadeOut('fast');
							}
							if ($full_page_background.length != 0) 
							{
								$full_page.removeAttr('data-image', '#');
								$full_page_background.fadeOut('fast');
							}
							background_image = false;
						}
					});
					$('.switch-sidebar-mini input').change(function() 
					{
						$body = $('body');
						$input = $(this);
						if (md.misc.sidebar_mini_active == true) 
						{
							$('body').removeClass('sidebar-mini');
							md.misc.sidebar_mini_active = false;
							$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
						} 
						else 
						{
							$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
							setTimeout(function() 
							{
								$('body').addClass('sidebar-mini');
								md.misc.sidebar_mini_active = true;
							}, 300);
						}
						// we simulate the window Resize so the charts will get updated in realtime.
						var simulateWindowResize = setInterval(function() 
						{
							window.dispatchEvent(new Event('resize'));
						}, 180);
						// we stop the simulation of Window Resize after the animations are completed
						setTimeout(function() 
						{
							clearInterval(simulateWindowResize);
						}, 1000);
					});
				});
			});
		</script>
	</body>
</html>