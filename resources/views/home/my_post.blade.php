<!DOCTYPE html>
<html lang="en">

<head>
   @include('home.homecss')

   <div class="header_section">

   </div>

   <style type="text/css">
      .post_deg {
         padding: 30px;
         text-align: center;
         background-color: white;
      }

      .title_deg {
         font-size: 30px;
         font-weight: bold;
         padding: 15px;
         color: black;
      }

      .des_deg {
         font-size: 18px;
         font-weight: bold;
         padding: 15px;
         color: black;
      }

      .img_deg {
         height: 200px;
         width: 300px;
         padding: 30px;
         margin: auto;
      }
   </style>

</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      @include('home.header')

      @if (session()->has('message'))

      <div class="alert alert-succes">

         <button type="button" class="close" data-dissmis="alert" arial hidden="true">x</button>

         {{session()->get('message')}}

      </div>

      @endif

      @foreach ($data as $data)

      <div class="post_deg">

         <img class="img_deg" src="/postimage/{{$data->image}}">
         <h4 class="title_deg">{{$data->title}}</h4>
         <p class="des_deg">{{$data->description}}</p>

         <a onclick="return confirm('are you sure to delete this ?')" href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Dellete</a>

         <a href="{{url('post_update_page',$data->id)}}" class="btn btn-primary">Update</a>

      </div>

      @endforeach


   </div>

   <div class="footer_section layout_padding">
         <div class="container">
            
            
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
         <div class="container">
         <div class="copyright_section">
         <div class="container">
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