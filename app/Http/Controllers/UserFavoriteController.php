<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
      public function store(Request $request, $microposts_id)
    {
        \Auth::user()->favorite($microposts_id);
        return redirect()->back();
    }

    public function destroy($microposts_id)
    {
        \Auth::user()->unfavorite($microposts_id);
        return redirect()->back();
    }
}