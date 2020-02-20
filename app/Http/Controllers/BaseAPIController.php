<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Controller;


class BaseAPIController extends Controller
{
    protected $slug = "";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Call: http://voyager.devs/api/products/
     */
    public function index()
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        //$this->authorize('browse', app($dataType->model_name));
        $records = $dataType->model_name::all();
        return response()->json($records, 200);
    }

    public function indexWithTrashed() {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        //$this->authorize('browse', app($dataType->model_name));
        $records = $dataType->model_name::withTrashed()->get();
        return response()->json($records, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        //$this->authorize('add', app($dataType->model_name));
        $val = $this->validateBread($request->all(), $dataType->addRows);
        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()], 400);
        }
        $inserted = $dataType->model_name::create($request->all());
        return response()->json($inserted, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Call: http://voyager.devs/api/products/4
     */
    public function show($id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $record = $dataType->model_name::find($id);
        if (is_null($record)) {
            return response()->json(['message' => $dataType->display_name_singular.' not found'], 404);
        }
        return response()->json($record, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();

        $record = $dataType->model_name::find($id);
        if (is_null($record)) {
            return response()->json(['message' => $dataType->display_name_singular.' not found'], 404);
        }
        $val = $this->validateBread($request->all(), $dataType->editRows, $this->slug, $id);
        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()], 400);
        }
        $record->update($request->all());
        return response()->json($record, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->slug)->first();
        $record = $dataType->model_name::find($id);
        if (is_null($record)) {
            return response()->json(['message' => $dataType->display_name_singular.' not found'], 400);
        }
        $record->delete();
        return response()->json(null, 204);
    }


}
