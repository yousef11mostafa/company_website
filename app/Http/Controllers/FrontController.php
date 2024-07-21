<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Member;
use App\Models\feature;
use App\Models\Message;

use App\http\Requests\StoreContactRequest ;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services=Service::paginate(6);
        $members=Member::paginate(4);
        $features=Feature::paginate(6);
        return view('front.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        //
        $members=Member::paginate(4);
        $features=Feature::paginate(6);
        return view('front.about',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function services()
    {
        //
        $services=Service::paginate(6);
        return view('front.services',get_defined_vars());
    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        //
        return view('front.contact',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function store(StoreContactRequest  $request)
    {
        //

        $data=$request->validated();
        Message::create($data);
        return to_route("front.contact")->with('success','success_message');

    }


}
