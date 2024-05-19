<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $show_member=Member::all();

        return view('admin.members',['members'=>$show_member]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin\add-member');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'adress'=>'required',
            'position'=>'required',
            'image'=>'required|image',
            'description'=>'required',

        ]);
        $path=$request->file('image')->store('uploads','public');

        Member::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'adress'=>$request->input('adress'),
            'position'=>$request->input('position'),
            'image'=>$path,
            'description'=>$request->input('description'),

        ]);

        return back()->with('success','New Member Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $member)
    {
        Member::where('id',$member)->delete();
        return back()->with('success','member deleted done');
    }

    public function show_team(){
        $membersdata=Member::all();

        return view('team',['members'=>$membersdata]);

    }
}
