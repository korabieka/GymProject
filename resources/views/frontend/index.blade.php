<!DOCTYPE HTML>
<html>
<head>
<title>BodybuildingAcademy</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/new.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
</head>
<body>
    
 <!-- start header_top -->
 <div class="Hello">
  <div class="row">
    <div class="container">




  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>تمارين</h3>
        <p>هنا نوفر لك جميع التمارين الخاصة بكمال الأجسام لزيادة الكتلة العضلية و اللياقة البدنية لرشاقة الجسم و انقاص الوزن</p>
      </div>
      </div>
    </div>
  
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>التغذية</h3>
        <p>لبناء العضلات وفقدان الوزن يجب اتباع نظام غذائي صحي مع ممارسة الرياضة لضمان نتيجة إيجابي</p>
      </div>
      </div>
    </div>
  
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <div class="caption">
        <h3>المكملات</h3>
        <p>في معظم الحالات، المتدربين بحاجة إلى عامل خارجي للوصول إلى نتيجة أسرع وهنا يمكنك أن تأخذ المكملات الغذائية</p>
      
      </div>
      </div>
    </div>  
  </div>
 </div>
  <p style="margin-left: 100px"><a class="botton" href="{{url('/workout')}}" role="button">اذهب لعملية تحويل جسمك</a></p>
</div>
    
    
    
    
    
    
    
    
    
    
    
    <!-- end header_top -->
    <!-- start header_bottom -->      
      
    <!-- end header_bottom -->

         <div class="clear"></div>
      </div>
    </div>
    <!-- end menu -->
     <div class="main">
        <!-- end content-top -->        
         <div class="footer-bottom" style="margin-top: 0px;">
           <div class="container">
             <div class="row section group">
                <div class="col-md-4">
                   <h4 class="m_7">الاشتراك في الرسائل الإخبارية</h4>
                   <p class="m_8">لتلقي كل أخبارنا ومعلومات جديدة فقط أدخل البريد الإلكتروني الخاص بك وانتظر للجميع
</p>
                      <form class="subscribe">
                         <input type="text" value="ادراج البريد الالكتروني" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ادراج البريد الالكتروني';}">
                      </form>
                      <div class="subscribe1">
                        <a href="#">ارسال البريد الالكتروني<i class="but_arrow"> </i></a>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="f-logo">
                        <img src="images/bodybuildingacademylogo.png" alt=""/>
                    </div>
                    
                    
                </div>
                <div class="col-md-4">
                    <ul class="list">
                        <h4 class="m_7">القائمة</h4>
                        <li><a href="{{url('/workout')}}">التمارين</a></li>
                        <li><a href="{{url('/diet')}}">التغذية السليمة</a></li>
                        <li><a href="{{url('/supplements')}}">المكملات الغذائية</a></li>
                        <li><a href="{{url('/contact_us')}}">تواصل معنا</a></li>
                        <li><a href="{{url('/logout')}}">تسجيل الخروج</a></li>
                        
                    </ul>
                    
                </div>
                <div class="clear"></div>
              </div>
            </div>
         </div>
        
</body>
</html>