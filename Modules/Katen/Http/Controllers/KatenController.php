<?php

namespace Modules\Katen\Http\Controllers;

use App\Http\Controllers\Controller;

class katenController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('katen::home');
    }
}
