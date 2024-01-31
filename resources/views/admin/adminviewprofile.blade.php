@include('admin/header')
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
													<h6><a href="#">legend </a></h6>
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
								<a class="dropdown-item" href="{{ route('admin_view.edit',base64_encode(auth()->user()->id)) }}">
									<div class="item-img"><img src="assets/img/user-img.png"></div>
								</a>
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
			<div class="gray pt-5 pb-5">
				<div class="container-fluid">

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
										</div>
										<!-- row over -->										
									</div>
								</div>
							<!-- /Row -->        


					<div class="row create-batch adm-pro-dash">
						
						<div class="col-md-12">
							<div class="dashboard_wrap"><!--profile form-->	
								<div class="row ">
									<div class="col-xl-6 col-lg-6 col-md-6 mt-5 ">
										<h2 class="m-0">Manage Profile</h2>
									</div>
									<div class="col-xl-5 col-lg-2">
										<div class="img-upload align-to-right">
											<input type="file" class="custom-file-input" id="customFile">
											<img class="dashbimg" src="assets/img/man.png">
										</div>
									</div>                                    
								</div>
                                
                                <br>
								
								<div class="row">
									<div class="col-xl-11 col-lg-11 col-md-12">
										<form enctype="multipart/form-data" method="POST" action="">
                                            @csrf
          									@method('PUT')

											<div class="form-group smalls">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="hospitalname" value="{{$profile[0]['hospitalname']}}" placeholder="Yogesh Kumar">
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Email Id </label>
                                                <input type="mail" class="form-control" name="email" value="{{$profile[0]['email']}}" placeholder="yogesh@gmail.com">
                                            </div>
                                            
                                            <!-- <div class="form-group smalls">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="*******">
                                            </div> -->

                                            <div class="form-group smalls">
                                                <label>Password</label>
                                                <div class="input-group">
                                                    <input id="passwordInput" type="password" value="{{$profile[0]['password']}}" class="form-control" placeholder="*******">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i id="togglePassword" class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- test -->


                                           
                                            <div class="d-flex btn-wrap align-to-right">
												<div class="btn-ask-qst"><a href="javascript:;">Edit Profile</a></div>
												<div class="btn-ask-qst"><a href="javascript:;">Cancel</a></div>
												<button type="submit" class="btn primary">Update</button>
											</div>
											
										</form>
									</div>
								</div>

                                
								
								<div class="clearfix"></div>	
								
							</div>

						</div>
					</div>
				</div>
			</div>


			
			
			<!-- ============================ Course Detail ================================== -->
						
@include('admin/footer')