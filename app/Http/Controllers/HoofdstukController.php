<?php

namespace App\Http\Controllers;

use App\Models\Hoofdstuk;
use App\Models\Script;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class HoofdstukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Hoofdstuk[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Hoofdstuk::All();
    }

    public function indexFunctie(Request $request, $id)
    {
        if ($request->has('sort')) {// heeft de url sort in zijn naam
            return Script::where('hoofdstuk_id', $id)->orderBy($request->sort, "asc")->get(); // zoja sorteer op ingevulde veld
        }
        if ($request->has('limit') && $request->has('offset')) {
            return Script::where('hoofdstuk_id', $id)->skip($request->offset)->take($request->limit)->get();
            //return Script::all();
        }
        return Script::where('hoofdstuk_id',$id)->get(); // zonee niet sorteren
    }

    public function DeleteFunctie(Request $request, $id)
    {
        Script::where('hoofdstuk_id',$id)->delete();
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
     * @param  \App\Models\Hoofdstuk  $hoofdstuk
     * @return Hoofdstuk
     */
    public function show(Hoofdstuk $hoofdstuk)
    {
        return $hoofdstuk;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hoofdstuk  $hoofdstuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hoofdstuk $hoofdstuk)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hoofdstuk  $hoofdstuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hoofdstuk $hoofdstuk)
    {
       //
    }
}
