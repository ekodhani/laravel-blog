@extends('template.layout_dashboard')

@section('title', 'Create Blog')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

<div class="row">
    <div class="col-lg-6">
        <form action="{{ url('/postblog') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content1" id="content" class="form-control" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" class="form-control-file" name="thumbnail" id="thumbnail">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fab fa-fw fa-blogger"></i> Save</button>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection