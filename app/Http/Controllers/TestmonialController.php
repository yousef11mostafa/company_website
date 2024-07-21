<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $testmonials=Testmonial::paginate(2);
        return view('admin.testmonials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
          return view('admin.testmonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        $data = $request->validated();
        // image uploading
        // 1- get image
        $image = $request->img;
        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();


        // 3- move image to my project
        $image->storeAs('testmonials', $newImageName, 'public');
        // 4- save new name to database record
        $data['img'] = $newImageName;

        Testmonial::create($data);
        return to_route('superadmin.testmonials.index')->with('success','success_create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
         return view('admin.testmonials.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        //
         return view('admin.testmonials.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        //
       $data=$request->validated();
       if ($request->hasFile('image')) {

       $image = $request->img;
       // 2- change it's current name
       $newImageName = time() . '-' . $image->getClientOriginalName();


       // 3- move image to my project
       $image->storeAs('testmonials', $newImageName, 'public');
       // 4- save new name to database record
        $data['img'] = $newImageName;
       }

        $testmonial->update($data);

       return to_route('superadmin.testmonials.index')->with('success','success_update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        //
          Storage::delete("public/testmonials/$testmonial->img");
          $testmonial->delete();
        return to_route('superadmin.testmonials.index')->with('success','success_delete');
    }
}
