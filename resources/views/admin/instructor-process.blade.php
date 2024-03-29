<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Instructor Process View</title>		 
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
								</li><!--./notification bell-->		
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
						<div class="dashboard_wrap d-flex align-items-center justify-content-between">
							<div class="col-lg-6 col-md-6 col-sm-12 hdg">
							Instructor
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 pb-4 instructor_add_text  text-right">
							<a href="{{route('createinstructor')}}" class="btn_instructor ">Create Instructor</a>
							</div>
						</div>
					</div>
					<!-- /Row -->
                            
				<div class="row">
					<div class="col-sm-12">
					<div class="instructor_info">
						<div class="dashboard_wrap">
						<!-- resources/views/admin/instructor-process.blade.php -->

						@foreach ($instructors as $instructor)
							<div class="single_instructor">
								<div class="single_instructor_thumb">
									<a href="#">
									<img src="https://via.placeholder.com/700x550" name="in_propic" class="img-fluid rounded" alt=""  />

									</a>
								</div>
								<div class="single_instructor_caption">
									<h4><a href="#">{{ $instructor->ins_fname }} {{ $instructor->ins_lname }}</a></h4>
									<span>{{ $instructor->ins_imstqua }}</span>
									<div class="item-desc">
										<p>{{ $instructor->ins_bdescription }}</p>
									</div>
								</div>
								<div class="dropdown show">
									
									<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-h"></i>
									</a>
									<div class="drp-select dropdown-menu">
										<a class="dropdown-item" href="{{route ('editinstructor')}}">Edit</a>
										<a class="dropdown-item" href="{{route ('delinstructor',$instructor->instructor_id)}}">Delete</a>
									</div>
								</div>
							</div>
						@endforeach


							<!-- pagination  -->
							<div class="row align-items-center justify-content-between">
								<div class="col-xl-6 col-lg-6 col-md-12">
									<p class="p-0">Showing 1 to 5 of 10 entire</p>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12">
									<nav class="float-right">
										<ul class="pagination smalls m-0">
											<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-circle-left"></i></a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item active">
											<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
											</li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
											<a class="page-link" href="#"><i class="fas fa-arrow-circle-right"></i></a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
						
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

				<!-- Delete all content In Modal -->
				<div class="modal fade delCnt" id="delCnt" tabindex="-1" role="dialog" aria-labelledby="delCnt" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content overli">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
								</button>
							</div>
							<div class="modal-body">
								<p>What should be done with content owned by this user?</p>
								<ul class="no-ul-list">
									<li>
										<input id="a-1" class="checkbox-custom" name="a-1" type="radio">
										<label for="a-1" class="checkbox-custom-label">Delete all content</label>
									</li>
									<li>
										<input id="a-2" class="checkbox-custom" name="a-2" type="radio">
										<label for="a-2" class="checkbox-custom-label">Attribute all content to</label>
							</li>									
						</ul>
								<div class="d-flex btn-wrap align-to-right">
									<div class="btn-ask-qst"><a href="javascript:;" data-dismiss="modal" aria-label="Close">Cancel</a></div>
									<div class="btn primary"><a href="javascript:;">Delete</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->	
				
				<!-- Attribute all content In Modal -->
				<div class="modal fade delCnt" id="delAttCnt" tabindex="-1" role="dialog" aria-labelledby="delAttCnt" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content overli">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
								</button>
							</div>
							<div class="modal-body">
								<p>What should be done with content owned by this user?</p>
								<ul class="no-ul-list">
									<li>
										<input id="a-1" class="checkbox-custom" name="a-1" type="radio">
										<label for="a-1" class="checkbox-custom-label">Delete all content</label>
									</li>
									<li>
										<input id="a-2" class="checkbox-custom" name="a-2" type="radio">
										<label for="a-2" class="checkbox-custom-label">Attribute all content to</label>
										<div class="smalls attribute-all-cnt">
											<select id="attributeAllCnt" class="form-control">
												<option value="">Select</option>
												<option value="1">Dr. Ahmed Ali</option>
												<option value="2">Dr. Bala Murugan S</option>
												<option value="3">Dr. Ilavarasi</option>
												<option value="4">Dr. P Anbalagan</option>
												<option value="4">Dr. Kamalakannan</option>
											</select>
										</div>
							</li>									
						</ul>
								<div class="d-flex btn-wrap align-to-right">
									<div class="btn-ask-qst"><a href="javascript:;" data-dismiss="modal" aria-label="Close">Cancel</a></div>
									<div class="btn primary"><a href="JavaScript:Void(0);" data-toggle="modal" data-target="#dataMoveCnt">Confirm Deletion</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->
				
				<!-- Attribute all content In Modal -->
				<div class="modal fade delCnt" id="dataMoveCnt" tabindex="-1" role="dialog" aria-labelledby="dataMoveCnt" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content overli">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
								</button>
							</div>
							<div class="modal-body">
								<p>Instructor: <b>"Dr. Balamurugan S"</b> has been deleted. All data of of <b>"Dr. Balamurugan S"</b> has been moved to <b>"Dr. P Anbalagan"</b></p>
								<div class="d-flex btn-wrap justify-content-center">
									<div class="btn primary"><a href="javascript:;" data-dismiss="modal" aria-label="Close">Ok</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Modal -->
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
       
           
          <script>
			/*File selection*/
			jQuery('input[name=file]').change(function() {
				alert(jQuery(this).val()); 
				});
				jQuery('figure.filename').click(function() {
				jQuery('input[name=file]').click();
			});
		</script>
		
	</body>
</html>