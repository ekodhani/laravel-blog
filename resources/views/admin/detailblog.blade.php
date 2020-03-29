@extends('template.layout_dashboard')

@section('title', 'Detail Blog')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="{{ url('/blog') }}" class="btn btn-primary"><i class="fas fa-fw fa-arrow-left"></i> Back</a>

    <h1 class="h3 mb-4 mt-4">{{ $blog->title }}</h1>

    <div class="row">
        <div class="col mb-2">{{ $blog->created_at }}</div>
    </div>
    <img src="{{ url('assets/thumbnail/' . $blog->thumbnail) }}" width="100%">

    <div class="row">
        <div class="col-lg mt-3">
            <?= $blog->content; ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection