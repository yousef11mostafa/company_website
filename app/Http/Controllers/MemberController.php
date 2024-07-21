<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMemmberRequest;
use App\Http\Requests\UpdateMemmberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $members=Member::paginate(2);
        return view('admin.members.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
          return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemmberRequest $request)
    {
        //
         $data=$request->validated();
         $image=$request->img;
         $newImageName = time() . '-' . $image->getClientOriginalName();
         $image->storeAs('members', $newImageName, 'public');
         $data['img'] = $newImageName;

        Member::create($data);
        return to_route('superadmin.members.index')->with('success','success_create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
         return view('admin.members.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
         return view('admin.members.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemmberRequest $request, Member $member)
    {
        //
       $data=$request->validated();

       if($request->hasFile('img')){
        $data=$request->validated();
        $image=$request->img;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('members', $newImageName, 'public');
        $data['img'] = $newImageName;
       }
        $member->update($data);

       return to_route('superadmin.members.index')->with('success','success_update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
        Storage::delete("public/members/$member->img");
          $member->delete();
        return to_route('superadmin.members.index')->with('success','success_delete');
    }
}
