<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
//use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;

class ScriptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Script[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index(Request  $request )
    {
        if ($request->has('limit') && $request->has('offset')) {
            return Script::skip($request->offset)->take($request->limit)->get();
            //return Script::all();
        }
        return Script::orderBy($request->sort !==null ? $request->sort : "id", "asc")->get();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);
       //return Script::create($request->all());

        $validator = Validator::make($request->all(), [

            'naam' => 'required'
        ]);


        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');
        }
        else return Script::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Script  $script
     * @return Script
     */
    public function show(Script $script)
    {
        return $script;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Script $script)
    {
        $script->update($request->all());
        return $script;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function destroy(Script $script)
    {
        $script->delete();
    }
}
