  
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
                        <a href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{trans('admin.services')}} </li>
                </ol>
            </div >

            

<div id="service" class="service service-2">
<h2>{{trans('admin.Services')}}</h2>
<div class="container">
<div class="row">
           @foreach($departments as $department)

<div class="col-md-4">
<div class="single-service card-s" data-aos="fade-up" data-aos-duration="3000">
<div class="icon">
    <a href="{{url('/')}}/Services/{{$department->id}}"   >
  <img class="img-fluid" src="{{url('/')}}/{{$department->icon}}"   />
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

</div>
</div>
</div>
           @endforeach

 

</div>
</div>
</div>




 
    
@endsection