<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return $projects;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpage');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = Project::create($data);
        if($project){
            return response()->json($project, 201);
        }
        return response()->json('error', 500);
    }

    public function projectceate(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return Project::where('id',$project->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // return views('editpage');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $res = Project::findOrfail($project->id)->update($project);
        if($res){
            return response()->json($res,200);
        }
        return response()->json('Error', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $res = Project::findOrfail($project->id)->delete();
        return $res;
    }
}
