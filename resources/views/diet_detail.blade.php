<!DOCTYPE HTML>
<html>
<head>
<title>BodyBuildingAcademy | المكملات الغذائية </title>
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/js/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />

<!-- grid-slider -->
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
</head>
<body>
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>				  	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="{{url('/')}}">الرئيسية</a></li>
			   <li><a href="{{url('/workout')}}">التمارين</a></li>
			   <li><a href="{{url('/supplements')}}">المكملات الغذائية</a></li>
			   <li class="active"><a href="{{url('/diet')}}">التغذية السليمة</a></li>
			   <li><a href="{{url('/contact_us')}}">تواصل معنا</a></li>
				<li><a href="{{url('/logout')}}">تسجيل خروج</a></li>
			 </ul>
			  <script type="text/javascript" src="/js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
    <div class="main">
      
        <div class="about_banner_wrap">
      	   <h1 class="m_11">التغذية السليمة</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="rwo contact">
      	  
      			
         <!-- Posts -->
		 

<div class="container-fluid" align="center">
	<div class="caption">
		<h3>{{$diet->title}}</h3>
	</div>
	<br>
	<div>
		<img src="/{{$diet->thumb}}">
	</div>
	<br>
	<div class="caption">
		<p>{{$diet->content}}</p>
	</div>
</div>

		 <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">الاشتراك في الرسائل الإخبارية</h4>
				   <p class="m_8">لتلقي كل أخبارنا ومعلومات جديدة فقط أدخل البريد الإلكتروني الخاص بك وانتظر للجميع</p>
				      <form class="subscribe">
			             <input type="text" value="إدراج البريد الإلكتروني
                       " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">إرسال البريد الإلكتروني<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">القائمة</h4>
						<li><a href="{{url('/workout')}}">التمارين</a></li>
						<li><a href="{{url('/')}}">المكملات الغذائية</a></li>
						<li><a href="{{url('/diet')}}">التغذية السليمة</a></li>
						<li><a href="{{url('/contact_us')}}">تواصل معنا</a></li>
						<li><a href="{{url('/logout')}}">تسجيل خروج</a></li>
					</ul>
					
				</div>
				
				
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/bodybuildingacademylogo.png" alt=""/>
					</div>
				
</body>
</html>