<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.teams', compact('teams'));
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
        $about = $request->about;
        $facebook = $request->facebook;
        $linkedin = $request->linkedin;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/team');

            $image->move($destinationPath, $image_name);
            Team::create([
                'name' => $name,
                'position' => $position,
                'about' => $about,
                'image' => $image_name,
                'facebook' => $facebook,
                'linkedin' => $linkedin
            ]);

            alert()->success(' Successful')->autoclose(3000);
            return redirect()->route('teams');

        } else {
            Team::create([
                'name' => $name,
                'position' => $position,
                'about' => $about,
                'facebook' => $facebook,
                'linkedin' => $linkedin

            ]);
            alert()->success(' Successful')->autoclose(3000);
            return redirect()->route('teams');

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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team-add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team, $id)
    {
        $team = Team::where('id', $id)->first();
        return view('admin.team-edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $facebook = $request->facebook;
        $linkedin = $request->linkedin;
        $name = $request->name;
        $position = $request->position;
        $about = $request->about;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $destinationPath = public_path('/team');
            $image->move($destinationPath, $image_name);
            Team::where('id', $request->id)
                ->update([
                    'name' => $name,
                    'position' => $position,
                    'about' => $about,
                    'image' => $image_name,
                    'facebook' => $facebook,
                    'linkedin' => $linkedin

                ]);

            alert()->success(' Successful')->autoclose(3000);
            return redirect()->back();

        } else {


            $facebook = $request->facebook;

            $update = Team::where('id', $request->id)

                ->update([
                    'name' => $name,
                    'position' => $position,
                    'about' => $about,
                    'facebook' => $facebook,
                    'linkedin' => $linkedin

                ]);
                if($update){
                alert()->success('Successful')->autoclose(3000);
                return redirect()->back();

                }
                else{
                alert()->error('Error')->autoclose(3000);
                }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team, $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        if ($team) {

            alert()->success(' Deleted successfully', 'Team Member')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error Deleting');
        }
    }
}
