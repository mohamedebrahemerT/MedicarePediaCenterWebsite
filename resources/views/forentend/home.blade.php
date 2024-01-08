
@extends('forentend.index')

@section('content')

<span itemprop="image" itemscope itemtype="image/jpeg"> 
      <link itemprop="url" href="{{url('/')}}/forentend/assets/iconified/yourimage.jpg"> 
    </span>
 
<div id="home" class="hero-area hero3" style="background-color: #fff;">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="hero-content">
 
<h1 data-aos="fade-in" data-aos-duration="2000" style="color: black; color: #0505f7; ">{{trans('admin.drkhaledsite')}}</h1>

<p data-aos="fade-in" data-aos-duration="1000">{{trans('admin.Consultant plastic and reconstructive surgery')}}</p>
<a href="{{url('/')}}/contact" class="btn-3" data-aos="fade-in" data-aos-duration="1000">{{trans('admin.keep in touch')}}


</a>
</div>
</div>
<div class="col-md-6">
<div class="hero-img" data-aos="fade-left" data-aos-duration="3000">
     @foreach(App\Maincategories::where('id',78)->get() as  $Maincategoy )

<img src="{{url('/')}}/{{$Maincategoy->photo}}" alt="" title="portfolio" >
         @endforeach

</div>
</div>
</div>
</div>
</div>




<div id="service" class="service service-2">
<h2>{{trans('admin.Services')}}</h2>
<div class="container">
<div class="row">
           @foreach($departments as $department)

<div class="col-md-4">
<div class="single-service card-s" data-aos="fade-up" data-aos-duration="3000">
<div class="icon">
    <a href="{{url('/')}}/Services/{{$department->id}}"   >
  <img class="img-fluid" src="{{url('/')}}/{{$department->icon}}"     />
</a>
</div>
<div class="content">
<h3>
         @if(session('lang')=='ar')
{{$department->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$department->dep_name_en }}

@endif 
</h3>
 

<a href="{{url('/')}}/Services/{{$department->id}}"   >{{trans('admin.more')}}


</a>
</div>
</div>
</div>
           @endforeach

 

</div>
</div>
</div>




<div id="about" class="about about-2 about-3"  style=" background: #fff;color: #000 !important;">
<div class="container">
<div class="row">
<div class="col-md-5 order-2 order-md-1">
<div class="about-img">
<img src="{{url('/')}}/{{$WhoWeAre->photo }}" alt="" title="portfolio">
<img src="{{url('/')}}/images/about-3-bg.png" alt="" title="portfolio" class="ab-3-bg" data-aos="fade-right" data-aos-duration="3000">
</div>
</div>
<div class="col-md-7 order-1 order-md-2">
<div class="about-content">
<div class="about-single-content" style="color:black !important;">
<span>
         @if(session('lang')=='ar')
                            {{$WhoWeAre->title_name_ar }}

                        @endif

                        @if(session('lang')=='en')
                            {{$WhoWeAre->title_name_en }}

                        @endif
</span>
<h2> @if(session('lang')=='ar')
                            {{$WhoWeAre->title_name_ar }}

                        @endif

                        @if(session('lang')=='en')
                            {{$WhoWeAre->title_name_en }}

                        @endif</h2>
 
  @if(session('lang')=='ar')
                             

          {!! \Illuminate\Support\Str::limit($WhoWeAre->WhoWeAre_name_ar, 1000) !!}


                        @endif

                        @if(session('lang')=='en')
          {!! \Illuminate\Support\Str::limit($WhoWeAre->WhoWeAre_name_en, 1000) !!}
                           

                        @endif       
 
 
        
</p>
<a href="{{url('/')}}/About" class="btn-3">{{trans('admin.know more')}}</a>
</div>
</div>
</div>
</div>
</div>
</div>




<div id="portfolio" class="portfolio portfolio-2">
<div class="container">
<h2>  {{trans('admin.photos')}}   </h2>
<div class="row">

     @foreach(App\Maincategories::where('id','!=',78)->get() as  $Maincategoy )

<div class="col-md-4">
<div class="single-portfolio card-s" data-aos="fade-up" data-aos-duration="3000">
<a href="{{url('/')}}/{{ $Maincategoy->photo}}" class="expand-img"><img src="{{url('/')}}/{{$Maincategoy->photo }}" class="img-fluid" style="height: 250px;" alt="gallery"></a>
</div>
</div>
           @endforeach
 



</div>
</div>
</div>
</div>


<div class="video video-2">
<a href="https://www.youtube.com/watch?v=3g7WicYzqGQ" class="expand-video">
       <img src="{{url('/')}}/forentend/assets/img/youtubeicon.png"  style="width: 30px;height: 30px;">
</a>
</div>


<div id="blog" class="blog blog-2">
<h2>    {{trans('admin.latest news')}} </h2>
<div class="container">
<div class="row">
                    @foreach($newess as $Ob)

<div class="col-md-4">
<div class="single-blog" data-aos="fade-up" data-aos-duration="3000">
 
<div class="sb-text">
<span>
         @if(session('lang')=='ar')
                                        {{$Ob->title_name_ar }}

                                    @endif

                                    @if(session('lang')=='en')
                                        {{$Ob->title_name_en }}

                                    @endif
</span>
<span> {{$Ob->updated_at->diffForHumans()}}</span>
<a href="">
<h3>

         @if(session('lang')=='ar')
                                        {{$Ob->title_name_ar }}

                                    @endif

                                    @if(session('lang')=='en')
                                        {{$Ob->title_name_en }}

                                    @endif
</h3>
</a>
<a href="{{url('/')}}/blog/{{$Ob->id}}" class="btn-2">أعرف أكثر</a>
</div>
</div>
</div>
                    @endforeach

 
</div>
</div>
</div>
@endsection