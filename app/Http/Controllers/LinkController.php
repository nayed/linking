<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LinkController extends Controller
{
    public function index()
    {
        $links = \App\Link::all();
        return view('welcome', compact('links'));
    }
    public function show()
    {
        return \Auth::check() ? view('submit') : redirect('/');
    }

    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $link = new \App\Link;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();

        return redirect('/');
    }
}
