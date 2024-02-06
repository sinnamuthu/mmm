
<!DOCTYPE ht
ml>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillUp - Online Learning Platform</title>		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
        <link href="assets/css/mmm-styles.css" rel="stylesheet">
        <link href="assets/css/mmm-styles2.css" rel="stylesheet">
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
							<div class="prg-blk">
								<div class="item-img"><img src="assets/img/ic-progress.png"></div>
								<div class="progress-in">
									<p>Your Progress</p>
									<div class="progress">
										<div class="progress-bar" role="progressbar" aria-valuenow="30"
										aria-valuemin="0" aria-valuemax="100" style="width:30%">
										30%
										</div>
									</div>
									<p class="blue">30% Completed</p>
								</div>
							</div>
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
							
							<div class="login-blk">
								<div class="item-img"><img src="assets/img/user-img.png"></div>
								<div class="item-desc">
									<p>Yogesh kumar </p>
									<p>ID: 2084965</p>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>			
			<!-- ============================ Course Detail ================================== -->
			<div class="gray pt-5">
				<div class="container-fluid" id="fullcontainer">   
				    
                <!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									<div class="dashboard_wrap_batch d-flex align-items-center justify-content-between">
                                       
                                        <a  href="#" class="btn " onclick="goBack() ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M8.854 1.646a.5.5 0 0 0-.707 0l-7 7a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .707-.708L3.707 9H13.5a.5.5 0 0 0 0-1H3.707l5.147-5.146a.5.5 0 0 0 0-.708z"/>
                                            </svg>
                                            Back
                                        </a>

										 <!-- row -->
										 <div class="row">

		
											</div>
											<div class="col-md-6 mb-4">												
												<div class="instructor_add_text  text-right">
													<a href="{{route('createbatch')}}" class="btn_instructor " name="crt_batch " >Create Batch</a>
												</div>
											</div>
										</div>
										<!-- row over -->										
									</div>
								</div>
							<!-- /Row -->         

                            <div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info_batch">
								     	<div class="dashboard_wrap ">

                                            <!-- row -->
                                            <div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 mb-2">
													<div class="table-responsive ">
														<table class="table dash_list">
															<thead>
																<tr>
																	
																	<th scope="col">Batch Name</th>
																	<th scope="col">Batch Status</th>
																	<th scope="col">Batch Start Date</th>
																	<th scope="col">Batch End Date</th>

																</tr>
															</thead>
															<tbody>
																<!-- 3 -->
																@foreach ($batches as $batch)															<tr>
																	
																	<td><h6>{{ $batch->bt_innertitle }}</h6></td>
																	<td><span class="trip theme-cl theme-bg-light">{{ $batch->status }}</span></td>
																	<td>
																		@if ($batch->start_date)
																			<span class="smalls">{{ \Carbon\Carbon::parse($batch->start_date)->format('d/m/Y') }}</span>
																		@else
																			<span class="smalls">N/A</span>
																		@endif
																	</td>
																	<td>
																		@if ($batch->end_date)
																			<span class="smalls">{{ \Carbon\Carbon::parse($batch->end_date)->format('d/m/Y') }}</span>
																		@else
																			<span class="smalls">N/A</span>
																		@endif
																	</td>
																</tr>
															@endforeach
																
																
																
																
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


        <!-- go back button script -->
       
           
          
		
	</body>
</html>