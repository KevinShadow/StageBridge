<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Stage;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;


class StageApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Collection
    {
        //
        return Stage::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):void
    {
        //
        Stage::Create($rerquest->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Stage $stage):Stage
    {
        //
        $stage = Stage::find($id);
        if(!$stage){
            return response()->json(['message'=>"stage non touver"], 404);
        }
        return response()->json($stage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $stage = Stage::find($id);
        if(!$stage){
            return response()->json(['message'=>"stage non touver"], 404);
        }
        $stage->delete();
        return response()->json(['message'=>"Stage supprimer avec success"]);
    }
}
