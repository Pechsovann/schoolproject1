<?php

namespace App\Http\Controllers;

use App\documents;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use League\CommonMark\Block\Element\Document;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $documents = Documents::all()->toArray();
        return view('evaluator.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('evaluator.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required',
            'property'=>'required',

        ]);
        $documents = new Documents([
            'customer_name'=> $request->get('customer_name'),
            'property'=> $request->get('property')
        ]);
        $documents->save();
        return redirect()->route('document.index')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $documents = Documents::find($id);
        return view('evaluator.documents.edit',compact('documents','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'customer_name'=>'required',
            'property'=>'required',

        ]);
        $documents = Documents::find($id);
        $documents->customer_name = $request->get('customer_name');
        $documents->property = $request->get('property');

        $documents->save();
        return redirect()->route('document.index')->with('success','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $documents = Documents::find($id);
        $documents -> delete();
        return redirect()->route('document.index')->with('success', 'Data Deleted');
    }
}
