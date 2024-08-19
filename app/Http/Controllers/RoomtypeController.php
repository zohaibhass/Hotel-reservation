<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $roomTypes=Roomtype::all();
       return view('admin.roomtype',['roomTypes'=>$roomTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_room_type');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'nullable'
        ]);

        Roomtype::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description')
        ]);

        return back()->with('success',"room type added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Roomtype $roomtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roomtype $roomtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roomtype $roomtype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $roomType)
    {
        Roomtype::where('id',$roomType)->delete();
        return back()->with('success','type deleted');
    }
}
