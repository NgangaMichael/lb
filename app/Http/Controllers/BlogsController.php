<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Blogs;
use Illuminate\VIew\View;
// use Illuminate\Support\Str;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $blogs = Blogs::all();
        return view('blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Blogs::create($input);
        return redirect('blogs')->with('flash_messsage', 'Blog added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $blog = Blogs::find($id);
        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $blog = Blogs::find($id);
        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blogs::find($id);
        $input = $request->all();
        $blog->update($input);
        return redirect('blogs')->with('flash_message', 'Blog updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blogs::destroy($id);
        return redirect('blogs')->with('flash_message', 'Blog deleted');
    }
}
