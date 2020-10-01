<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class CarsController extends BaseController
{
    /**
     * Create a new controller instance.
     * 
     * @return void;
     */

    public function __construct()
    {

    }

    public function getAll()
    {
        return "getAll";
    }

    public function get($id)
    {
        return 'get' . $id;
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function update($id, Request $request)
    {
        dd($id, $request->all());
    }

    public function destroy($id)
    {
        dd($id);
    }
}
