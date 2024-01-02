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
                    <li class="breadcrumb-item active">  {{trans('admin.Services')}}   /  @if(session('lang')=='ar')
                {{$department->dep_name_ar}}
                @endif
                @if(session('lang')=='en')
                {{$department->dep_name_en}}
                @endif </li>
                </ol>
            </div>
 

    <div class="blog-main">
        <div class="container">
             
            <div class="row">
                <!-- Post Content Column -->
              

  <div class="col-lg-6">

    <h2  style="color:#000;text-align: center;" >

                            @if(session('lang')=='ar')
                {{$department->dep_name_ar}}
                @endif
                @if(session('lang')=='en')
                {{$department->dep_name_en}}
                @endif
      
                        </h2>
                       @if(session('lang')=='ar')
      
       <p class="lead" style="direction: rtl;"> 
                @endif

                 @if(session('lang')=='en')
      
       <p class="lead" style="text-align: right;" > 
                @endif

                       @if(session('lang')=='ar')
                {{$department->description}}
                @endif
                @if(session('lang')=='en')
                {{$department->keyword}}
                @endif

</p>
      
                  
      
  </div>

   <div class="col-lg-6">
                    <!-- Preview Image -->

                    
                    
                    <img class="img-fluid rounded" src="{{url('/')}}/{{$department->icon }}"   />
                     
                   
                


                     

                </div>

                

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

@endsection

 