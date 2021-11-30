@extends('frontend.master')

@section('frontend_content')
     <!-- Login\Register Box -->
  <section class="login-box my-5">
    <div class="container">
        <div class="row">
            {{-- <h4 class="text-center mb-3 ">Welcome to Projukti 71 Online Shop! Please login.</h4> --}}
            <div class="col-xl-4 offset-xl-4">
                <div class="login">
                    <form action="">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your First Name">

                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Last Name">

                        
                        <label>E-mail or Phone</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email or Phone Number">
                        
                        <label> Password</label>
                        <input type="password" class="form-control" placeholder=" Your Password">

                        <label> Confirm Password</label>
                        <input type="password" class="form-control" placeholder=" Confirm Your Password">

                        <input type="submit" class="btn btn-primary mt-2 btn-sm" value="Submit">

                        <span>Already Have An Account? <a href="login.html" style="color: rgb(63, 60, 60); text-decoration: none; font-weight: 600;">login</a></span>
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