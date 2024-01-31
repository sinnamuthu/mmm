<!DOCTYPE html>
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
								</li><!--./notification bell-->
														
								<!--<li>
									<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
										<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
									</a>
								</li>
								<li class="add-listing theme-bg">
									<a href="signup.html" class="text-white">Get Started</a>
								</li>-->
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
			<div class="gray pt-5 pb-5">
				<div class="container-fluid">
					<div class="row course-setup">
						<div class="col-md-12">
							<div class="dashboard_wrap"><!--profile form-->								
								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="btn-back"><a href="#">Back</a></div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
										<h2 class="m-0">Course setup</h2>
									</div>
								</div>
								
								<div class="row justify-content-center">
									<div class="col-xl-12 col-lg-12 col-md-12">
										<form>
											<div class="form-group smalls">
												<div class="simple-input">
													<select id="bat" class="form-control" name="batch_cbatch"/>
														<option value="">&nbsp;</option>
														<option value="1">2021</option>
														<option value="2">2022</option>
														<option value="3">2023</option>
														<option value="4">2024</option>
													</select>
												</div>
											</div>
												<div class="form-group smalls">
													<select name="instructor" id="instructor" multiple>
														<option value="1">Dr. Abishai</option>
														<option value="2">Dr. Muthu</option>
														<option value="3">Dr. Yogesh</option>
														<option value="4">Dr. Deepak</option>
													</select>
												</div>
											</div>
											<div class="form-group smalls">
												<label>Course Title</label>
												<input type="text" class="form-control" value="" placeholder="e.g. UI/UX Design" name="ctitle"/>
											</div>																
											<div class="form-group smalls">
												<label>Course Description</label>
												<textarea class="summernote" name="course_descp" /></textarea>
											</div>
											<div class="form-group smalls">
												<label>Course Module</label>
											<div class="course-module-wrap">
												<div class="course-module-blk"><!--Course Modal-->
													<div class="course-module-in">
														<h3>How To Learn UI/UX Design pattern for succesfull software applications
															<span class="trip theme-cl theme-bg-light">Published</span>
															<div class="dropdown show">
																<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fas fa-ellipsis-h"></i>
																</a>
																<div class="drp-select dropdown-menu">
																	<a class="dropdown-item" href="JavaScript:Void(0);">Rename</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Publish Course</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);" data-toggle="modal" data-target="#schedule" >Schedule Course</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Duplicate Course</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Delete Course</a>
																</div>
															</div>
														</h3>
													<ul>
														<li>Visual Design<span>Empty</span>
															<div class="dropdown show">
																<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fas fa-ellipsis-h"></i>
																</a>
																<div class="drp-select dropdown-menu">
																	<a class="dropdown-item" href="JavaScript:Void(0);">Rename</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Duplicate Course</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Delete Lesson</a>
																</div>
															</div>
														</li>
														<li>UI/UX Design<span>Empty</span>
															<div class="dropdown show">
																<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fas fa-ellipsis-h"></i>
																</a>
																<div class="drp-select dropdown-menu">
																	<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																</div>
															</div>
														</li>
													</ul>
													<div class="addList">
														<input type="text" id="addList"> 
														<input type="button" name="add" class="btn primary" value="Add" id="newCourse"> 
													</div>
													<div class="btn-wrap"><img src="./assets/img/new-lesson.png" id="newLesson"></div>
													</div>
												</div><!--./Course Modal-->

												<div class="course-module-blk"><!--Course Modal-->
													<div class="course-module-in">
														<h3>Week - 2  UI/UX Design pattern for succesfull software applications
															<span class="trip theme-org theme-bg-org">Scheduled</span>
															<div class="dropdown show">
																<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fas fa-ellipsis-h"></i>
																</a>
																<div class="drp-select dropdown-menu">
																	<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																</div>
															</div>
														</h3>
													<ul>
														<li>Assesment<span>Empty</span>
															<div class="dropdown show">
																<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="fas fa-ellipsis-h"></i>
																</a>
																<div class="drp-select dropdown-menu">
																	<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																	<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																</div>
															</div>
														</li>
													</ul>
													<div class="btn-wrap" id="new-lesson"><a href="javascript:;"><img src="./assets/img/new-lesson.png"></a></div>
													</div>
												</div><!--./Course Modal-->

											</div>

											<div class="new-section">
												<input type="text" id="newSecBlk"> 
												<input type="button" name="newSec" class="btn primary" value="Add" id="newSec"> 
											</div>
											<div class="btn-wrap" id="newSection"><a href="javascript:;"><img src="./assets/img/new-section.png"></a></div>
											<div class="add-image">
												<h3>Thumbnail</h3>
												<div class="btn"><input type="file" class="custom-file-input" id="customFile"><img src="./assets/img/add-image.png"></div>
												<div class="img-upload">
													<input type="file" class="custom-file-input" id="customFile">
													<img src="./assets/img/thumbnail-img.png">
												</div>
											</div>
											<p class="btm">*resolution 640px x 480px</p>
										</div>
										<div class="d-flex btn-wrap justify-content-center">
											<div class="btn primary"><a href="javascript:;">Publish</a></div>
										</div>
										</form>
									</div>
								</div>
								
							</div><!--./profile form-->

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
			
			
			
			<!-- Log In Modal -->
			<div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="schedulemodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content overli" id="loginmodal">
						<div class="modal-header">
							<h3 class="modal-title">Select Date and Time</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<h6>Select Booking Date</h6>
									<div class="row m-0">
										<input type="date" class="col-9 col-sm-9 form-control" name="date" value="08/05/2021">
									</div>
								</div>
								<div class="col-md-6">
									<h6>Select Booking Time</h6>
									<div class="input-group bootstrap-timepicker timepicker">
										<input id="timepicker1" type="text" class="form-control input-small">
										<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									</div>
							    </div>
							</div>

							</div>
						</div>
					</div>
				</div>
			</div>

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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">	
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
			
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

			jQuery(document).ready(function(){
				$('#timepicker1').timepicker();

				$('#newCourse').click(function() { 
    var content = $('#addList').val(); 
	var fixingContent = '<li>' + content + '<span>Empty</span>' +
	'<div class="dropdown show">' +
	'<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>' + '<div class="drp-select dropdown-menu">' +
	'<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>' +
	'<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>' +
	'</div>' + '</div>' + '</li>';
    //var fixingContent = '<li>' + content + '</li>'; 
    
    $('.course-module-blk .course-module-in ul').append(fixingContent);

    // Clear the input box
    $('#addList').val('');
	$('.addList').css('display','none');
	
});

$('#newLesson').click(function(){
	$('.addList').css('display','block');

});

$('#newSection').click(function(){
	$('.new-section').css('display','block');

});

$('#newSec').click(function() { 
    var contents = $('#newSecBlk').val(); 
	$('.addList2').css('display','block');
	var fixingBlk = '<div class="course-module-blk">' + 
    '<div class="course-module-in">' +  '<h3>'+ contents  + '<div class="dropdown show">' +
	'<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>' + '<div class="drp-select dropdown-menu">' +
	'<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>' +
	'<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>' +
	'</div>' + '</div>' +
        '</h3>' + '<ul>'+' ' + '</ul>' +
'<div class="addList">' +
	'<input type="text" id="addList">' +
	'<input type="button" name="add" class="btn primary" value="Add" id="newCourse">' +
'</div>' +
'<div class="btn-wrap"><img src="./assets/img/new-lesson.png" id="newLesson"></div>' +
'</div>' + '</div>' + '<!--./Course Modal-->'

	$('.course-module-wrap').append(fixingBlk);
	
    $('#newSecBlk').val('');
	$('.new-section').css('display','none');
	

})

			})

			
	 
        const dropdownButton = 
              document.getElementById('multiSelectDropdown'); 
        const dropdownMenu =  
              document.querySelector('.dropdown-menu'); 
        let mySelectedItems = []; 
  
        function handleCB(event) { 
            const checkbox = event.target; 
            if (checkbox.checked) { 
                mySelectedItems.push(checkbox.value); 
            } else { 
                mySelectedItems =  
                  mySelectedItems.filter((item) => item !== checkbox.value); 
            } 
  
            dropdownButton.innerText = mySelectedItems.length > 0 
                ? mySelectedItems.join(', ') : 'Select Items'; 
        } 
  
        dropdownMenu.addEventListener('change', handleCB); 
    </script>
	
		<script src="assets/js/multi-select-tag.js"></script>
		<script>
			new MultiSelectTag('instructor', {
			rounded: true,    // default true
			shadow: false,      // default false
			placeholder: 'Choose Instructor',  // default Search...
			tagColor: {
				textColor: '#888888',
				borderColor: '#888888',
				bgColor: '#fff',
			}
		
		})
		</script>
		
		

	</body>
</html>