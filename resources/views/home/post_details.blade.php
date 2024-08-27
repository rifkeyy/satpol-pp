<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">

      @include('home.homecss')
    
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->

      </div>

      <style>
        .container {
            height: 900px;
            width: 850px;
            padding: 30px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .post-image {
            max-width: 100%;
            height: auto;
        }
    </style>

      <div class="container">
                     <img src="/postimage/{{$post->image}}" class="services_img">

                     <h3><b>{{$post->title}}</b></h3>

                     <h4>{{$post->description}}</h4>

                     <p>Post by <b>{{$post->name}}</b> </p>

                  </div>
      
                  <div class="footer_section layout_padding">
         <div class="container.">
            
            
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container.">
         <div class="copyright_section">
         <div class="container.">
         <p class="copyright_text">Copyright &copy; 2024 | Powered by <a href="https://html.design">STT Cipasung</a></p>
         </div>
      </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>