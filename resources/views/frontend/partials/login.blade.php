@extends('frontend.master')

@section('frontend_content')
     <!-- Login\Register Box -->
     <section class="login-box my-5">
        <div class="container">
            <div class="row">
                {{-- <h4 class="text-center mb-3 ">Welcome to Projukti 71 Online Shop! Please login.</h4> --}}
                <div class="col-xl-4 offset-xl-4 col-xl-4 offset-lg-4">
                    <div class="login">
                        <form action="{{ route('user.login') }}" method="POST">
                            @csrf
                            <label>Email </label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email or Phone Number">

                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                            
                            <input type="submit" class="btn btn-primary mt-2 btn-sm" value="Submit">

                            <span>Don't Have An Account? <a href="{{ route('user.register') }}" style="color: rgb(63, 60, 60); text-decoration: none; font-weight: 600;">Create Account</a></span>
                        </form>
                        <span>or</span>
                        <div class="scocial-login">
                            <button class="btn-f"><a href=""><i class="fab fa-facebook-f"></i> Facebook</a></button>
                            <button class="btn-g"><a href=""><i class="fab fa-google-plus-g"></i> Google</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection