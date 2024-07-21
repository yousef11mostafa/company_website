<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $setting=Setting::find(1);
         return view('admin.settings.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
          return view('admin.settings.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        //

       $data=$request->validated();

       if ($request->hasFile('img')) {


        $image = $request->img;
        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();
        // removing the old file

        Storage::delete("public/settings/*");

        // 3- move image to my project
        $image->storeAs('settings', $newImageName, 'public');
        // 4- save new name to database record
         $data['img'] = $newImageName;
        }

        $setting->update($data);

       return to_route('superadmin.settings.index')->with('success','success_update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
         $Setting->delete();
        return to_route('superadmin.settings.index')->with('success','success_delete');
    }
}
