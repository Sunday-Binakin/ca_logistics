<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileDelete;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery', compact('images'));
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
            $image_name = Gallery::generateSlug();
            $destinationPath = public_path('/gallery');
            $image->move($destinationPath, $image_name);

            $description = $request->description;


            Gallery::create([
                'name' => $image_name,
                'description' => $description,

            ]);
            alert()->success('Success')->autoclose(3000);
            return redirect()->back();
        } else {
            return 'no image';
        }
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($name)
    {
        $image = Gallery::where('name', $name)->first();
        $image_path = public_path() . '/gallery/' . $image->name;


        $image_delete = FileDelete::delete($image_path);
        $image_remove  = Gallery::where('name', $name)->delete();
        // dd($image_remove);
        if ($image_delete && $image_remove) {
            return redirect()->back();
            // $resp = [
            //     'status' => 'success',
            //     'msg' => 'Image has been deleted successfully'
            // ];
            // return response()->json($resp, 200);
        }
        //  else {
        //     $resp = [
        //         'status' => 'failed',
        //         'msg' => 'there was an error'
        //     ];
        //     return response()->json($resp, 400);
        // }
    }
}
