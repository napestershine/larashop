<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Hello extends Controller {

    /**
     * Display a listing of the resource.
     * 
     * @return Response
     */
    public function index() {
        return 'Hello world from controller';
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $name
     * @return Response
     */
    public function show($name) {
        return view('hello', array(
            'name' => $name
        ));
    }

    /**
     * Show the form for editinng the specified resource.
     * 
     * @param int $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage
     * 
     * @param Raquest $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the spcified resource from storage
     * 
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
