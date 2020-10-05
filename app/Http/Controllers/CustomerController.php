<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $customers = Customers::all()->toArray();
        return view('evaluator.Customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('evaluator.Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'first_name'=>'required',
           'last_name'=>'required',
           'phone_number'=>'required',
           'address'=>'required'
        ]);
        $customers = new Customers([
           'first_name'=> $request->get('first_name'),
           'last_name'=> $request->get('last_name'),
           'phone_number'=> $request->get('phone_number'),
           'address'=> $request->get('address'),
        ]);
        $customers->save();
        return redirect()->route('evaluator.Customer.index')->with('success','Data Added');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $customers = Customers::find('$id');
        return view('customer.edit',compact('customers','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'phone_number'=>'required',
            'address'=>'required'
        ]);
        $customers = Customers::find('id');
        $customers->first_name = $request->get('first_name');
        $customers->last_name = $request->get('last_name');
        $customers->phone_number = $request->get('phone_number');
        $customers->adddress = $request->get('address');
        $customers->save();
        return redirect()->route('evaluator.Customer.index')->with('success','Data Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $customers = Customers::find($id);
        $customers -> delete();
        return redirect()->route('customer.index')->with('success', 'Data Deleted');
    }
}
