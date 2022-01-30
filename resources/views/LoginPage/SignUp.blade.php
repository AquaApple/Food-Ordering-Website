 @include('LoginPage.Includes.Head')
 <!-- Sign up form -->
  <section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form  action="{{route('user.store')}}" method="POST" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}"/>
                    </div>
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}"/>                       
                    </div>
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password"/>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="repassword" id="re_pass" placeholder="Repeat your password"/>
                    </div>                                         
                        @if(Session()->has('fail'))
                        <div class="alert alert-success">
                          {{Session()->get('fail')}}
                        </div>
                        @endif
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{asset('LoginPage/images/signup-image.jpg')}}" alt="sing up image"></figure>
                <a href="{{route('user.login.page')}}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@include('LoginPage.Includes.Head')