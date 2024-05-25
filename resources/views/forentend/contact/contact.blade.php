  
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


    <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{url('/')}}">{{trans('admin.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">  {{trans('admin.Contact')}} </li>
                </ol>
            </div >


 

    <div class="contact-main" style="text-align:right;direction: rtl; background: #fff;">
        <div class="container">
            <!-- Content Row -->
          <div class="row">

       

            <!-- Map Column -->
                <div class="col-lg-8 mb-4 contact-left">
                          @if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <h3>{{trans('admin.Dropyour')}}   <span>{{trans('admin.Message')}}</h3>

                    <form name="sentMessage" id="contactForm" novalidate method="post" action="{{url('/')}}/Sendcontact">
                    @csrf

                        <div class="control-group form-group" >
                            <div class="controls">
                                <input type="text" placeholder=" {{trans('admin.name')}}  " class="form-control" id="name" required data-validation-required-message="Please enter your name." name="name" >
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="tel" placeholder=" {{trans('admin.phone')}}  " class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." name="phone" >
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <input type="email" placeholder="   {{trans('admin.Email')}}" class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email" >
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <textarea rows="5" cols="100" placeholder=" {{trans('admin.Message')}}" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" name="message" ></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary" id="sendMessageButton"> {{trans('admin.SubmitMessage')}}   </button>
                    </form>
                </div>
                <!-- Contact Details Column -->
                <div class="col-lg-4 mb-4 contact-right">
                    <h3>{{__("admin.address")}}</h3>
                    <p>
                                 
                       @if(session('lang')=='ar')
        {{settings()->address_ar}}
        @endif
        @if(session('lang')=='en')
        {{settings()->address_en}}
        @endif
                    </p>
                    <p>
                        <abbr title="Phone">{{trans('admin.phone')}}</abbr>: 
                <a href="tel:{{settings()->phone}}"> {{settings()->phone}}</a>
                        
                    </p>

                   <p>

                       
                             
                    <a href="https://x.com/medikidcare?lang=ars">
                        <img src="{{url('/')}}/forentend/icon/twitter.png" style="width:50px;height:50px">
                        
                    </a>
      
      
                    <a href="https://www.instagram.com/medikidcare/">
                        <img src="{{url('/')}}/forentend/icon/instagram.png" style="width:50px;height:50px">
                        
                    </a>
             
                  
                    <a href="https://www.facebook.com/medikidcare?mibextid=LQQJ4d">
                        <img src="{{url('/')}}/forentend/icon/facebook.png" style="background-color:#fff;border-radius:5px;width:50px;height:50px"  >
                    </a>
                
                    </p>

                  
 
                    
            
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    
    <div class="map-main">
       
        <!-- Embedded Google Map -->
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{{settings()->mapLink}}"></iframe>
    </div>

<br>
 
 
 
@endsection