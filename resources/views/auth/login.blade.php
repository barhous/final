<html>

@extends('auth.head')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>

    
        <div class="login-reg-panel">
            <div class="white-panel">
                <div class="login-show">
          

              
               
                        
              
                    <form method="POST" action="{{ route('login') }}">
                       <br>
                        @csrf
                        <h2>LOGIN</h2>
                         
                            <label for="email" >{{ __('E-Mail Address') }}</label>
                    
                           
                                <input style="height:50px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                
                            <label for="password" style="margin-top: 20px;">{{ __('Password') }}</label>
                   
                    
                            <input  style="height:50px;margin-top:0px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                                 <div class="row" style="margin-left:2px;margin-top:0px">
                                  <div class="col-md-4">
                                    <button type="submit" class="btn btn-outline-secondary" style="width:100px;height:40px">
                                        {{ __('Login') }}
                                    </button>
                                  </div>
                                  <div class="col-md-4">

                                    <li class="button" style=" list-style-type: none;">
                                        <a  style="width:100px;height:40px" class="btn btn-outline-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                  </div>
                                </div>
                                    <br>
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                             
                           <br>

                       
                               

                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                @if (Route::has('register'))
                               
                            @endif
                            </div></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
