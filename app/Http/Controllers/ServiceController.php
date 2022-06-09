<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services', compact('services'));
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
            $destinationPath = public_path('/services');
            $image->move($destinationPath, $image_name);
            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;

            Service::create([
                'image' => $image_name,
                'title' => $title,
                'body' => $body,
                'summary' => $summary
            ]);
        }

        alert()->success(' Service has been uploaded successfully', 'Service Upload')->autoclose(3000);
        return redirect()->back();
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
    //    public function show(Blog $blog)
    //    {
    //        //
    //    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::where('id', $id)->first();
        return view('admin.service-edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //        dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/services');
            $image->move($destinationPath, $image_name);

            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;


            Service::where('id', $request->id)
                ->update([
                    'image' => $image_name,
                    'title' => $title,
                    'body' => $body,
                    'summary' => $summary
                ]);
        } else {

            $title = $request->title;
            $body = $request->body;
            $summary = $request->summary;


            Service::where('id', $request->id)
                ->update([
                    'title' => $title,
                    'body' => $body,
                    'summary' => $summary
                ]);
        }

        alert()->success(' Service Updated', 'Service Update')->autoclose(3000);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        if ($service) {
            alert()->success('Sucess')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error');
        }
    }
}
