<!DOCTYPE html>
<html>
  <head> 
   @include('admin.admincss')
   
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
     @include('admin.body')
     @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.jsfile')
  </body>
</html>