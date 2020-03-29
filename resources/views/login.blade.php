@extends('template.layout')

@section('title', 'Login Yuk!')

@section('container')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ url('assets/favicon.png') }}">
                        </div>
                        @if(\Session::has('alert'))
                            <div class="flash-data" data-flashdata="{{ Session::get('alert') }}"></div>
                        @endif
                        @if(\Session::has('alert-success'))
                            <div class="flash-data-success" data-flashdata="{{ Session::get('alert-success') }}"></div>
                        @endif
                        <form class="pt-3" method="post" action="{{ url('/loginPost') }}">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endsection

