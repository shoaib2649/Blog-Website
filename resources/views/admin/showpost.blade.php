<!DOCTYPE html>
<html>
  <head> 
   @include('admin.admincss')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style>
     .bt{
      font-size:23px;
      color:orange;
      font-family:fantasy;

     }
     .main{
      margin-top: 45px;
      margin-bottom: 45px;
      display: flex;
      width:123px!important;
      height:34px;
      margin-left: 56px;
      justify-content: space-around;
      align-items: center;
     }
   </style>
  </head>
  <body>

   
   @include('admin.header')
    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
   <div class="container-fluid">
    <div class="main">
      <h1>Total Number of Request [{{$total}}]</h1>

    </div>
    <div class="row">
      
      <div class="col mt-5" >
        <table class="table  table-bordered table-hover table-responsive ">
          <tr class="bg-primary text-white text-center"  >
            <th >S-no</th>
            <th>postBy</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Post Status</th>
            <th>User Id</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>
            <th>Accept</th>
            <th>Reject</th>
          </tr>
          
          @foreach($show as $show)
          <tr>
          <td>{{$show->id}}</td>
          <td>{{$show->usertype}}</td>
          <td>{{$show->name}}</td>

          <td>{{$show->title}}</td>
          <td>{{$show->description}}</td>
          <td>{{$show->post_status}}</td>
          <td>{{$show->user_id}}</td>
          <td>
    <img src="blog/image/{{$show->image}}" class="img-thumbnail" alt="" width="130px" height="130px">
          </td>
<td>
  <a href="deletepost/{{$show->id}}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
</td>
<td><a href="{{route('edit',$show->id)}}" class="btn btn-success ">Edit </a></td>
@if($show->post_status=='active')
<td><a href="{{route('accept',$show->id)}}" class="bt" >Accept</a></td>
@else
<td><a href="{{route('accept',$show->id)}}" class="btn btn-info ">Accept</a></td>
@endif
@if($show->post_status=='reject')
<td><a href="{{route('reject',$show->id)}} " class="bt" >Reject</a></td>
@else
<td><a href="{{route('reject',$show->id)}}" class="btn btn-danger ">Reject</a></td>
@endif

          </tr>
          @endforeach
          
        </table>
        

      </div>
    </div>
  </div>
     @include('admin.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.jsfile')
<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to cancel this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>

  </body>
</html>