<!DOCTYPE html>
<html lang="en">
   <head>
     <style>   


.temp{
   display: flex;
   justify-content: center;
   margin-top: 23px;

}

     </style>
      <!-- basic -->
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      @if(Session()->has('message'))
    <div class="alert alert-primary ">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
      {{Session()->get('message')}};
  </div>
  @endif
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
       


     <div class="row temp">  

<div class="col-md-6">  


     
  
 <form method="POST" action="{{route('postsubmit')}}" enctype="multipart/form-data">
   @csrf 
  <div class="form-outline mb-4">
    <input type="text" id="tile" class="form-control" name="title" />
    <label class="form-label" for="tile">Title</label>
  </div>

   <div class="form-group">
    <label for="description" >description</label>
    
    <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>

  </div>
 

  <div class="form-group">
    <label for="file">Upload the file</label>
    <input type="file" name="image" class="form-control-file" id="file">
  </div>

  <button type="submit" class="btn btn-primary" style="color:white;">Add post</button>
</form>
</div>
     </div>
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