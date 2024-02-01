@include('admin/header')
			<div class="clearfix"></div>			
			<!-- ============================ Course Detail ================================== -->
			<div class="gray pt-5 pb-5">
				<div class="container-fluid">

<!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									<div class="dashboard_wrap_batch d-flex align-items-center justify-content-between">
                                       
                                        <a  href="{{ url()->previous() }}" class="btn " >
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
								<form enctype="multipart/form-data" method="post" action="{{ route('admin_view.update',$profile[0]['id']) }}">
									@csrf
								
								<div class="row ">
									<div class="col-xl-6 col-lg-6 col-md-6 mt-5 ">
										<h2 class="m-0">Manage Profile</h2>
									</div>
									
									<div class="col-xl-5 col-lg-2">
										<div class="img-upload align-to-right">
											<input type="file" class="custom-file-input" name="image" id="customFile image">
											<img class="dashbimg image200" src="@if(isset($profile[0]['image'])){{asset('adminprofile/'.$profile[0]['image'])}}@else{{asset('assets/img/man.png')}}@endif">
										</div>
									</div>                                    
								</div>
                                
                                <br>
								
								<div class="row">
									<div class="col-xl-11 col-lg-11 col-md-12">
										

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
                                                    <input id="passwordInput" type="password" name="password"  value="{{$profile[0]['password']}}" class="form-control" placeholder="*******">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i id="togglePassword" class="fa fa-eye"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- test -->

											
											<input class="form-control" type="hidden" id="image_name" name="image_name" value="{{$profile[0]['image']}}" placeholder="" />
                                           
                                            <div class="d-flex btn-wrap align-to-right">
												<button type="submit" class="btn primary">Update</button>
											</div>
											
										
									</div>
								</div>
							</form>
                                
								
								<div class="clearfix"></div>	
								
							</div>

						</div>
					</div>
				</div>
			</div>


			
			
			<!-- ============================ Course Detail ================================== -->
						
@include('admin/footer')