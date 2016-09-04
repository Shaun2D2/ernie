<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{

    /**
     * display the welcome page
     *
     * @return Response
     */
    public function index()
    {

      return view('welcome');

    }

}
