@include('LandingPage.Includes.head')
<body id="page-top">

 @include('LandingPage.Includes.nav')
 <section class="page-section" id="contact">
    <div class="container"  id="contactstyle">
        <!-- Contact Section Heading-->
      
     
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$food->name}}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-hamburger"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="orderform">
                    <div class="control-group">
                      @if ($food ->photo == NULL)
                      {{'Not Available'}}
                      @else
                      <img  id="imgcustom" 
                      src="/images/foods/{{$food->photo}}">
                      @endif
                        <div>
                            <h5> Details :</h5>
                            <p>{{$food->details}}</p>                            
                        </div>
                    </div>
                    <div class="control-group">
                      <div>
                        <h5> Price :</h5>
                        <p>{{$food->price}} Pound</p>                            
                    </div>
                    </div>           
                    <br/>
                    <div id="success"></div>
                    <div class="form-group"><a href="{{route('user.login.page')}}"><button class="btn btn-primary btn-xl btnorder" id="sendMessageButton" type="button">Order</button></a></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- copy Right section -->
@include('LandingPage.Includes.copyright')
@include('LandingPage.Includes.scripts')
