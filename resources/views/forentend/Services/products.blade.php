  
@extends('forentend.index')

@section('content')
 
  

    <img src="{{url('/')}}/oursolutions.png" class="img-fluid">


    <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{trans('admin.product')}} </li>
                </ol>
            </div >
 
   
    
    <!-- Page Content -->
  <!--  <div class="container">
             <a href="{{url('/')}}" class="btn btn-primary">{{trans('admin.back')}}</a>
    </div> -->

  
    <div class="services-bar">
        <div class="container">
            <h1 class="py-4">{{trans('admin.product')}}</h1>
            <!-- Services Section -->
            <div class="row">
 
           @foreach($products as $product)
               <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="{{url('/')}}/pen/{{$product->id}}">
                            <img class="img-fluid" src="{{url('/')}}/{{$product->photo }}" alt="" 
                            style="  width:340px;
    height:232px"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/')}}/pen/{{$product->id}}">
                            
                            <h4 class="card-header"> 

                  @if(session('lang')=='ar')
{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$product->title_name_en }}

@endif 
            </h4>
                            </a>
                             
                        </div>
                    </div>
               </div>
           @endforeach
              
          
              
             
            </div>
            <!-- /.row -->
        </div>
    </div>
 
@endsection