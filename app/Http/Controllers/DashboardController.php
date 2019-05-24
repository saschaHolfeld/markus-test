<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the Repeat Invoice.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {


        return View("dashboard")->with(array(
            "test" => "test"
        ));

    }
}
