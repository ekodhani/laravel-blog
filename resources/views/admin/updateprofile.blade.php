@extends('template.layout_dashboard')

@section('title', 'Update Profile')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

<div class="row">
    <div class="col-lg-6">
        <form action="{{ url('/profile/updateuser/' . $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <div class="row">
                    <div class="col-2">
                        <img src="{{ url('assets/profile/' . $user->image) }}" title="{{ $user->image }}" class="rounded" width="100%">
                    </div>
                    <div class="col">
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fab fa-fw fa-blogger"></i> Update</button>
                <a href="{{ url('/profile') }}" class="btn btn-warning"><i class="fas fa-fw fa-window-close"></i> Back</a>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection