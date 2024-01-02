<body class="vs-light"  >

 

<span id="circle" class="circle"></span>

<button class="scroll-top scroll-to-target" data-target="html">
 <img src="{{url('/')}}/forentend/assets/img/scroll-up-icon-11.png" style="width:30px;height: 30px;">
</button>


<header class="header-area header-3">
<div class="container c-fulid-max">
<div class="row">

<div class="col-3 col-md-3">
<div class="logo-wrapper">
<a href="{{url('/')}}">
 <h3 class="mob" style="color:#000">  @if(session('lang')=='ar')
                                {{settings()->namear}}
                                @endif
                                @if(session('lang')=='en')
                                {{settings()->nameaen}}
                                @endif</h3>
</a>
</div>
</div>

<div class="col-9 col-md-9">
<div class="menu-wrapper menu-3">
<nav class="main-nav">

<input id="main-menu-state" type="checkbox" />
<label class="main-menu-btn" for="main-menu-state">
<span class="main-menu-btn-icon"></span>
</label>

<ul id="main-menu" class="sm sm-mint ml-auto mv-2"  style="margin-right: -18%;">
 
<li><a href="/contact" > {{trans('admin.Contact')}}</a></li>
 <li><a href="/photos" > {{trans('admin.photos')}}</a></li>
<li><a href="/blog" > {{trans('admin.newes')}}</a></li>
<li><a href="#consultation"   data-toggle="modal" data-target="#consultation"> {{trans('admin.Book a consultation')}}</a>
 
</li>
<li><a href="/Services" > {{trans('admin.Services')}}</a></li>
<li><a href="/About" >{{trans('admin.About')}} </a></li>
<li><a href="/" >{{trans('admin.Home')}}</a></li>

</ul>
</nav>
</div>
</div>
</div>
</div>
</header>

