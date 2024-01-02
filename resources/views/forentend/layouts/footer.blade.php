
<br>
<br>
<footer class="footer-2">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="logo"><a href="{{url('/')}}">
         <h3>{{trans('admin.drkhaledsite')}}</h3>
</a></div>

 <a href="{{settings()->TwitterLink}}">
                        <img src="{{url('/')}}/forentend/icon/twitter.png" style="width:30px;height:30px">
                        
                    </a>
      
      
                    <a href="{{settings()->instagramLink}}">
                        <img src="{{url('/')}}/forentend/icon/instagram.png" style="width:30px;height:30px">
                        
                    </a>
             
                  
                    <a href="{{settings()->facebookLink}}">
                        <img src="{{url('/')}}/forentend/icon/facebook.png" style="background-color:#fff;border-radius:5px;width:30px;height:30px"  >
                    </a>
</div>
<div class="col-md-5">
<div class="footer-nav">
<ul>
<li><a href="{{url('/')}}/About">{{trans('admin.About')}}</a></li>
<li><a href="{{url('/')}}/Services">{{trans('admin.Services')}}</a></li>
 
<li><a href="{{url('/')}}/contact">{{trans('admin.Contact')}}</a></li>
 
</ul>
</div>

</div>
<div class="col-md-4">
<div class="text">
<p>© 2021  . جميع الحقوق محفوظة بواسطة  <a href="">{{trans('admin.drkhaledsite')}}</a></p>
</div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="consultation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:50px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#000">
            {{trans('admin.Book your consultation today')}}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            {{trans('admin.Close')}}
        </button>
       
      </div>
    </div>
  </div>
</div>

</footer>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/jquery-3.4.1.min.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/bootstrap.min.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/aos.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/jquery-ui.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/jquery.smartmenus.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/owl.carousel.min.js"></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/jquery.fancybox.min.js"></script>
<script src='https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/TweenMax.min.js'></script>
<script src='https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/tilt.jquery.js'></script>
<script src='https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/jquery.magnific-popup.min.js'></script>
<script src='https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/shuffle.js'></script>

<script src="https://demo.voidcoders.com/htmldemo/potfo/main-files/assets/js/theme.js"></script>



<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+966550486165", // WhatsApp number
            call_to_action: " راسلنا علي  الواتس اب ", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/641f96bb31ebfa0fe7f4ac72/1gsdm9jug';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>
</html>