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
    <div class="page-content" style="background:lightcyan;">
<form method="POST" action="{{route('editsubmit')}}" enctype="multipart/form-data">
  @csrf 

  
    @if(Session()->has('message'))
    <div class="alert alert-primay">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
      {{Session()->get('message')}};
  </div>
  @endif



  <div class="form-group">
    <div class="row offset-3 mt-5">
    <div class=" col-md-6 ">
      <div> <input type="hidden" name="id"></div>
    <label for="posttitle">Post Title</label>
    <input type="text" class="form-control" id="posttitle" aria-describedby="emailHelp" placeholder="Enter Title" name="title" value="{{$edit->title}}">

 
  <div>
    <label for="description" >description</label>
  <textarea name="description" class="form-control" id="description" placeholder="description">{{$edit->description}}</textarea>
 </div>

  <div class="form-group">
    <label for="file">Upload the file</label>
    <input type="file" name="image" class="form-control-file" id="file">
  </div>
  <div class="form-group">
   
 
  <img src="{{ asset('blog/image/' . $edit->image) }}" alt="" width="100px" height="100px">

  </div>


  <button type="submit" class="btn btn-primary" style="color:black;">Submit</button>
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