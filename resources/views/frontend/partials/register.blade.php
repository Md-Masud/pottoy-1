@extends('frontend.master')

@section('frontend_content')
     <!-- Login\Register Box -->
  <section class="login-box my-5">
    <div class="container">
        <div class="row">
            {{-- <h4 class="text-center mb-3 ">Welcome to Projukti 71 Online Shop! Please login.</h4> --}}
            <div class="col-xl-4 offset-xl-4">
                <div class="login">
                    <form action="{{ route('user.register') }}" method="POST">
                        @csrf
                        <label>User Name*</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name"> 

                        <label>E-mail*</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email Number">

                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Your Email Number">

                        <label> Password*</label>
                        <input type="password" class="form-control" name="password" placeholder=" Your Password">

                        <label> Confirm Password*</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder=" Confirm Your Password">

                        <input type="submit" class="btn btn-primary mt-2 btn-sm" value="Submit">

                        <span>Already Have An Account? <a href="{{ route('user.login') }}" style="color: rgb(63, 60, 60); text-decoration: none; font-weight: 600;">login</a></span>
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
    <br>
    <br>
</section>
@endsection