<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Berita Terkini</h1>
            <p class="services_text">Satuan Polisi Pamong Praja</p>
            <div class="services_section_2">
               <div class="row">

               <style type="text/css">

                  .btn_main
                  {
                     padding-bottom: 100px;
                  }

               </style>


               @foreach ($post as $post)
               
               <div class="col-md-4">
                     <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                     <h4>{{$post->title}}</h4>

                     <p>Post by <b>{{$post->name}}</b> </p>

                     <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Baca Selengkapnya</a></div>
                  </div>

               @endforeach

               </div>
            </div>
         </div>
      </div>