@extends('template.layout_dashboard')

@section('title', 'Blog')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

    <!-- content row-->
    <div class="row">

        <div class="col-10 mb-4">
            <a href="{{ url('/createblog') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Create Blog</a>
        </div>

        <div class="col mb-4">
            <form method="get" action="{{ url('/blog') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                <div class="input-group">
                    <input type="text" class="form-control small" placeholder="Search" title="Search For Blog" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- End of Content row -->

    @if(\Session::has('alert-success'))
        <div class="flash-data-success" data-flashdata="{{ Session::get('alert-success') }}"></div>
    @endif
    <div class="row">
        <?php function limit_words($string, $word_limit)
        {
            $words = explode(" ", $string);
            return implode(" ", array_splice($words, 0, $word_limit));
        }
        foreach ($blogs as $blog) : ?>
            <div class="col-lg-6">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Option:</div>
                                <a class="dropdown-item" href="{{ url('/blog/updateblog/' . $blog->id) }}"><i class="fas fa-fw fa-edit"></i> Update</a>
                                <a class="dropdown-item tombol-hapus" href="{{ url('/blog/deleteblog/' . $blog->id) }}"><i class="fas fa-fw fa-trash"></i> Delete</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/blog/detailblog/' . $blog->id) }}"><i class="fas fa-fw fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?= limit_words($blog->content, 50); ?>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection