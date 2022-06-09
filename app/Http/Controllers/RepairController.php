<?php

namespace App\Http\Controllers;

use App\Mail\Service;
use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repair = Repair::latest()->get();
        return view('admin.requests', compact('repair'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $repair = new Repair();
        $repair->name = $request->name;
        $repair->location = $request->location;
        $repair->phone = $request->phone;
        $repair->service = $request->service;
        $repair->vehicle = $request->vehicle;


        // \Mail::send(new Service($repair));

        Repair::create(
            $request->all()
        );

        return [
            'message' => 'success'
        ];
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
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repair = Repair::where('id', $id)->first();
        return view('admin.request-view', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Repair::where('id', $id)
            ->update([
                'status' => 'repaired'
            ]);

        if ($product) {
            alert()->success('successful')->autoclose(3000);
            return redirect()->back();
        } else {
            return 'error';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        //
    }
}
