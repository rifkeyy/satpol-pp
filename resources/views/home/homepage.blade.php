<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
   </head>
   <body>

      <div class="header_section">
         @include('home.header')

         @include('home.banner')

      </div>

      @include('home.service')

      @include('home.about')

      @include('home.info_galeri')

      @include('home.footer')
   </body>
</html>