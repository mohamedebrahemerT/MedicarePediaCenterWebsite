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
                    <li class="breadcrumb-item active">  {{trans('admin.photos')}} </li>
                </ol>
            </div>


 

<div id="portfolio" class="portfolio portfolio-2">
<div class="container">
<h2>  {{trans('admin.photos')}}   </h2>
<div class="row">

     @foreach(App\Maincategories::where('id','!=',78)->get() as  $Maincategoy )

<div class="col-md-4">
<div class="single-portfolio card-s" data-aos="fade-up" data-aos-duration="3000">
<a href="{{url('/')}}/{{substr($Maincategoy->photo, -29) }}" class="expand-img"><img src="{{url('/')}}/{{ $Maincategoy->photo }}" style="height: 250px;" alt="gallery"></a>
</div>
</div>
           @endforeach
 



</div>
</div>
</div>


@endsection