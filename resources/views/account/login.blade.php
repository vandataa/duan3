@extends('layout.layout')

@section('content')
    <main class="page_content">
        <section class="register_section section_space_lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-5">
                        <h1 class="register_heading text-center">Account
                            Login</h1>
                        @if ( Session::has('erro'))
                            <p class="register_heading_description text-center">{{ Session::get('erro') }}</p>
                        @endif
                        <p class="register_heading_description text-center">Please
                            enter your User/Email & Password</p>
                        <form action="/login_account" method="POST">
                            @csrf
                            <div class="register_form signup_login_form">
                                <div class="form_item">
                                    <input type="email" id="email" name="email" required placeholder="Username or Email">
                                </div>
                                <div class="form_item">
                                    <input type="password" id="password" name="password" required placeholder="**********">
                                </div>
                                <div class="remenber_forget row mb-3 align-items-center justify-content-between">
                                    <div class="col col-6">
                                        <div class="checkbox_item mb-0"><input id="checkbox_remenber" type="checkbox"
                                                required> <label for="checkbox_remenber">Remenber
                                                me</label></div>
                                    </div>
                                    <div class="col col-6">
                                        <div class="forget_password text-end"><a href="#!">Forget
                                                Password</a></div>
                                    </div>
                                </div><button type="submit" class="btn btn_dark mb-5"><span><small>Login
                                            Now</small> <small>Login Now</small></span></button>
                                <p class="mb-0 text-center">don't have
                                    an account? <a href="/resign">Register
                                        Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
