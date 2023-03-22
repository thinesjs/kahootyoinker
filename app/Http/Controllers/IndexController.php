<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function getGameByUUID(Request $request) {
        $kahootAPI = new KahootAPIController();
        $sessionDetails = $kahootAPI->getSessionDetails($request->gamepin);
        // dd($sessionDetails);
        if(isset($sessionDetails->error)){
            abort(404);
            // return view('pages.error', compact('sessionDetails'));
        }elseif($sessionDetails->uuid == $request->gamepin){
            return view('pages.game', compact('sessionDetails'));
        }
    }
}
