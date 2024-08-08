<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
     @include('home.homecss')

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
       
         <!-- banner section end -->
      </div>
     <div class="container ">
            <h1 class="services_taital mt-xl-5">Blog Post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               
               <div class="row">
                 
                  <div class="col-md-4">
               
      <img src="{{asset('blog/image/'.$view->image)}}" class="services_img" style="margin-bottom:78px;">
           
                     
   

                  </div>
                  <div class="col-md-8 mt-5">
                      <p style="font-size:20px">{{$view->description}}</p>
                  </div>

                 
               </div>

            </div>
         </div>
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