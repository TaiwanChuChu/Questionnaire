<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get menu source
        // $Menu = DB::table('Menu')->where([['UpperID', '0'], ['IsHide', '0'], ['Status', '1']])->select('MenuID', 'MenuNo', 'MenuName', 'UpperID')->get();
        // $SubMenu = DB::table('Menu')
        //     ->where([['UpperID', '>', '0'], ['IsHide', '0'], ['Status', '1']])
        //     ->select('MenuID', 'MenuNo', 'MenuName', 'UpperID')->orderBy('Sort')->get();
        // $sub_menu = array();
        // foreach ($SubMenu as $sub) {
        //     $sub_menu[$sub->UpperID][] = ['MenuNo' => $sub->MenuNo, 'MenuName' => $sub->MenuName];
        // }

        return view('home', ['route2' => session('route2')]);
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
    public function edit($id)
    {
        //
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
    }
}
