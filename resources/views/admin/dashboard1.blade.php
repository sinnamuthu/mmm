<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Cart Action</title>		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
        <link href="assets/css/mmm-styles.css" rel="stylesheet">
        <link href="assets/css/mmm-styles2.css" rel="stylesheet">
        <link href="assets/css/styled.css" rel="stylesheet">
    </head>
	
    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
          <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container-fluid">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<a class="nav-brand" href="#" style="border-left: 1px solid #333;">
								<img src="assets/img/logo-mmm.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
										<a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="crs_yuo12 w-auto text-white theme-bg">
											<span class="embos_45"><i class="fas fa-sign-in-alt mr-1"></i>Sign In</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper">
							
							<ul class="nav-menu nav-menu-social">
								
								<li class="account-drop brd-rgt bell"><!--notification bell-->
									<a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="embos_45"><i class="fas fa-bell text-default"></i><i class="embose_count red">3</i></span>
									</a>
									<div class="dropdown-menu pull-right animated flipInX">
										<div class="drp_menu_headr bg-warning">
											<h4>3 Notifications</h4>
										</div>
										<div class="ground-list ground-hover-list">
											<div class="ground ground-list-single">
												<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
													<div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
												</div>

												<div class="ground-content">
													<h6><a href="#">Great Yogesh</a></h6>
													<small class="text-fade">New User Enrolled in Python</small>
													<span class="small">Just Now</span>
												</div>
											</div>
											
											<div class="ground ground-list-single">
												<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-danger">
													<div class="position-absolute text-danger h5 mb-0"><i class="fas fa-comments"></i></div>
												</div>

												<div class="ground-content">
													<h6><a href="#">legend Muthu</a></h6>
													<small class="text-fade">Shilpa Send a Message</small>
													<span class="small">02 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-list-single">
												<div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-info">
													<div class="position-absolute text-info h5 mb-0"><i class="fas fa-grin-squint-tears"></i></div>
												</div>

												<div class="ground-content">
													<h6><a href="#">Beautiful Abishai</a></h6>
													<small class="text-fade">Need Responsive Business Tem...</small>
													<span class="small">10 Min Ago</span>
												</div>
											</div>
											
										</div>
									</div>
								</li>
														
								
							</ul>
							
							<!-- <div class="login-blk">
								<div class="item-img"><img src="assets/img/user-img.png"></div>
								<div class="item-desc">
									<p>Admin </p>
								</div>
							</div> -->

                            <!-- test -->

                            <div class="login-blk">
								<div class="item-img"><img src="assets/img/user-img.png"></div>
								<div class="item-desc">
									<!-- Example single danger button -->
<div class="btn-group">
    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Admin
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"> Edit Profile </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item del_top_txt " href="#">Logout</a>
    </div>
  </div>
								</div>
							</div>







						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>			
			<!-- ============================ Course Detail ================================== -->
			<div class="gray pt-5 pb-5">
				<div class="container-fluid">
					<div class="row student-profile-blk">
						<!--<div class="col-md-3">
							<div class="left-panel"><!--Left Panel--						
								
                                <div class="d-navigation">
									<ul id="side-menu">
										<li class="active"><a href="javascript:;"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                        <li ><a href="javascript:;"><i class="fas fa-shopping-basket"></i>Courses</a></li>
                                        <li ><a href="javascript:;"><i class="fa-solid fa-user"></i>Batch</a></li>
                                        <li ><a href="javascript:;"><i class="fas fa-user"></i>Instructor</a></li>
                                        <li ><a href="javascript:;"><i class="fas fa-user"></i>Student</a></li>

									</ul>
								</div>

							</div><!--./Left Panel
						</div>-->
						<div class="side-bar collapse">
							<div class="logo-name-wrapper">
							  <div class="logo-name">
								<img src="assets/img/logo-mmm.png" class="logo" alt="logo app" srcset="" />
							  </div>
							  <button class="logo-name__button">
								<div class="bx bx-arrow-from-right logo-name__icon" id="logo-name__icon"></div>
							  </button>
							  <!-- <i class='bx bx-arrow-from-left'></i> -->
							</div>
					  
							<ul class="features-list">
							  <li class="features-item active">
								<i class="bx"><img src="assets/img/ic-dashboard.png"><span class="status"></span></i>
								<span class="features-item-text">Dashboard</span>
								<span class="tooltip">Dashboard</span>
							  </li>
					  
							  <li class="features-item">
								<i class="bx"><img src="assets/img/ic-courses.png"></i>
								<span class="features-item-text">Courses</span>
								<span class="tooltip">Courses</span>
							  </li>
					  
							  <li class="features-item">
								<i class="bx"><img src="assets/img/ic-batch.png"></i>
								<span class="features-item-text">Batch</span>
								<span class="tooltip">Batch</span>
							  </li>
					  
							  <li class="features-item">
								<i class="bx"><img src="assets/img/ic-instuctor.png"></i>
								<span class="features-item-text">Instructor</span>
								<span class="tooltip">Instructor</span>
							  </li>
					  
							  <li class="features-item">
								<i class="bx"><img src="assets/img/ic-students.png"></i>
								<span class="features-item-text">Student</span>
								<span class="tooltip">Student</span>
							  </li>
							</ul>
					  
						  </div>
						<div class="col-lg-12 col-md-9 col-sm-12">						
							<!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 ">
									<div class="dashboard_wrap_top d-flex align-items-center justify-content-between">
                                        <!-- <div class="col boxtab"> -->

										<a href="" target="_blank" class="boxtab-link">
											<div class="col boxtab">
                                            <div class="row top_box">
                                                <div class="col-6 top_inner_box">
                                                    <h3> Courses </h3>
                                                <br>
                                                <p class="number_stlnum">52</p>
                                                </div>
                                                <div class="col-6 top_inner_box align-items-center">
                                                    <img src="assets/img/ic1.png" alt="">
                                                </div>
                                            </div>
                                        

                                        </div> 
										</a>


										


                                    <a href="{{ route('batchdashboard') }}" class="boxtab-link">
                                        <div class="col boxtab">
                                            <div class="row top_box">
                                                <div class="col-6 top_inner_box">
                                                    <h3> Batch  </h3>
                                                <br>
                                                <p class="number_stlnum">52</p>
                                                </div>
                                                <div class="col-6 top_inner_box align-items-center">
                                                    <img src="assets/img/ic2.png" alt="">
                                                </div>
                                            </div>
                         
                                        </div>
									</a>	
                                        <!--  -->

										<a href="dbr_three.html" target="_blank" class="boxtab-link">
                                         <div class="col boxtab">
                                            <div class="row top_box">
                                                <div class="col-6 top_inner_box">
                                                    <h3> Instructor  </h3>
                                                <br>
                                                <p class="number_stlnum">52</p>
                                                </div>
                                                <div class="col-6 top_inner_box align-items-center">
                                                    <img src="assets/img/ic3.png" alt="">
                                                </div>
                                            </div>
                                            
                                         </div>
										</a>


                                        <!--  -->


                                       
                                          
									<a href="db_four.html" target="_blank" class="boxtab-link">
                                        <div class="col boxtab">
                                            <div class="row top_box">
                                                <div class="col-6 top_inner_box">
                                                    <h3> Student </h3>
                                                <br>
                                                <p class="number_stlnum">22</p>
                                                </div>
                                                <div class="col-6 top_inner_box align-items-center">
                                                    <img src="assets/img/ic4.png" alt="">
                                                </div>
                                            </div>
                                            
                                        </div>
									</a>



										
									</div>
								</div>
							</div>

							<!-- /Row -->

                            <!-- test -->

                            

                            <!-- test -->


                            <!-- section -->


                            <div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info_batch">
								     	<div class="dashboard_wrap ">
															
											<div class="row align-items-end p-3">
												<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                                    <h4 class=""> Courses </h4>

												</div>
																
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="input-with-icon">
                                                <input type="text" class="form-control" placeholder="Search Your Cources">
                                                <i class="ti-search"></i>
                                            </div>

													
												</div>
												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
													
												</div>
												<div class="col-xl-1 col-lg-5 col-md-6 justify-content-end">
													
												</div>
                                                <div class="col-xl-1 col-lg-5 col-md-6 justify-content-end">
                                                    <p > <a href="google.com" class="view_all">View all</a> </p>
													
												</div>
											</div>
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 mb-2">
													<div class="table-responsive">
														<table class="table dash_list">
															<thead>
																<tr>
																	<th scope="col">Thumbnail</th>
																	<th scope="col">Title</th>
																	<th scope="col">Instructor</th>
																	<th scope="col">Enrolled</th>
																	<th scope="col">Batch</th>
																	<th scope="col">Status</th>
																	<th scope="col">Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row"><img src="assets/img/Thum.png" alt=""></th>
																	<td ><h6>  How To Learn UI/UX Design pattern for succesfull software applications</h6></td>

																	
																	<td ><div class="smalls">10</div></td>
																	<td ><span    class="smalls">25</span></td>
																	<td ><span class="smalls">2024</span></td>
																	<td  ><span class="trip theme-cl theme-bg-light">PUBLISHED</span></td>
																	<td>
																		<div class="dropdown show">
																			<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																				<i class="fas fa-ellipsis-h"></i>
																			</a>
																			<div class="drp-select dropdown-menu">
																				<a class="dropdown-item" href="JavaScript:Void(0);">publish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Unpublish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Duplicate Course</a>
																				<a class="dropdown-item " id="del_txt" href="JavaScript:Void(0);">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<!--  -->
																<tr>
																	<th scope="row"><img src="assets/img/Thum.png" alt=""></th>
																	<td ><h6>  How To Learn UI/UX Design pattern for succesfull software applications</h6></td>

																	
																	<td ><div class="smalls">10</div></td>
																	<td  ><span    class="smalls">25</span></td>
																	<td   ><span class="smalls">2024</span></td>
																	<td ><span class="trip text-danger bg-light-danger">	UN-PUBLISHED</span></td>
																	<td>
																		<div class="dropdown show">
																			<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																				<i class="fas fa-ellipsis-h"></i>
																			</a>
																			<div class="drp-select dropdown-menu">
																				<a class="dropdown-item" href="JavaScript:Void(0);">publish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Unpublish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Duplicate Course</a>
																				<a class="dropdown-item " id="del_txt" href="JavaScript:Void(0);">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>

																<!--  -->
																<tr>
																	<th scope="row"><img src="assets/img/Thum.png" alt=""></th>
																	<td><h6> Software Applications</h6></td>
																	<td><div class="smalls">10</div></td>
																	<td><span class="smalls">50</span></td>
																	<td ><span class="smalls">2023</span></td>
																	<td ><span class="trip text-danger bg-light-danger"> UN-PUBLISHED</span></td>
																	<td>
																		<div class="dropdown show">
																			<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																				<i class="fas fa-ellipsis-h"></i>
																			</a>
																			<div class="drp-select dropdown-menu">
																				<a class="dropdown-item" href="JavaScript:Void(0);">publish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Unpublish Course</a>
																				<a class="dropdown-item" href="JavaScript:Void(0);">Duplicate Course</a>
																				<a class="dropdown-item " id="del_txt" href="JavaScript:Void(0);">Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>
												
															</tbody>
														</table>
													</div>
												</div>
											</div>
		
											<!-- table -->

			<!-- ============================ Page Title End ================================== -->
						  
								     	</div>
                                    </div>
								</div>
							</div>

                            <!-- section -->


							

                            <!--  -->
							
						</div>
					</div>
				</div>
			</div>
			
			<!-- ============================ Course Detail ================================== -->
						
				<!-- ============================ Footer Start ================================== -->
				<footer id="footer" class="default">
					<div class="footer-middle">
						<div class="container-fluid">
							<div class="row">
								
								<div class="col-lg-4 col-md-5">
									<div class="footer_widget">
										<img src="assets/img/logo-mmm-ftr.png" class="mb-2" alt="" />
									</div>
								</div>
								
								<div class="col-lg-3 col-md-7 ml-auto">
									<div class="footer_widget">
										<img src="assets/img/logo-crds-ftr.png" class="mb-2" alt="" />
									</div>
								</div>
								
								<div class="col-lg-5 col-md-7 ml-auto">
									<div class="footer_widget">
										<p><strong>Address</strong> - 4-A, Dr, Mogappair, Chennai, Tamil Nadu 600037</p>	
										<p><strong>Phone No</strong> <a href="tel:1800123599999" target="_blank">1800 123 599 999</a></p>	
										<p><strong>Mail Id</strong> <a href="mailto:info@mmm.com" target="_blank">info@mmm.com</a></p>	
									</div>								
								</div>
							</div>
						</div>
					</div>
					
					<div class="footer-bottom">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-12 col-md-12 text-center">
									<p class="mb-0"><a href="https://themezhub.com"><img src="assets/img/power-bleap.png"></a>.</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!-- ============================ Footer End ================================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
			
			

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.js"></script> 
		<script src="assets/js/summernote.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>	
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		
		<script>
			/*File selection*/
			jQuery('input[name=file]').change(function() {
				alert(jQuery(this).val()); 
				});
				jQuery('figure.filename').click(function() {
				jQuery('input[name=file]').click();
			});
		</script>
		  <script type="text/javascript">
			{
			  let sideBar = document.querySelector('.side-bar');
			  let arrowCollapse = document.querySelector('#logo-name__icon');
			  sideBar.onclick = () => {
				sideBar.classList.toggle('collapse');
				arrowCollapse.classList.toggle('collapse');
				if (arrowCollapse.classList.contains('collapse')) {
				  arrowCollapse.classList =
					'bx bx-arrow-from-left logo-name__icon collapse';
				} else {
				  arrowCollapse.classList = 'bx bx-arrow-from-right logo-name__icon';
				}
			  };
			}
		  </script>
	</body>
</html>