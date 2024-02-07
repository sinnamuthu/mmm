@include('admin/header')
			<div class="clearfix"></div>			
			<!-- ============================ Course Detail ================================== -->
			<div class="gray pt-5 pb-5">
				<div class="container-fluid">
					<div class="row student-profile-blk">
						<div class="col-md-3">
							<div class="left-panel"><!--Left Panel-->								
								
                                <div class="d-navigation">
									<ul id="side-menu">
										<li class="active"><a href="javascript:;"><i class="fa fa-tachometer-alt"></i>Dashboard</a></li>
                                        <li ><a href=""><i class="fas fa-shopping-basket"></i>Courses</a></li>
                                        <li ><a href="{{route('batch')}}"><i class="fa-solid fa-user"></i>Batch</a></li>
                                        <li ><a href="{{route('instructor')}}"><i class="fas fa-user"></i>Instructor</a></li>
                                        <li ><a href="javascript:;"><i class="fas fa-user"></i>Student</a></li>

									</ul>
								</div>

							</div><!--./Left Panel-->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">

                            <!-- test -->
                             <!-- test -->
							
							<!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 ">
									<div class="dashboard_wrap_top d-flex align-items-center justify-content-between">
                                        <!-- <div class="col boxtab"> -->
											<div class="boxtab-link courseclick">
 
                                             <div class="col boxtab">
                                             <div class="row top_box">
                                                <div class="col-6 top_inner_box">
                                                    <h3> Courses </h3>
                                                <br>
                                                <p class="number_stlnum">52</p>
                                                </div>
                                                <div class="col-6 top_inner_box align-items-center">
                                                    <img src="{{ asset('assets/images/ic1.png') }}" alt="">
                                                </div>
                                            </div>

                                            </div> 

</div>

										<div class="boxtab-link batchclick">
											<div class="col boxtab">
												<div class="row top_box">
													<div class="col-6 top_inner_box">
														<h3> Batch  </h3>
													<br>
													<p class="number_stlnum">52</p>
													</div>
													<div class="col-6 top_inner_box align-items-center">
														<img src="{{ asset('assets/images/ic2.png') }}" alt="">
													</div>
												</div>
							 
											</div>
</div>	
                                        <!--  -->
              
                                        <div class="boxtab-link instructorclick">
											<div class="col boxtab">
											   <div class="row top_box">
												   <div class="col-6 top_inner_box">
													   <h3> Instructor  </h3>
												   <br>
												   <p class="number_stlnum">52</p>
												   </div>
												   <div class="col-6 top_inner_box align-items-center">
													   <img src="{{ asset('assets/images/ic3.png') }}" alt="">
												   </div>
											   </div>
											   
											</div>
</div>

                                        <!--  -->

										<div class="boxtab-link studentclick">
											<div class="col boxtab">
												<div class="row top_box">
													<div class="col-6 top_inner_box">
														<h3> Student </h3>
													<br>
													<p class="number_stlnum">22</p>
													</div>
													<div class="col-6 top_inner_box align-items-center">
														<img src="{{ asset('assets/images/ic4.png') }}" alt="">
													</div>
												</div>
												
											</div>
</div>
							
									</div>
								</div>
							</div>

							<!-- /Row -->

                       
                            <!-- section -->


                            <div class="row batchview">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info_batch">
								     	<div class="dashboard_wrap ">
															
											<div class="row align-items-end p-3">
												<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                                    <h4 class=""> Batch </h4>

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

                                            <!-- batch -->

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="instructor_info">
                                                         <div class="dfvD ">
                
                                                            <!-- row -->
                                                            
                                                               
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
                                                                            @foreach($batches as $batch)
                                                    <tr>
                                                        <th scope="row">{{ $batch->batch_id }}</th>
                                                        <td><h6>{{ $batch->bt_innertitle }}</h6></td>
                                                        <td><span class="trip theme-cl theme-bg-light">{{ $batch->status }}</span></td>
                                                        <td>
                                                            @if($batch->start_date)
                                                                <span class="smalls">{{ \Carbon\Carbon::parse($batch->start_date)->format('d/m/Y') }}</span>
                                                            @else
                                                                <span class="smalls">N/A</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($batch->end_date)
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
                                                             
                                                       
                    
                                                            <!-- table -->
                
                          
                
                                                                      <!-- ============================ Page Title End ================================== -->
                                          
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                


			                                              <!-- ============================ Page Title End ================================== -->
						  
								     	</div>
                                    </div>
								</div>
					        </div>

                                                                 <!-- section -->

																 <!--coursetable-->

																 
																 <div class="row courseview">
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

							<!--instructor-->

							
                            <div class="row instructorview">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info_batch">
								     	<div class="dashboard_wrap ">
															
											<div class="row align-items-end p-3">
												<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                                    <h4 class=""> Instructor </h4>

												</div>
																
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="input-with-icon">
                                                <input type="text" class="form-control" placeholder="Search Your Cources">
                                                <i class="ti-search"></i>
                                            </div>
												</div>
												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
													
												</div>
												
                                                <div class="col-xl-2 col-lg-4 col-md-6 justify-content-end">
                                                    <p > <a href="google.com" class="view_all">View all</a> </p>
													
												</div>
											</div>

                                            <!-- batch -->

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                     <div class="instructor_info">
                                            <div class="dash_over ">
                
                                                            
                                
                                           
                                                                    <!-- ============================ Page Title Start================================== -->
                                                                    @foreach ($instructors as $instructor)    
                                            <div class="ed_detail_dash">
                                                <div class="container-fluid">
                                                    <div class="row align-items-center mb-5">
                                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                                       
                                                <div class="authi_125">
                                                                <div class="authi_125_thumb">
                                                                    <img src="https://via.placeholder.com/700x550" name="in_propic" class="img-fluid rounded" alt="" />
                                                                </div>
                                                                <a href="#" class="klio_45"><div class="lklo_45"><i class="fas fa-play"></i></div><h6>Preview</h6></a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-9 col-md-12 col-sm-12">
                                                            <div class="dlkio_452">
                                                                <div class="ed_detail_wrap">
                                                                    <div class="ed_header_caption">
                                                                        <h2 class="ed_title" name="inst_name">{{ $instructor->ins_fname }} </h2>
                                                                        <h3 class="inst_subhed" name="inst_disg">{{$instructor->ins_imstqua}}</h3>
                                                                        
                                                                    </div>
                                                                    <div class="ed_header_short">
                                                                        <p name="in_para"> {{$instructor->ins_bdescription}}<a href="#" class="theme-cl">Read More..</a>.</p>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                                <div class="dlkio_last">
                                                                    <div class="ed_view_link">
                                                                        <a href="{{route ('editinstructor' ,$instructor->instructor_id)}}" class="btn instruct_edit " name="inst_edit">Edit</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- ============================ Page Title End ================================== -->
                                        
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                     









                                                                                                       
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
    
			<!-- ============================ Page Title End ================================== -->
						  
								     	</div>
                                    </div>
								</div>
							</div>

                            <!-- section -->

							<!--studenttable-->

							<div class="row studentview">
								<div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="instructor_info_batch">
								     	<div class="dashboard_wrap ">
															
											<div class="row align-items-end p-3">
												<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                                    <h4 class=""> Student </h4>

												</div>
																
										<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="input-with-icon">
                                                <input type="text" class="form-control" placeholder="Search Your Cources">
                                                <i class="ti-search"></i>
                                            </div>
		
												</div>
												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
													
												</div>
												
                                                <div class="col-xl-2 	 col-lg-5 col-md-6 justify-content-end">
                                                    <p > <a href="google.com" class="view_all">View all</a> </p>
													
												</div>
											</div>

                                            <!-- batch -->

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="instructor_info">
                                                         <div class="dfvD ">
                
                                                            <!-- row -->
                                                            
                                                               
                                                                    <div class="table-responsive ">
                                                                        <table class="table dash_list">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col"> ID </th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col"> Email</th>
                                                                                    <th scope="col">Mobile</th>
                                                                                    <th scope="col"> Amount </th>
                                                                                    <th scope="col"> Payment Type</th>
                                                                                    <th scope="col"> Promo Discount </th>

                
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">1</th>
                                                                                    <td name="dsh_tab"><h6> Deepak</h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                                                                                    <td name="dsh_tab"><span class="small"></span></td>

                
                                                                                </tr>
                                                                                <!-- 2 -->
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">2</th>
                                                                                    <td name="dsh_tab"><h6> yogesh</h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                                                                                    <td name="dsh_tab"><span class="small"></span></td>

                
                                                                                </tr>
                                                                                <!-- 3 -->
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">3</th>
                                                                                    <td name="dsh_tab"><h6> ram</h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                                                                                    <td name="dsh_tab"><span class="small"></span></td>

                
                                                                                </tr>
                                                                                <!-- 4 -->
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">4</th>
                                                                                    <td name="dsh_tab"><h6>Guna</h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                                                                                    <td name="dsh_tab"><span class="small"></span></td>

                
                                                                                </tr>
                                                                                <!-- 5 -->
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">5</th>
                                                                                    <td name="dsh_tab"><h6> Sam </h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                                                                                    <td name="dsh_tab"><span class="small"></span></td>

                
                                                                                </tr>
                                                                                <!-- 6 -->
                                                                                <tr>
                                                                                    <th scope="row" name="Bat_yr">6</th>
                                                                                    <td name="dsh_tab"><h6> siva</h6></td>
                                                                                    <td name="dsh_tab" ><div class="small">deepal@bleap.in</div></td>
                                                                                    <td name="dsh_tab" ><div class="small">9360744915</div></td>
                                                                                    <td name="dsh_tab"><span class="small">₹ 1000</span></td>
                                                                                    <td name="dsh_tab"><span class="small">Gpay</span></td>
                
                                                                                </tr>
                                                                                
                                                                                
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                             
                                                       
                    
                                                            <!-- table -->
                
                          
                
                            <!-- ============================ Page Title End ================================== -->
                                          
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                


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
			@include('admin/footer')