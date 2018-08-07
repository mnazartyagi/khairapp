<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>NatuKair | Medical Treatment In India</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
  
    <!-- Favicons -->
    <link href="{{asset('storage/logo/icon.ico')}}" rel="icon">
    <link href="{{asset('natukair_assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="{{asset('natukair_assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="{{asset('natukair_assets/lib/intel/build/css/intlTelInput.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/webfont-medical-icons/css/wfmi-style.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/pace/pace.min.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/alter/alter.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/floating-labels/floating-labels.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/user_dashboard/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('natukair_assets/lib/lightbox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   
  
    <!-- Main Stylesheet File -->
    <link href="{{asset('natukair_assets/css/style.css')}}" rel="stylesheet">
</head>
<body id="body">
    @yield('content')
    <a href="#" class="back-to-top  d-lg-none d-md-none"><i class="fa fa-chevron-up"></i></a>
    <a href="https://api.whatsapp.com/send?phone=919526344786&text=Hello%20Natukair%2C%20I%27m%20looking%20for%20alternative%20medical%20treatment%20option.%20Here%20is%20my%20name%2C%20age%20and%20problem%20details." class="whatsappbutton"><i class="fa fa-whatsapp d-lg-none d-md-none"></i></a>
    <script src="{{asset('natukair_assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('natukair_assets/js/jquery.jscroll.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/pace/pace.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/lightbox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/owlcarousel/owl.carousel.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/sticky/sticky.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGF_yiMl2p56tBVOtqgf8BF2tq_WP70n4"></script>
  <script src="{{asset('natukair_assets/lib/intel/build/js/intlTelInput.min.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/disease/diseas.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/intel/build/js/intl2.js')}}"></script>
  <script src="{{asset('natukair_assets/lib/elimore/jquery.elimore.min.js')}}"></script>
  

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('natukair_assets/contactform/contactform.js')}}"></script>
  <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5b5062e8e21878736ba2212c/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->
  <script>
  $(document).on('click', '.dropdown-menu.dropdown-menu-right', function (e) {
  e.stopPropagation();
});
  </script>
  @yield('extra-js')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b3df88624e24b32"></script>
<script src="{{asset('natukair_assets/js/sweetalert.js')}}"></script>
  <!-- Template Main Javascript File -->
  <script src="{{asset('natukair_assets/js/main.js')}}"></script>
  @include('vendor.sweetalert.view')
  @yield('scripts')
</body>
</html>