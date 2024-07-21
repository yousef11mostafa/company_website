<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $features=Feature::paginate(2);
        return view('admin.features.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        //
        $data=$request->validated();
        Feature::create($data);
        return to_route('superadmin.features.index')->with('success','success_create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
        return view('admin.features.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        //
         return view('admin.features.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        //
        $data=$request->validated();

        $feature->update($data);

       return to_route('superadmin.features.index')->with('success','success_update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        //
        $feature->delete();
        return to_route('superadmin.features.index')->with('success','success_delete');

    }
}
