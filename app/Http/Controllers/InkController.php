<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ink;
use Illuminate\Support\Facades\File;

class InkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ink = Ink::all();
        return view('ink.index', compact('ink'));
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
        $ink = new Ink;
        $ink->ink_model = $request->input('ink_model');
        $ink->ink_price = $request->input('ink_price');
        $ink->ink_commision = $request->input('ink_commision');
        if($request->hasFile('ink_img')){
            $file = $request->file('ink_img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' .$extension;
            $file->move('images', $fileName);
            $ink->ink_img = $fileName;
        }
        $ink->save();
        return redirect('inks')
        //->back()
        ->with('success', 'Ink has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ink $ink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ink = Ink::find($id);
        return view('ink.editInk', compact('ink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ink = Ink::find($id);
        $ink->ink_model = $request->input('ink_model');
        $ink->ink_price = $request->input('ink_price');
        $ink->ink_commision = $request->input('ink_commision');
        if($request->hasFile('ink_img')){
            $destination = 'images/'.$ink->ink_img;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('ink_img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' .$extension;
            $file->move('images', $fileName);
            $ink->ink_img = $fileName;
        }
        $ink->update();
        return redirect('inks')
        //->back()
        ->with('success', 'Ink has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ink = Ink::find($id);
        $destination = 'public/image/'.$ink->ink_img;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $ink->delete();
        return redirect('inks')
        ->with('success', 'Ink deleted successfully.');
    }
}
