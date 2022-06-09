<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/blogs');
            $image->move($destinationPath, $image_name);

            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;
            $by = $request->story_by;

            Blog::create([
                'image' => $image_name,
                'title' => $title,
                'body' => $body,
                'by' => $by,
                'summary' => $summary
            ]);
        }

        alert()->success(' Blog has been uploaded successfully', 'Blog Upload')->autoclose(3000);
        return redirect()->route('blog');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog-edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //        dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/blogs');
            $image->move($destinationPath, $image_name);

            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;
            $by = $request->story_by;

            Blog::where('id', $request->id)
                ->update([
                    'image' => $image_name,
                    'title' => $title,
                    'body' => $body,
                    'by' => $by,
                    'summary' => $summary
                ]);
        } else {

            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;
            $by = $request->story_by;

            Blog::where('id', $request->id)
                ->update([
                    'title' => $title,
                    'body' => $body,
                    'by' => $by,
                    'summary' => $summary
                ]);
        }

        alert()->success(' Blog Updated', 'Blog Update')->autoclose(3000);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $story = Blog::findOrFail($id);
        $story->delete();
        if ($story) {
            alert()->success('Success')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error');
        }
    }
}