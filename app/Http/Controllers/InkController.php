<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ink;

class InkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inks = Ink::latest()->paginate(5);

        return view('ink.ink', compact('inks'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ink.addInk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ink_model' => 'required',
            'ink_price' => 'required',
            'ink_commision' => 'required',
            'ink_img' => 'required|image|mimes:png,jpg|max:2048',
        ]);
        
        $input = $request->all();

        if($image = $request->file('ink_img')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Ink::create($input);

        return redirect()
        ->route('ink.ink')
        ->with('success', 'Ink created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ink $ink)
    {
        return view('ink.show', compact('inks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ink $ink)
    {
        return view('ink.editInk', compact('inks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ink $ink)
    {
        $request->validate([
            'ink_model' => 'required',
            'ink_price' => 'required',
            'ink_commision' => 'required',
            'ink_img' => 'required|image|mimes:png,jpg|max:2048',
        ]);
        
        $input = $request->all();

        if($image = $request->file('ink_img')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['ink_image'] = "$profileImage";
        }else{
            unset($input['ink_image']);
        }

        $ink->update($input);

        return redirect()
        ->route('ink.ink')
        ->with('success', 'Ink updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ink $ink)
    {
        $ink->delete();
        return redirect()->route('ink.ink')
        ->with('success', 'Ink deleted successfully.');
    }
}
