@extends('forentend.index')

@section('content')
  
<div id="home" class="hero-area hero3">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="hero-img" data-aos="fade-right" data-aos-duration="3000">
 
 
</div>
</div>
</div>
</div>
</div>

 <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.About')}} </li>
                </ol>
            </div>



<div id="about" class="about about-2 about-3" style=" background: #fff;color: #000 !important;">
<div class="container">
<div class="row">
<div class="col-md-5 order-2 order-md-1">
<div class="about-img">
<img src="{{url('/')}}/{{$WhoWeAre->photo }}" alt="" title="portfolio">
<img src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/img/about/about-3-bg.png" alt="" title="portfolio" class="ab-3-bg" data-aos="fade-right" data-aos-duration="3000">
</div>
</div>
<div class="col-md-7 order-1 order-md-2">
<div class="about-content">
<div class="about-single-content">
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
                             {!! $WhoWeAre->WhoWeAre_name_ar !!}

                        @endif

                        @if(session('lang')=='en')
                            {!! $WhoWeAre->WhoWeAre_name_en !!}

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
<h2>  {{trans('admin.ourTeam')}}   </h2>
<div class="row">

     @foreach(App\ourTeam::get() as  $Maincategoy )

<div class="col-md-4">
<div class="single-portfolio card-s" data-aos="fade-up" data-aos-duration="3000">
<a href="{{url('/')}}/{{$Maincategoy->photo }}" class="expand-img">
    <img src="{{url('/')}}/{{$Maincategoy->photo}}" alt="gallery"></a>
</div>
</div>
           @endforeach
 



</div>
</div>
</div>

<div id="portfolio" class="portfolio portfolio-2">
<div class="container">
<h2>  {{trans('admin.factsandnumbers')}}   </h2>
</div>
</div>
 <section class="divider parallax layer-overlay" data-bg-img="https://www.atis.edu.sa/forentend/images/bg/bg6.jpg" data-parallax-ratio="0.7" style="height: 250px; background-image: url(&quot;https://www.atis.edu.sa/forentend/images/bg/bg6.jpg&quot;); background-position: 50% 70px;">

          <br>
          <br>
          <br>

      <div class="container pt-70 pb-60">


        <div class="row"  >

        

              
     @foreach(App\VisionMission::get() as  $VisionMission )

          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">

            <div class="funfact text-center">

          

              <h2 data-animation-duration="2000" data-value="600" class="animate-number text-white mt-0 font-38 font-weight-500 appeared">
               {{$VisionMission->title_name_ar}}
              </h2>

              <h4 class="text-white text-uppercase"> 
                {{$VisionMission->title_name_en}}
              </h4>

            </div>

          </div>

    
           @endforeach

 

          





          
        </div>

      </div>

    </section>




@endsection