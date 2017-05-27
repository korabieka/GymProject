
<!DOCTYPE HTML>
<html>
<head>
<title>BodyBuildingAcademy</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
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
         
         </div>
         
         <div class="clear"></div>
      </div>
    </div>
    <!-- end menu -->
        <div class="main">
          <div class="register-grids">
            <div class="container">
                        {{ Form::open(['route' => 'frontend.auth.register', 'class' => 'form-horizontal']) }} 
                                <div class="register-top-grid">
                                        <h3>بيانات شخصية</h3>
                                        <div>
                                            <span>الاسم<label>*</label></span>
                                            <input type="text" name="name"> 
                                        </div>
                                        <div>
                                            <span>البريد الالكتروني<label>*</label></span>
                                            <input type="email" name="email"> 
                                        </div>
                                        <div class="clear"> </div>
                                            
                                </div>
                                <div class="clear"> </div>
                                <div class="register-bottom-grid">
                                        <h3>بيانات الدخول</h3>
                                        <div>
                                            <span>كلمة المرور<label>*</label></span>
                                            <input type="password" name="password">
                                        </div>
                                        <div>
                                            <span>تأكيد كلمة المرور<label>*</label></span>
                                            <input type="password" name="password_confirmation">
                                        </div>
                                        <div class="clear"> </div>
                                </div>
                                <div class="clear"> </div>
                                <input type="submit" value="تسجيل">
                        </form>
                    </div>
                </div>
         </div>
         <div class="footer-bottom">
           <div class="container">
             <div class="row section group">
                <div class="col-md-4">
                   <h4 class="m_7">الاشتراك في الرسائل الإخبارية</h4>
                   <p class="m_8">لتلقي كل أخبارنا ومعلومات جديدة فقط أدخل البريد الإلكتروني الخاص بك وانتظر للجميع

</p>
                      <form class="subscribe">
                         <input type="text" value="ادراج البريد الالكتروني
                         " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ادراج لريد الكتروني';}">
                      {{ Form::close() }}
                      <div class="subscribe1">
                        <a href="#">ارسال البريد الالكتروني<i class="but_arrow"> </i></a>
                      </div>
                </div>
                <div class="col-md-4">
                @if($logged_in_user)
                    <ul class="list">
                        <h4 class="m_7">Menu</h4>
                        <li><a href="#">Workout</a></li>
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Diet</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                @endif
                </div>
                
                
                <div class="col-md-4">
                    <div class="f-logo">
                        <img src="images/bodybuildingacademylogo.png" alt=""/>
                    </div>
</body>
</html>