<?php

namespace App\Http\Controllers;

use App\Datatable;
use Illuminate\Http\Request;
use DataTables;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VIEW('datatableshow.index');
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
     * @param  \App\Datatable  $datatable
     * @return \Illuminate\Http\Response
     */
    public function show(Datatable $datatable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datatable  $datatable
     * @return \Illuminate\Http\Response
     */
    public function edit(Datatable $datatable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datatable  $datatable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datatable $datatable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datatable  $datatable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datatable $datatable)
    {
        //
    }

    public function showdata(){
        $dataset = Datatable::all();
       return Datatables::of($dataset)->make(true);

    }
}
