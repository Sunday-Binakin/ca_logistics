<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testies = Testimonial::latest()->get();
        return view('admin.testy-add', compact('testies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $name = $request->name;
        $position = $request->position;
        $testy = $request->testimonial;
        $company_name = $request->company_name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/testies');
            $image->move($destinationPath, $image_name);

            Testimonial::create([
                'name' => $name,
                'position' => $position,
                'company_name' => $company_name,
                'testimonial' => $testy,
                'image' => $image_name,
            ]);
        } else {

            Testimonial::create([
                'name' => $name,
                'position' => $position,
                'testimonial' => $testy,

            ]);
        }

        alert()->success(' Testimonial Added', 'Testimonial')->autoclose(3000);
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
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testy = Testimonial::where('id', $id)->first();
        return view('admin.testy-edit', compact('testy'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $name = $request->name;
        $position = $request->position;
        $testy = $request->testimonial;
        $company_name = $request->company_name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/testies');
            $image->move($destinationPath, $image_name);

            Testimonial::where('id', $request->id)->update([
                'name' => $name,
                'company_name' => $company_name,
                'position' => $position,
                'testimonial' => $testy,
                'image' => $image_name,
            ]);
        } else {

            Testimonial::where('id', $request->id)->update([
                'name' => $name,
                'company_name' => $company_name,
                'position' => $position,
                'testimonial' => $testy,

            ]);
        }

        alert()->success(' Testimonial Updated', 'Testimonial')->autoclose(3000);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial, $id)
    {
        $story = Testimonial::findOrFail($id);
        $story->delete();
        if ($story) {
            alert()->success('Sucess')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error');
        }
    }
}
