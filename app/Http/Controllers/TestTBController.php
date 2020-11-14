<?php

namespace App\Http\Controllers;

use App\TestTB;
use Illuminate\Http\Request;

use DataTables;
use Illuminate\Support\Facades\DB;


class TestTBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TestTB.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\TestTB  $testTB
     * @return \Illuminate\Http\Response
     */
    public function show(TestTB $testTB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestTB  $testTB
     * @return \Illuminate\Http\Response
     */
    public function edit(TestTB $testTB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestTB  $testTB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestTB $testTB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestTB  $testTB
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestTB $testTB)
    {
        //
    }

    public function testtb(){

        $test = DB::table('students')
        ->select('*')
        ->get();

        return Datatables::of($test)->make(true);
    }
}
