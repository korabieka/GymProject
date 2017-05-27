<!DOCTYPE HTML>
<html>
<head>
<title> Body Building Academy | Login </title>
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/js/jquery.min.js"></script>
</head>


<body>
      <div class="login_top">  
        </div>
    
            <div class="container">
              <div class="col-md-6">
                 
                 <div class="one"></div> <div class="two"></div>
                 <div class="login-page">
                    <h4 class="title">عملائنا الجدد</h4>
                    <p class="one">.مرحبا بكم في أكاديمية كمال الاجسام الموقع للياقة البدنية وبناء العضلات، موقعنا يقدم جميع التمارين والتغذية الخاصة لكل من بناء العضلات واللياقة البدنية وأيضا التخسيس وزيادة الوزن مع شرح مجانا، وكذلك عناوين من صالات رياضية في جميع أنحاء مصر، لذلك نحن سعداء لأشتراكم في الموقع حيث نقدم الشباب كل جديد</p>
                    <div class="button1">
                       <a href="{{url('/register')}}"><input type="submit" name="Submit" value="انشئ حساب"></a>
                                 
                     </div>
                     
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="login-page">
                  <div class="login-title">
                    <h4 class="title">العملاء المسجلين</h4>
                    <div id="loginbox" class="loginbox">
                        <form method="post" action="{{ url('/login') }}" name="login" id="login-form">
                            {!! csrf_field() !!}
                            <fieldset class="input">
                            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            <p id="login-form-username">
                              <label for="modlgn_username">البريد</label>
                                <input type="email" class="inputbox" id="modlgn_username" name="email" value="{{ old('email') }}" size="18" autocomplete="off">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                </p>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <p id="login-form-password">
                                <label for="modlgn_passwd">كلمة المرور</label>
                                <input type="password" id="modlgn_passwd" class="inputbox" name="password" size="18" autocomplete="off">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif  
                                </p>
                            </div>
                            <div class="remember">
                                <p id="login-form-remember">
                                  <label for="modlgn_remember"><a href="{{ url('/password/reset') }}">نسيت كلمة المرور ؟</a></label>
                               </p>
                                <input type="submit" name="Submit" class="button" value="دخول"><div class="clear"></div>
                             </div>
                            </fieldset>
                        </form>

                    </div>
            <div class="clear"></div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
         </div>
         <div class="copyright">
          <div class="container">
            <div class="copy">
                
            </div>
            <div class="social">    
               <ul> 
                  <li class="facebook"><a href="#"><span> </span></a></li>
                  <li class="twitter"><a href="#"><span> </span></a></li>
                  <li class="pinterest"><a href="#"><span> </span></a></li> 
                  <li class="google"><a href="#"><span> </span></a></li>
                  <li class="tumblr"><a href="#"><span> </span></a></li>
                  <li class="instagram"><a href="#"><span> </span></a></li> 
                  <li class="rss"><a href="#"><span> </span></a></li>                           
               </ul>
            </div>
           <div class="clear"></div>
          </div>
      
</body>
</html>