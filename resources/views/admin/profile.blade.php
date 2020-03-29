@extends('template.layout_dashboard')

@section('title', 'Profile')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

@if(\Session::has('alert-success'))
    <div class="flash-data-success" data-flashdata="{{ Session::get('alert-success') }}"></div>
@endif
<div class="row">
    <div class="col-lg-6">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('assets/profile/'. Session::get('image')) }}" class="card-img-top" title="{{ Session::get('image') }}">
            <div class="card-body">
                <h5 class="card-title">{{ Session::get('name') }}</h5>
                <p class="card-text">{{ Session::get('email') }}</p>
                <a href="{{ url('/profile/update/' . Session::get('id')) }}" class="btn btn-info"><i class="fas fa-fw fa-edit"></i>  Update</a>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection