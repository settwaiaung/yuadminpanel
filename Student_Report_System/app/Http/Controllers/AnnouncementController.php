<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\User;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $announcements = Announcement::paginate(5);
        return view('announcement.index' , compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $validated_data = $request->validate([
            'title' => 'required|min:1',
            'body'  => 'required|min:1',
       ]);

    $announcement = Announcement::create([
            'title' => $validated_data['title'],
            'body' => $validated_data['body'],
            'user_id' => \Auth::id(),
    ]);

    return redirect()->route('announcement.index');
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
        $announcement = Announcement::findOrFail($id);
        return view ('announcement.show' , compact('announcement'));
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
        $announcement = Announcement::findOrFail($id);
        return view('announcement.edit' , compact('announcement'));
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
        //
        $announcements =Announcement::findOrFail($id);
        $announcements ->update($request->all());
        return redirect()->route('announcement.index', compact('announcements'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $id = Announcement::findOrFail($id);
        $id->delete();
        return redirect()->route('announcement.index')->with('success' , 'Deleted !');;
    }
}
