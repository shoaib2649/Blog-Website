<div class="container">
            <h1 class="services_taital">Blog Post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               
               <div class="row">
                  @foreach($post as $post)
                  <div class="col-md-4">
                     <div ><img src="{{asset('blog/image/'.$post->image)}}" class="services_img" style="margin-bottom:78px;"></div>
    <p style="font-size:20px">{{substr($post->description,0,70)}}.......</p>
<div class="btn_main"><a href="{{route('viewpage',$post->id)}}">Read more</a></div>
                  </div>
                  @endforeach
               </div>

            </div>
         </div>