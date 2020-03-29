<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $blogs = Blog::where('title', 'LIKE', '%' . $request->search . '%')->orWhere('content', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $blogs = Blog::all();
        }
        return view('admin.blog', ['blogs' => $blogs]);
    }

    public function show()
    {
        return view('admin.createblog');
    }

    public function postblog(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'required',
            'title' => 'required',
            'content1' => 'required',
        ]);

        $title = $request->title;
        $content = $request->content1;

        if ($request->hasfile('thumbnail')) {
            $request->file('thumbnail')->move('assets/thumbnail/', $request->file('thumbnail')->getClientOriginalName());
        }
        Blog::create([
            'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
            'title' => $title,
            'content' => $content,
            'slug' => Str::of($title)->slug('-')
        ]);

        return redirect('/blog')->with('alert-success', 'Blog Berhasil Di Buat!');
    }

    public function detail(Blog $blog)
    {
        //
        Blog::find($blog->id);
        return view('admin.detailblog', ['blog' => $blog]);
    }

    public function update(Blog $blog)
    {
        Blog::find($blog->id);
        return view('admin.updateblog', ['blog' => $blog]);
    }

    public function edit(Request $request, $id)
    {
        if ($request->hasfile('thumbnail')) {
            $request->file('thumbnail')->move('assets/thumbnail/', $request->file('thumbnail')->getClientOriginalName());
        }
        $blog = Blog::find($id);
        $blog->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $blog->title = $request->title;
        $blog->content = $request->content1;
        $blog->slug = Str::of($request->title)->slug('-');
        $blog->save();

        return redirect('/blog')->with('alert-success', 'Blog Berhasil Di Update!');
    }

    public function destroy(Blog $blog)

    {
        Blog::destroy($blog->id);
        return redirect('/blog')->with('alert-success', 'Blog Berhasil Di Hapus!');
    }
}
