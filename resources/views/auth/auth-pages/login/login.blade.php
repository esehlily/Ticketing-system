@extends('auth.auth-layout.index')

@section('title')
    Login
@endsection

@section('content')
    <div style="display: flex; justify-content: center; margin-top: 2rem;" class="container">
        <div class="p-5 ">
            <div class="pb-3">
                <h1 class="fs-5"><span class="first-txt">Welcome Back,</span> <br>
                    Login to your account to proceed</h1>
            </div>

            <div class="row">
                <form>
                    <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-2 position-relative">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password">
                        <span class="position-absolute top-eye">
                            <i id="showPassword" class="fas fa-eye-slash"></i>
                        </span>
                    </div>
                    <div class="forgot">
                        <a href="">Forgot Password?</a>
                    </div>

                    <div class="login-part">
                        <button class="login-btn">
                            <b>Login</b>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
