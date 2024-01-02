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