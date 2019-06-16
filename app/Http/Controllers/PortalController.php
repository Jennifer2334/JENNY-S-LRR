<?php

namespace App\Http\Controllers;

use App\Portal;
use App\Instructor;
use App\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portals = Portal::all();
        return view('portals.index', [
          'portals' => $portals,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if($request->isMethod('get')) {
        $instructor = Instructor::all()->pluck('staff_no', 'id');
          return view('portals.create', [
            'instructor' => $instructor,
          ]);
      }

      $portals = new Portal;
      $portals->user_id = Auth::user()->id;
      $portals->name = $request->input('name');
      $portals->code = $request->input('code');
      $portals->semester = $request->input('semester');
      $portals->instructor_id = $request->input('instructor');
      $portals->save();

      return redirect('portals')->with('success', 'The portal has been created successfully.');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $portal = Portal::find($id);
      $reports = Report::all();
      return view('portals.view', [
        'portal' => $portal,
        'reports' => $reports,
      ]);
    }

    public function createReport(Request $request, $id) {
      $portal = Portal::find($id);
      return view('portals.report', [
        'portal' => $portal,
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function edit(Portal $portal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portal $portal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portal $portal)
    {
        $portal->delete();
        return redirect()->route('portals.index');
    }
}
