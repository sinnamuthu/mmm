<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillUp - Online Learning Platform</title>		 
        <!-- Custom CSS -->
		<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/mmm-styles.css')}}" rel="stylesheet">
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
			<div class="gray pt-5">
				<div class="container-fluid">		
					<span class="sidebar-btn" onclick="openNav()"><img src="{{asset('assets/images/ic-open-arrow.png')}}"></span>
					<div class="player" id="video-sec">
						<video controls>
							<source src="https://crdsc.in/udemy/React%20Tutorial%20for%20Beginners.mp4" type="video/mp4" />
						</video>
						<div class="controls">
							<button class="play" data-icon="P" aria-label="play pause toggle"></button>
							<button class="stop" data-icon="S" aria-label="stop"></button>
							<div class="timer">
							
							  <div class="loader">
							  		<div class="bk" style="width: 255.03px;"></div>
								</div>
							  <span aria-label="timer">00:00</span>
							</div>
							<button class="rwd" data-icon="B" aria-label="rewind"></button>
							<button class="fwd" data-icon="F" aria-label="fast forward"></button>
						</div>
					</div>			
					<!--<div class="property_video radius lg mb-4" id="video-sec">
						<div class="thumb">
							<img class="pro_img img-fluid w100" src="https://via.placeholder.com/1200x800" alt="7.jpg">
							<div class="overlay_icon">
								<div class="bb-video-box">
									<div class="bb-video-box-inner">
										<div class="bb-video-box-innerup">
											<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	-->				
					<h2 class="ed_title">Helium 10 Magnet Keyword Research</h2>
				</div>
				<div class="container" id="fullcontainer">
					<div class="row">					
						<div class="order-lg-first" id="main">
							<!-- All Info Show in Tab -->
							<div class="tab_box_info mt-4">
								<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Course Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="question-tab" data-toggle="pill" href="#question" role="tab" aria-controls="question" aria-selected="false">Q&A</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="notes-tab" data-toggle="pill" href="#notes" role="tab" aria-controls="notes" aria-selected="false">Notes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="announcements-tab" data-toggle="pill" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">Announcements</a>
									</li>
								</ul>
							
								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">Cardiovascular disease</h4>
											<p>WHO cardiovascular diseases fact sheet providing key facts and information on risk factors, symptoms, rheumatic heart disease, treatment and ...</p>		
											<p>Heart conditions that include diseased vessels, structural problems and blood clots.</p>
											<p>Eating a healthier diet with less salt, exercising regularly and taking medication can help lower blood pressure.</p>
											<p>Usually hypertension is defined as blood pressure above 140/90, and is considered severe if the pressure is above 180/120.</p>
											<p>High blood pressure often has no symptoms. Over time, if untreated, it can cause health conditions, such as heart disease and stroke.</p>
										</div>
										
										<div class="edu_wraper">
											<h4 class="edu_title">Description</h4>
											<p>High blood pressure often has no symptoms. Over time, if untreated, it can cause health conditions, such as heart disease and stroke.</p>
											<p>WHO cardiovascular diseases fact sheet providing key facts and information on risk factors, symptoms, rheumatic heart disease, treatment and ...</p>
											<p>Heart conditions that include diseased vessels, structural problems and blood clots.</p>
											<p>Eating a healthier diet with less salt, exercising regularly and taking medication can help lower blood pressure.</p>
										</div>
										
										<!--<div class="edu_wraper">
											<h4 class="edu_title">Certificates</h4>
											<p>Get certificate by completing entire course</p>
											<button type="submit" class="btn primary-btn text-default">
												<img src="assets/img/fa-dw.svg" class="logo" alt="" /><span>Download Your certificate</span></button>
										</div>-->
										<div class="edu_wraper">
											<h4 class="edu_title">Instructors</h4>
										<div id="accordionExample" class="accordion shadow circullum">

											<!-- Part 1 -->
											<div class="card">
											  <div id="headingOne" class="card-header shadow-sm border-0">
												<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2"><div class="inst-hdg-blk"><img src="assets/img/dr.png"><div class="item-desc"> 1 Name<span>MBBS,PhD</span></div></div></a></h6>
											  </div>
											  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
												<div class="card-body pl-3 pr-3">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												</div>
											  </div>
											</div>

											<!-- Part 2 -->
											<div class="card">
											  <div id="headingTwo" class="card-header shadow-sm border-0">
												<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark collapsible-link py-2"><div class="inst-hdg-blk"><img src="assets/img/dr.png"><div class="item-desc"> 2 Name<span>MBBS,PhD</span></div></div></a></h6>
											  </div>
											  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
												<div class="card-body pl-3 pr-3">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												</div>
											  </div>
											</div>

											<!-- Part 3 -->
											<div class="card">
											  <div id="headingThree" class="card-header shadow-sm border-0">
												<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark collapsible-link py-2"><div class="inst-hdg-blk"><img src="assets/img/dr.png"><div class="item-desc"> 3 Name<span>MBBS,PhD</span></div></div></a></h6>
											  </div>
											  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
												<div class="card-body pl-3 pr-3">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												</div>
											  </div>
											</div>
											
											<!-- Part 04 -->
											<div class="card">
											  <div id="headingFour" class="card-header shadow-sm border-0">
												<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark collapsible-link py-2"><div class="inst-hdg-blk"><img src="assets/img/dr.png"><div class="item-desc"> 4 Name<span>MBBS,PhD</span></div></div></a></h6>
											  </div>
											  <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
												<div class="card-body pl-3 pr-3">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
												</div>
											  </div>
											</div>

										</div>
									</div>

									</div>
									
									<div class="tab-pane fade" id="question" role="tabpanel" aria-labelledby="question-tab"><!-- Q & A -->
										<div class="edu_wraper">
										
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Search Your Cources">
													<i class="ti-search"></i>
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="sort-by-blk">
												<h4>Sort by:</h4>
												<div class="row">
													<div class="col-lg-4">								
														<div class="form-group">
															<div class="simple-input">
																<select id="" class="form-control">
																	<option value="">Select</option>
																	<option value="1">Sort by most recent</option>
																	<option value="2">Sort by recommended</option>
																</select>
															</div>
														</div>														
													</div>
													<div class="col-lg-5">							
														<div class="form-group">
															<div class="simple-input">
																<select id="" class="form-control">
																	<option value="">Filter questions</option>
																	<option value="1">Questions I asked</option>
																	<option value="1">Questions without responses</option>
																	<option value="2">Questions with more responses</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="btn-ask-qst"><a href="javascript:;" data-toggle="modal" data-target="#askQst">Ask a new question</a></div>
													</div>
												</div>

											</div>
											<!-- Reviews -->
											<div class="list-single-main-item fl-wrap">
												<div class="list-single-main-item-title fl-wrap">
													<h3>All Questions In This Course <span> (74) </span></h3>
												</div>
												<div class="reviews-comments-wrap">
													<!-- reviews-comments-item -->  
													<div class="reviews-comments-item">
														<div class="review-comments-avatar">
															<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
														</div>
														<div class="reviews-comments-item-text">
															<h4><a href="#">Certificate</a><span class="reviews-comments-item-nos toggle-arrow"><img src="assets/img/ic-comment.png">Comments<code>4</code><abbr class="arrow">▼</abbr></span></h4>	
															<div class="clearfix"></div>
															<p>Im done with the course where to get the certificate</p>
															<ul class="pull-left qus-cmt-btm">
																<li><a href="#" class="">Yogesh</a></li>
																<li>1 week ago </li>
															</ul>
															<div class="comments-reply"><!-- comments replies -->  
																<div class="comments-reply-bx"><!--part1-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 week ago</li>
																		</ul>
																		<p>I am also not getting</p>
																	</div>
																</div><!--./part1--> 
																<div class="comments-reply-bx"><!--part2-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part2--> 
																<div class="comments-reply-bx"><!--part3-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Sabari</a></li>
																			<li>2 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part3--> 
																<div class="comments-reply-bx"><!--part4-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Muthu</a></li>
																			<li>3 months ago </li>
																		</ul>
																		<p>Hi, I built a plain html, css, js website that went live last May 28th and it is still not showing in google results when I search for terms included in my title tag, and heading tags, how do I make it appear ? I would like to do it manually and without any third party or paid SEO service. Any suggestions pointing out in the right direction would be greatly appreciated. Thanks a lot! Francisco.</p>
																	</div>
																</div><!--./part4-->
																<div class="comments-reply-bx"><!--reply-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="rly">Reply</a></li>
																		</ul>
																		<textarea class="summernote"></textarea>
																		<button class="btn theme-bg text-white" type="button">Save</button>
																	</div>
																</div><!--./reply-->
															</div>
														</div>
													</div>
													<!--reviews-comments-item end-->  
													<!-- reviews-comments-item -->  
													<div class="reviews-comments-item">
														<div class="review-comments-avatar">
															<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
														</div>
														<div class="reviews-comments-item-text">
															<h4><a href="#">Certificate</a><span class="reviews-comments-item-nos toggle-arrow"><img src="assets/img/ic-comment.png">Comments<code>4</code><abbr class="arrow">▼</abbr></span></h4>	
															<div class="clearfix"></div>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
															<ul class="pull-left qus-cmt-btm">
																<li><a href="#" class="">Yogesh</a></li>
																<li>3 months ago</li>
															</ul>
															<div class="comments-reply"><!-- comments replies -->  
																<div class="comments-reply-bx"><!--part1-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 week ago</li>
																		</ul>
																		<p>I am also not getting</p>
																	</div>
																</div><!--./part1--> 
																<div class="comments-reply-bx"><!--part2-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part2--> 
																<div class="comments-reply-bx"><!--part3-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Sabari</a></li>
																			<li>2 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part3--> 
																<div class="comments-reply-bx"><!--part4-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Muthu</a></li>
																			<li>3 months ago </li>
																		</ul>
																		<p>Hi, I built a plain html, css, js website that went live last May 28th and it is still not showing in google results when I search for terms included in my title tag, and heading tags, how do I make it appear ? I would like to do it manually and without any third party or paid SEO service. Any suggestions pointing out in the right direction would be greatly appreciated. Thanks a lot! Francisco.</p>
																	</div>
																</div><!--./part4-->
																<div class="comments-reply-bx"><!--reply-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="rly">Reply</a></li>
																		</ul>
																		<textarea class="summernote"></textarea>
																	</div>
																</div><!--./reply-->
															</div>
														</div>
													</div>
													<!--reviews-comments-item end-->  
													<!-- reviews-comments-item -->  
													<div class="reviews-comments-item">
														<div class="review-comments-avatar">
															<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
														</div>
														<div class="reviews-comments-item-text">
															<h4><a href="#">Certificate</a><span class="reviews-comments-item-nos toggle-arrow"><img src="assets/img/ic-comment.png">Comments<code>4</code><abbr class="arrow">▼</abbr></span></h4>	
															<div class="clearfix"></div>
															<p>Im done with the course where to get the certificate</p>
															<ul class="pull-left qus-cmt-btm">
																<li><a href="#" class="">Yogesh</a></li>
																<li>10 months ago</li>
															</ul>
															<div class="comments-reply"><!-- comments replies -->  
																<div class="comments-reply-bx"><!--part1-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 week ago</li>
																		</ul>
																		<p>I am also not getting</p>
																	</div>
																</div><!--./part1--> 
																<div class="comments-reply-bx"><!--part2-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Deepak</a></li>
																			<li>1 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part2--> 
																<div class="comments-reply-bx"><!--part3-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Sabari</a></li>
																			<li>2 months ago </li>
																		</ul>
																		<p>at course N19 . where do i create the table on sublimetext ? i didn't understand that part</p>
																	</div>
																</div><!--./part3--> 
																<div class="comments-reply-bx"><!--part4-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-dh.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="">Muthu</a></li>
																			<li>3 months ago </li>
																		</ul>
																		<p>Hi, I built a plain html, css, js website that went live last May 28th and it is still not showing in google results when I search for terms included in my title tag, and heading tags, how do I make it appear ? I would like to do it manually and without any third party or paid SEO service. Any suggestions pointing out in the right direction would be greatly appreciated. Thanks a lot! Francisco.</p>
																	</div>
																</div><!--./part4-->
																<div class="comments-reply-bx"><!--reply-->
																	<div class="review-comments-avatar">
																		<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
																	</div>
																	<div class="item-desc">
																		<ul class="pull-left qus-cmt-btm">
																			<li><a href="#" class="rly">Reply</a></li>
																		</ul>
																		<textarea class="summernote"></textarea>
																	</div>
																</div><!--./reply-->
															</div>
														</div>
													</div>
													<!--reviews-comments-item end-->  
													
												</div>
											</div>
											<div class="btn-ask-qst lg mb25"><a href="javascript:;">See more</a></div>
											<div class="btn-ask-qst"><a href="javascript:;" data-toggle="modal" data-target="#askQst">Ask a new question</a></div>
										</div>
									</div><!-- ./Q & A -->
									
									<!-- Notes Detail -->
									<div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">
										<div class="edu_wraper">
											<div id="accordionExample" class="accordion shadow circullum">
												<div class="notes-bx">
													<div class="notes-msg-rly">
														<div class="hdg-blk"><aside class="time">4:20</aside></div>	
														<textarea class="form-control summernote"></textarea>	
													</div>
													<div class="btn-wrap">
														<div class="btn-ask-qst"><a href="javascript:;">Clear</a></div>
														<div class="btn primary"><a href="javascript:;">Save a note</a></div>
													</div>
												</div>
												
												<div class="simple-input">
													<select id="" class="form-control">
														<option value="">Sort by</option>
														<option value="1">Recent</option>
														<option value="2">Oldest</option>
													</select>
												</div>
												<div class="notes-bx">
													<div class="hdg-blk"><aside class="time">4:20</aside><h3>Week 5: Cardiology Dermatology</h3><aside class="dust"><a href="javascript:;"><img src="assets/img/ic-dustbin.png"></a></aside><aside class="edit"><a href="javascript:;"><img src="assets/img/ic-edit.png"></a></aside></div>	
													<div class="item-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>	
												</div>
												<div class="notes-bx">
													<div class="hdg-blk"><aside class="time">4:20</aside><h3>Week 5: Cardiology Dermatology</h3><aside class="dust"><a href="javascript:;"><img src="assets/img/ic-dustbin.png"></a></aside><aside class="edit"><a href="javascript:;"><img src="assets/img/ic-edit.png"></a></aside></div>	
													<div class="item-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>	
												</div>
												<div class="notes-bx">
													<div class="hdg-blk"><aside class="time">4:20</aside><h3>Week 5: Cardiology Dermatology</h3><aside class="dust"><a href="javascript:;"><img src="assets/img/ic-dustbin.png"></a></aside><aside class="edit"><a href="javascript:;"><img src="assets/img/ic-edit.png"></a></aside></div>	
													<div class="item-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div>	
												</div>
											</div>
										</div>
									</div>
									
									<!-- Instructor Detail -->
									<div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
										<div class="clearfix"></div>
										<div class="edu_wraper">
											<div class="announcements-cmt-blk">
												<div class="announcements-cmt-tp">
													<div class="announcements-cmt-avatar">
														<img src="assets/img/ic-y.png" class="img-fluid" alt=""> 
													</div>
													<div class="clearfix"></div>
													<h4><a href="#">Instructor 1 Name</a><span>Posted an announcement · 14 days ago</span></h4>	
												</div>	
												<div class="announcements-cmt-btm">
													<h5>Earn $600 in 3 hours on Google Maps?</h5>
													<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
												</div>
											</div>
											<div class="announcements-reply-cmt">
												<div class="item-desc">
													<figure><img src="assets/img/ic-y.png" class="img-fluid" alt=""></figure> <textarea></textarea>
												</div>
												<div class="btn-wrap">
													<div class="btn-ask-qst"><a href="javascript:;">Clear</a></div>
													<div class="btn primary"><a href="javascript:;">Save</a></div>
												</div>
											</div>

											<h3>Comments</h3>
											<div class="announcements-cmt-blk">
												<div class="announcements-cmt-tp">
													<div class="announcements-cmt-avatar">
														<img src="assets/img/ic-in.png" class="img-fluid" alt=""> 
													</div>
													<div class="clearfix"></div>
													<h4><a href="#">Student -1</a><span>Posted an announcement · 1 day ago</span></h4>	
												</div>	
												<div class="announcements-cmt-btm">
													<p>Hey Amber! I think for free courses MMM does not give a certification. I hope the course was helpful anyhow :)</p>
												</div>
											</div>
											<div class="announcements-cmt-blk">
												<div class="announcements-cmt-tp">
													<div class="announcements-cmt-avatar">
														<img src="assets/img/ic-in.png" class="img-fluid" alt=""> 
													</div>
													<div class="clearfix"></div>
													<h4><a href="#">Student -2</a><span>Posted an announcement · 2 day ago</span></h4>	
												</div>	
												<div class="announcements-cmt-btm">
													<p>Hey Deepak! I think for free courses MMM does not give a certification. I hope the course was helpful anyhow :)</p>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>							
						</div>
						
						<!-- Sidebar -->
						<div class="order-lg-last sidebar" id="mySideBar">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Course Content <span>&times;</span></a>
							<div id="courseContent" class="accordion">
								<!-- Part 1 -->
								<div class="card">
								  <div id="course-headingOne" class="card-header shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative collapsible-link py-2">Week 1: Module 1 Video</a></h6>
								  </div>
								  <div id="course-collapseOne" aria-labelledby="headingOne" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 2 -->
								<div class="card">
								  <div id="course-headingTwo" class="card-header shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsible-link py-2">Week 3: Module 1 Assessment</a></h6>
								  </div>
								  <div id="course-collapseTwo" aria-labelledby="headingTwo" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 3 -->
								<div class="card">
								  <div id="course-headingThree" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsible-link py-2">Week 5: Module 2 Video</a></h6>
								  </div>
								  <div id="course-collapseThree" aria-labelledby="headingThree" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 4 -->
								<div class="card">
								  <div id="course-headingFour" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsible-link py-2">Week 7: Module 2 Assessment</a></h6>
								  </div>
								  <div id="course-collapseFour" aria-labelledby="headingFour" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 5 -->
								<div class="card">
								  <div id="course-headingFive" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseFive" aria-expanded="false" aria-controls="collapseFive" class="d-block position-relative collapsible-link py-2">Week 9: Module 3 Video</a></h6>
								  </div>
								  <div id="course-collapseFive" aria-labelledby="headingFive" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
												<li class="resource"><a href="#resource" data-toggle="collapse"><img src="assets/img/ic-note.png"> Resource <i class="fas fa-chevron-down"></i></a>
													<div id="resource" class="collapse">
														<a href="javascript">1. Resource File 1</a>
														<a href="javascript"></a>2. Resource File 2</a>
													</div></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 6 -->
								<div class="card">
								  <div id="course-headingSix" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseSix" aria-expanded="false" aria-controls="collapseSix" class="d-block position-relative collapsible-link py-2">Week 11: Module 3 Assessment</a></h6>
								  </div>
								  <div id="course-collapseSix" aria-labelledby="headingSix" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 7 -->
								<div class="card">
								  <div id="course-headingSeven" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="d-block position-relative collapsible-link py-2">Week 13: Module 4 Video</a></h6>
								  </div>
								  <div id="course-collapseSeven" aria-labelledby="headingSeven" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 8 -->
								<div class="card">
								  <div id="course-headingEight" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseEight" aria-expanded="false" aria-controls="collapseEight" class="d-block position-relative collapsible-link py-2">Week 15: Module 4 Assessment</a></h6>
								  </div>
								  <div id="course-collapseEight" aria-labelledby="headingEight" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 9 -->
								<div class="card">
								  <div id="course-headingNine" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseNine" aria-expanded="false" aria-controls="collapseNine" class="d-block position-relative collapsible-link py-2">Week 17: Module 5 Video</a></h6>
								  </div>
								  <div id="course-collapseNine" aria-labelledby="headingNine" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 10 -->
								<div class="card">
								  <div id="course-headingTen" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseTen" aria-expanded="false" aria-controls="collapseTen" class="d-block position-relative collapsible-link py-2">Week 17: Module 5 Assessment</a></h6>
								  </div>
								  <div id="course-collapseTen" aria-labelledby="headingTen" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 11 -->
								<div class="card">
								  <div id="course-headingEleven" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="d-block position-relative collapsible-link py-2">Week 19: Module 6 Video</a></h6>
								  </div>
								  <div id="course-collapseEleven" aria-labelledby="headingEleven" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 12 -->
								<div class="card">
								  <div id="course-headingTwelve" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" class="d-block position-relative collapsible-link py-2">Week 19: Module 6 Assessment</a></h6>
								  </div>
								  <div id="course-collapseTwelve" aria-labelledby="headingTwelve" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 13 -->
								<div class="card">
								  <div id="course-headingThirteen" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen" class="d-block position-relative collapsible-link py-2">Week 21: Module 7 Video</a></h6>
								  </div>
								  <div id="course-collapseThirteen" aria-labelledby="headingThirteen" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li>Course - 80 Min</li>
											</ul>
										</div>
									</div>
								  </div>
								</div>

								<!-- Part 14 -->
								<div class="card">
								  <div id="course-headingFourteen" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#course-collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen" class="d-block position-relative collapsible-link py-2">Week 21: Module 7 Assessment</a></h6>
								  </div>
								  <div id="course-collapseFourteen" aria-labelledby="headingFourteen" data-parent="#courseContent" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<div class="cc_info-detail">
											<ul>
												<li><button type="submit" class="btn primary">Start Assessment</button></li>
											</ul>
										</div>
									</div>
								  </div>
								</div>




							</div>
							
						</div>
					</div>
					
				</div>

				<div class="">				
				<!-- ============================ Footer Start ================================== -->
				<footer id="footer">
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
				</div>
			</div>
			
			<!-- ============================ Course Detail ================================== -->
			
						
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content overli" id="loginmodal">
						<div class="modal-header">
							<h5 class="modal-title">Login Your Account</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="User or email">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group row">
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="admin" class="checkbox-custom" name="admin" type="checkbox">
											<label for="admin" class="checkbox-custom-label">Admin</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="student" class="checkbox-custom" name="student" type="checkbox" checked>
											<label for="student" class="checkbox-custom-label">Student</label>
										</div>
										<div class="col-xl-4 col-lg-4 col-4">
											<input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">
											<label for="instructor" class="checkbox-custom-label">Tutors</label>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg text-white">Login</button>
									</div>
									
									<div class="rcs_log_125 pt-2 pb-3">
										<span>Or Login with Social Info</span>
									</div>
									<div class="rcs_log_126 full">
										<ul class="social_log_45 row">
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
											<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
										</ul>
									</div>
								
								</form>
							</div>
						</div>
						<div class="crs_log__footer d-flex justify-content-between mt-0">
							<div class="fhg_45"><p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a></p></div>
							<div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<!-- Ask a question In Modal -->
			<div class="modal fade" id="askQst" tabindex="-1" role="dialog" aria-labelledby="askQst" aria-hidden="true">
				<div class="modal-dialog modal-lg askQstform" role="document">
					<div class="modal-content overli" id="askQst">
						<div class="modal-header">
							<h5 class="modal-title">Ask a new Question</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
							</button>
						  </div>
						<div class="modal-body">
							<div class="">
								<form>
								
									<div class="form-group">
										<div class="input-with-icon">
											<label>Title or summary</label>
											<input type="text" class="form-control" placeholder="e.g. Why do we use fit traning set ?">
										</div>
									</div>
									<div class="form-group">
										<label>Details (optional)</label>
										<textarea class="form-control summernote"></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width theme-bg2 text-white">Publish</button>
									</div>
								
								</form>
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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/slick.js')}}"></script>
		<script src="{{asset('assets/js/moment.min.js')}}"></script>
		<script src="{{asset('assets/js/daterangepicker.js')}}"></script> 
		<script src="{{asset('assets/js/summernote.min.js')}}"></script>
		<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>	
		<script src="{{asset('assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		
		<script>
			$("a[href$='#resource']").click(function() {

let attr = $("#resource").attr("class");
 if (attr=="collapse show") {
  $("i").removeClass("fas fa-chevron-up");
  $("i").addClass("fas fa-chevron-down");
} else {
 $("i").removeClass("fas fa-chevron-down");
  $("i").addClass("fas fa-chevron-up");
}


})

  $(document).ready(function() {
  $('.reviews-comments-item-nos').click(function() {
    $('.comments-reply').slideToggle();
    $('.arrow').text(function(_, text) {
      return text === '▼' ? '▲' : '▼';
    });

});
});
</script>

<script>
	function openNav() {
	  document.getElementById("mySideBar").style.width = "400px";
	  document.getElementById("main").style.marginRight = "400px";
	  document.getElementById("video-sec").style.marginRight = "400px";
	  document.getElementById("footer").style.marginRight = "400px";
	  $("#fullcontainer").addClass("container-fluid");
	  $("#fullcontainer").removeClass("container");
	}			
	function closeNav() {
	  document.getElementById("mySideBar").style.width = "0";
	  document.getElementById("main").style.marginRight= "0";			  
	  document.getElementById("video-sec").style.marginRight = "0";
	  document.getElementById("footer").style.marginRight = "0";
	  $("#fullcontainer").removeClass("container-fluid");
	  $("#fullcontainer").addClass("container");
	}			
</script>
<script>
	$(document).ready(function() {
	$(".card").click(function() {
	  $(".card").removeClass('active');
      $(this).addClass('active');
    });
    });

</script>


<script>


	const media = document.querySelector("video");
	const controls = document.querySelector(".controls");
	
	const play = document.querySelector(".play");
	const stop = document.querySelector(".stop");
	const rwd = document.querySelector(".rwd");
	const fwd = document.querySelector(".fwd");
	
	const timerWrapper = document.querySelector(".timer");
	const timer = document.querySelector(".timer span");
	const timerBar = document.querySelector(".timer div");

	timerWrapper.addEventListener("click", handleTimerBarClick);

    function handleTimerBarClick(event) {
		//console.log(event.clientX);
		// console.log(timerBar.getBoundingClientRect().left);

		var clickX = event.clientX - timerWrapper.getBoundingClientRect().left;
        var barWidth = timerWrapper.offsetWidth;
        var percentageClicked = clickX / barWidth;
        var newTime = percentageClicked * media.duration;
		console.log('new');
		console.log(clickX);
		console.log(barWidth);
		console.log(percentageClicked);
		console.log(newTime);

       updateTimerDisplay(newTime);
    }

	function updateTimerDisplay(newTime) {
		media.currentTime = newTime;
	}

	
	media.removeAttribute("controls");
	controls.style.visibility = "visible";
	
	play.addEventListener("click", playPauseMedia);
	
	
	function playPauseMedia() {
	  if (media.paused) {
		play.setAttribute("data-icon", "u");
		media.play();
	  } else {
		play.setAttribute("data-icon", "P");
		media.pause();
	  }
	}
	
	stop.addEventListener("click", stopMedia);
	media.addEventListener("ended", stopMedia);
	
	function stopMedia() {
	  media.pause();
	  media.currentTime = 0;
	  play.setAttribute("data-icon", "P");
	}
	
	rwd.addEventListener("click", mediaBackward);
	fwd.addEventListener("click", mediaForward);
	
	let intervalFwd;
	let intervalRwd;
	
	function mediaBackward() {
	  clearInterval(intervalFwd);
	  fwd.classList.remove("active");
	
	  if (rwd.classList.contains("active")) {
		rwd.classList.remove("active");
		clearInterval(intervalRwd);
		media.play();
	  } else {
		rwd.classList.add("active");
		media.pause();
		intervalRwd = setInterval(windBackward, 200);
	  }
	}
	
	function mediaForward() {
	  clearInterval(intervalRwd);
	  rwd.classList.remove("active");
	
	  if (fwd.classList.contains("active")) {
		fwd.classList.remove("active");
		clearInterval(intervalFwd);
		media.play();
	  } else {
		fwd.classList.add("active");
		media.pause();
		intervalFwd = setInterval(windForward, 200);
	  }
	}
	
	
	function windBackward() {
	  if (media.currentTime <= 3) {
		rwd.classList.remove("active");
		clearInterval(intervalRwd);
		stopMedia();
	  } else {
		media.currentTime -= 3;
	  }
	}
	
	function windForward() {
	  if (media.currentTime >= media.duration - 3) {
		fwd.classList.remove("active");
		clearInterval(intervalFwd);
		stopMedia();
	  } else {
		media.currentTime += 3;
	  }
	}
	
	media.addEventListener("timeupdate", setTime);
	
	
	function setTime() {
	  const minutes = Math.floor(media.currentTime / 60);
	  const seconds = Math.floor(media.currentTime - minutes * 60);
	
	  const minuteValue = minutes.toString().padStart(2, "0");
	  const secondValue = seconds.toString().padStart(2, "0");
	
	  const mediaTime = `${minuteValue}:${secondValue}`;
	  timer.textContent = mediaTime;
	
	  const barLength =
		timerWrapper.clientWidth * (media.currentTime / media.duration);
	  timerBar.style.width = `${barLength}px`;
	}
	
	rwd.classList.remove("active");
	fwd.classList.remove("active");
	clearInterval(intervalRwd);
	clearInterval(intervalFwd);
	
	document.onclick = function (e) {
		timeget = timerWrapper.clientWidth * (media.currentTime / media.duration);
	  console.log('e',e.x, e.y);
	  console.log('currenttime',media.currentTime);
	  console.log('timewrapper',timeget);
	};
	
	setInterval(function(){
		$.ajax({
		url: '/coursewatch?sender_id=1&time='+media.currentTime,
		  type: 'GET',
		  dataType: 'json',
		  success: function (data) {
			console.log(data);
		  },
		  error: function (error) {
			  console.error('Error loading data:', error);
		  }
	  });
	   console.log('sinnamuthu',media.currentTime);
	}, 10 * 1000);
	

	$.ajax({
		url: '/coursedata?sender_id=1',
		  type: 'GET',
		  dataType: 'json',
		  success: function (data) {
			// console.log(data.coursedata[0].course_time);
	
			media.currentTime = data.coursedata[0].course_time;
			
		  },
		  error: function (error) {
			  console.error('Error loading data:', error);
		  }
	  });
	
	
	
	</script>
	
	</body>
</html>