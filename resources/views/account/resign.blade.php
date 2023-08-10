@extends('layout.layout')

@section('content')
    <main class="page_content">
        <section class="register_section section_space_lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-5">
                        <h1 class="register_heading text-center">Create Account</h1>
                        @if(Session::has('erro'))
                        <p class="register_heading_description text-center">{{Session::get('erro')}}
                        </p>
                        @endif
                        <p class="register_heading_description text-center">Already have account? <a href="/login">Login</a>
                        </p>
                        <form action="/resign_account" method="POST">
                            @csrf
                            <div class="register_form signup_login_form">
                                <div class="form_item"><input type="email" name="email" placeholder="Email"></div>
                                <div class="form_item"><input type="password" name="password" placeholder="Create Password">
                                </div>
                                <div class="form_item"><input type="password" name="comfirm" placeholder="Confirm Password">
                                </div><button type="submit" class="btn btn_dark mb-5"><span><small>Signup Now</small>
                                        <small>Signup
                                            Now</small></span></button>
                                <p class="text-center">Or Login With</p>
                                <ul class="social_links unordered_list_center">
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.com/"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
