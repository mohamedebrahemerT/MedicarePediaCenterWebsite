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
                    <li class="breadcrumb-item active">  {{trans('admin.newes')}} </li>
                </ol>
            </div>

            <div id="blog" class="blog blog-2">
<h2>   @if(session('lang')=='ar')
                                        {{$newes->title_name_ar }}

                                    @endif

                                    @if(session('lang')=='en')
                                        {{$newes->title_name_en }}

                                    @endif </h2>
<div class="container">
<div class="row">
           

<div class="col-md-12">
<div class="single-blog" data-aos="fade-up" data-aos-duration="3000">
 
<div class="sb-text">
<span>
         @if(session('lang')=='ar')
                                        {{$newes->title_name_ar }}

                                    @endif

                                    @if(session('lang')=='en')
                                        {{$newes->title_name_en }}

                                    @endif
</span>
<span> {{$newes->updated_at->diffForHumans()}}</span>
 
 

         @if(session('lang')=='ar')
                                        {!! $newes->newes_name_ar !!}

                                    @endif

                                    @if(session('lang')=='en')
                                        {!! $newes->newes_name_en !!}

                                    @endif
 
 
 
</div>
</div>
</div>
             

 
</div>
</div>
</div>

@endsection
