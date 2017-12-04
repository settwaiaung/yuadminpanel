<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Report;
use App\User;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::paginate(5);
        return view('report.index', compact('reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'title' => 'required|min:1',
            'body'  => 'required|min:1',
        ]);

        $report = Report::create([
            'title' => $validated_data['title'],
            'body'  => $validated_data['body'],
            'user_id'=> \Auth::id()
        ]);

        return redirect()->route("reports.index");

        // $validator = Validator::make(Input::all(), $rules);
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
        $report = Report::findOrFail($id);     
        return view('report.show', compact('report'));
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
        $report = Report::findOrFail($id);
        return view('report.edit', compact('report'));

        
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
        
        $report = Report::findOrFail($id);
        $user = User::findOrFail(\Auth::id());

        if ($user->can('update', $report)) 
        {
            $report->update($request->all());
            return redirect()->route('reports.show', $report->id);
        }
        else
        {

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $user = User::findOrFail(\Auth::id());

        if ($user->can('delete', $report)) 
        {
            $report = Report::findOrFail($id);
            $report->delete();
            return redirect()->route('reports.index')->with('status', 'Report deleted!');;
        }
    }
}
