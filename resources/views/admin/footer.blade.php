	<!-- ============================ Footer Start ================================== -->
    <footer id="footer" class="default">
        <div class="footer-middle">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-5">
                        <div class="footer_widget">
                            <img src="{{asset('assets/img/logo-mmm-ftr.png')}}" class="mb-2" alt="" />
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-7 ml-auto">
                        <div class="footer_widget">
                            <img src="{{asset('assets/img/logo-crds-ftr.png')}}" class="mb-2" alt="" />
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
                        <p class="mb-0"><a href="https://themezhub.com"><img src="{{asset('assets/img/power-bleap.png')}}"></a>.</p>
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
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
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

$(document).ready(function(){
				$('.courseclick').click(function(){
					$('.batchview').css("display","none");
                    $('.instructorview').css("display","none");
                    $('.studentview').css("display","none");
					$('.courseview').css("display","block");
                    //color
                    $('.batchback').css("background-color","white");
                    $('.instructorback').css("background-color","white");
                    $('.studentback').css("background-color","white");
					$('.courseback').css("background-color","rgb(191 230 247)");
				});

                $('.batchclick').click(function(){
					$('.batchview').css("display","block");
                    $('.instructorview').css("display","none");
                    $('.studentview').css("display","none");
					$('.courseview').css("display","none");
                                        //color
                     $('.batchback').css("background-color","rgb(191 230 247)");
                    $('.instructorback').css("background-color","white");
                    $('.studentback').css("background-color","white");
					$('.courseback').css("background-color","white");
				});

                $('.instructorclick').click(function(){
					$('.batchview').css("display","none");
                    $('.instructorview').css("display","block");
                    $('.studentview').css("display","none");
					$('.courseview').css("display","none");
                                        //color
                    $('.batchback').css("background-color","white");
                    $('.instructorback').css("background-color","rgb(191 230 247)");
                    $('.studentback').css("background-color","white");
					$('.courseback').css("background-color","white");
				});

                $('.studentclick').click(function(){
					$('.batchview').css("display","none");
                    $('.instructorview').css("display","none");
                    $('.studentview').css("display","block");
					$('.courseview').css("display","none");
                                                            //color
                     $('.batchback').css("background-color","white");
                    $('.instructorback').css("background-color","white");
                    $('.studentback').css("background-color","rgb(191 230 247)");
					$('.courseback').css("background-color","white");
				});

			});

/*File selection*/
jQuery('input[name=file]').change(function() {
    alert(jQuery(this).val()); 
    });
    jQuery('figure.filename').click(function() {
    jQuery('input[name=file]').click();
});
</script>
<script>
$('input[name="dates"]').daterangepicker();
</script>

<script>
        document.getElementById('togglePassword').addEventListener('click', function() {
var passwordInput = document.getElementById('passwordInput');
if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
} else {
    passwordInput.type = 'password';
}
  });

</script>




</body>
</html>