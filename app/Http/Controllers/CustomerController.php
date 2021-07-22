<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Ink;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.addCustomer')->with('ink', Ink::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->customer_name = $request->input('customer_name');
        $customer->customer_address = $request->input('customer_address');
        $customer->customer_number = $request->input('customer_number');
        $customer->model = $request->input('model');
        $customer->quantity = $request->input('quantity');
        $customer->remark = $request->input('remark');
        $customer->status = $request->input('status');
        $customer->save();
        return redirect('customers')->with('success', 'New customer has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $customer = Customer::find($id);
        return view('customer.editCustomer', compact('customer'))
        ->with('ink', Ink::all());
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
        $customer = Customer::find($id);
        $customer->customer_name = $request->input('customer_name');
        $customer->customer_address = $request->input('customer_address');
        $customer->customer_number = $request->input('customer_number');
        $customer->model = $request->input('model');
        $customer->quantity = $request->input('quantity');
        $customer->remark = $request->input('remark');
        $customer->status = $request->input('status');
        $customer->update();
        return redirect('customers')->with('success', 'Customer has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customers');
    }
}
