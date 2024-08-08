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
    <div class="page-content bg-white" >
<form method="POST" action="{{route('addpost')}}" enctype="multipart/form-data" >
  @csrf 

  
    @if(Session()->has('message'))
    <div class="alert alert-primay">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
      {{Session()->get('message')}};
  </div>
  @endif


<div class="container-fluid ">
  <div class="form-group" >
    <div class="row offset-3 mt-5" >
    <div class=" col-md-6 ">
    <label for="posttitle" class="text-black">Post Title</label>
    <input type="text" class="form-control" id="posttitle" aria-describedby="emailHelp" placeholder="Enter Title" name="title">

  <div class="form-group">
    <label for="description" >description</label>
    
    <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>

  </div>
 

  <div class="form-group">
    <label for="file">Upload the file</label>
    <input type="file" name="image" class="form-control-file" id="file">
  </div>

  <button type="submit" class="btn btn-primary" style="color:black;">Submit</button>
  </div>
  </div>
  </div>
  </div>
</form>
    </div>
     @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.jsfile')
  </body>
</html>