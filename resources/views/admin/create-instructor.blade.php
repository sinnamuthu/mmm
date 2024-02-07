@include('admin/header')

			<!-- End Navigation -->
			<div class="clearfix"></div>			
			<!-- ============================ Course Detail ================================== -->
			<div class="gray pt-5">
				<div class="container-fluid" id="fullcontainer"> 

                    


                <!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									<div class="dashboard_wrap d-flex align-items-center justify-content-between">
                                        <a  href="#" class="btn " onclick="goBack() ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M8.854 1.646a.5.5 0 0 0-.707 0l-7 7a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .707-.708L3.707 9H13.5a.5.5 0 0 0 0-1H3.707l5.147-5.146a.5.5 0 0 0 0-.708z"/>
                                            </svg>
                                            Back
                                        </a>
                                        <!-- <div class="btn-back"><a href="#">Back</a></div> -->

										
									</div>
								</div>
							</div>
							<!-- /Row -->

 

                            <div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info">
								     	<div class="dashboard_wrap">
										
										  <div class="form_blocs_wrap">
												<div class="row justify-content-between">
													
													<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                                        <div class="left-panel">

                                                       
                                                        <h2 class=" instuctor_title ">Create Instructor</h2>
                                                        <div class="d-user-avater">
                                                            <div class="choose-img">								
                                                                <figure class="filename avater" for="file-input"><img src="../assets/images/profile.png"></figure>
                                                                <input name="file" type="file">
                                                            </div>
                                                            <h3>Doctor</h3>
                                                            
                                                        </div>
                                                    </div>
													</div>
													
													   <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
															
															<!-- Basic -->
															<form action="{{ route('newinstructor') }}" method="post" enctype="multipart/form-data">
                                                             @csrf
                                                           <div class="instructor_data">
																
																<div class="form-group smalls">
																	<label>First Name*</label>
																	<input type="text" class="form-control" name="ins_fname"  placeholder="First Name">
																</div>
																
																<div class="form-group smalls">
																	<label>Last Name</label>
																	<input type="text" class="form-control"  name="ins_lname" placeholder="Last Name">
																</div>

																<div class="form-group smalls">
																	<label>Mail Id</label>
																	<input type="email" class="form-control" name="ins_mailid" placeholder="example@gmail.com">
																</div>

																<div class="form-group smalls">
																	<label>Password </label>
																	<input type="password" class="form-control" name="ins_pass" placeholder="Set your password">
																</div>

                                                                <div class="form-group smalls">
																	<label>Mobile Number</label>
																	<input type="tel" class="form-control" name="ins_mob" placeholder="12345678910">
																</div>

																<div class="form-group smalls">
																	<label>Instructor Name</label>
																	<input type="text" class="form-control" name="ins_intname" placeholder="eg : Dr.Gokul">
																</div>
																
																<div class="form-group smalls">
																	<label>Instructor Qualification </label>
																	<input type="text" class="form-control"  name="ins_imstqua" placeholder="MBBS , MD">
																</div>


																<div class="form-group smalls">
																	<label>Description</label>
																	<textarea class="summernote" name="ins_bdescription"></textarea>
																</div>
																
																<div class="form-group smalls">
																	<label>User Image</label>
																	<div class="custom-file">
																	  <input type="file" class="custom-file-input" id="customFile" name="instructor_image">
																	  <label class="custom-file-label" for="customFile" >Choose file</label>
																	</div>
																</div>
																<div class="d-flex btn-wrap align-to-right">
																	<div class="btn-ask-qst" id="exitButton"><a href="javascript:;">Cancel</a></div>
																	<button type="submit" onclick="submitForm()">Create Instructor</button>
																	<!-- popup exit -->

																	<div id="confirmModal" class="modal">
																		<div class="modal-content">
																		  <span class="close">&times;</span>
																		  <p>Discard changes without saving?</p>
																		  <button id="okButton">OK</button>
																		  <button id="cancelButton">Cancel</button>
																		</div>
																	  </div>
																</div>
															</div>
</form>
															
												
													
												</div>
										</div>
									</div>
                                    </div>
								</div>
							</div>



			</div>
			
			<!-- ============================ Course Detail ================================== -->
			
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
            function goBack() {
              window.history.back();
            }
          </script>
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
@include('admin/footer')