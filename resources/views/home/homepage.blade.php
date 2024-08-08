<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
        @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         @include('home.services')
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
        @include('home.aboutsection')
      </div>
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
        @include('home.blogsection')
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         @include('home.clientsection')
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         @include('home.choosesection')
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         @include('home.footer')
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         @include('home.copyright')
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('home.javascript')   
   </body>
</html>