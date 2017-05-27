    <!-- start menu -->
    <div class="menu" id="menu">
      <div class="container">
         <div class="logo">
            <a href="{!! route('frontend.index') !!}"><img src="/img/logo.png" alt=""/></a>
         </div>
         <div class="h_menu4"><!-- start h_menu4 -->
           <a class="toggleMenu" href="#">Menu</a>
             <ul class="nav">
               <li class="active"><a href="{!! route('frontend.index') !!}">Home</a></li>
               @if($logged_in_user)
               <li><a href="classes.html">Diet</a></li>
               <li><a href="blog.html">Workout</a></li>
               <li><a href="pricing.html">Trainers</a></li>
               <li><a href="contact.html">Blog</a></li>
               <li><a href="{!! route('frontend.auth.logout') !!}">Logout</a></li>
               @else
               <li><a href="{!! route('frontend.auth.login') !!}">Login</a></li>
               <li><a href="{!! route('frontend.auth.register') !!}">Register</a></li>
               @endif
             </ul>
              <script type="text/javascript" src="/js/nav.js"></script>
          </div><!-- end h_menu4 -->
         <div class="clear"></div>
      </div>
    </div>
    <br>
    <!-- end menu -->