@extends('template.layout_dashboard')

@section('title', 'Update Blog')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

<div class="row">
    <div class="col-lg-6">
        <form action="{{ url('/blog/update/' . $blog->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content1" id="content" class="form-control" cols="30" rows="30">{{ $blog->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <div class="row">
                    <div class="col-2">
                        <img src="{{ url('assets/thumbnail/' . $blog->thumbnail) }}" title="{{ $blog->thumbnail }}" class="rounded" width="100%">
                    </div>
                    <div class="col">
                        <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fab fa-fw fa-blogger"></i> Update</button>
                <a href="{{ url('/blog') }}" class="btn btn-warning"><i class="fas fa-fw fa-window-close"></i> Back</a>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection