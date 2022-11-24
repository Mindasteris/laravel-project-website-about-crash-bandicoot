<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Community::all();
        return view('community', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'title' => 'required',
                'message' => 'required',
            ]
        );

        $comments = Community::create($request->all());
        // dd($comment);


        return redirect(route('all.posts'))->with('success', 'Your comment was successfully posted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $comments = Community::findOrFail($id);
        
        return view('community.edit', compact('comments'));
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
        $request->validate(
            [
                'name' => 'required',
                'title' => 'required',
                'message' => 'required',
            ]
        );

        $comments = Community::findOrFail($id);
        $comments->update($request->all());

        return redirect(route('all.posts'))->with('update_message', 'Your comment was successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments = Community::findOrFail($id);
        $comments->delete();

        return redirect(route('all.posts'))->with('delete_message', 'Your comment was successfully deleted!');
    }
}
