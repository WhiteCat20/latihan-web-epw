<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shortlink.index', [
            'shortlinks' => ShortLink::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shortlink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'short' => ['required', 'unique:short_links'],
            'original' => ['required'],
        ]);
        ShortLink::create($validatedData);
        return redirect('/shortlink');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function show(ShortLink $shortLink)
    {
        return redirect($shortLink->original);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortLink $shortLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShortLink $shortLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortLink $shortLink)
    {
        //
    }
}
