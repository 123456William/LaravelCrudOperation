<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Register::get();
        return view('list',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reg');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jiten = new Register();

        $jiten->Name = $request->Name;
        $jiten->Email = $request->Email;
        $jiten->Address = $request->Address;
        $jiten->Contact = $request->Contact;
        $jiten->save();
        // return view('reg');
        return redirect('create')->with('success','Submited successfuly');


    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
         $record = Register::find($id);
         return view('edit',compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jiten = Register::find($id);
        $jiten->Name = $request->Name;
        $jiten->Email = $request->Email;
        $jiten->Address = $request->Address;
        $jiten->Contact = $request->Contact;
        $jiten->save();
        // return view('reg');
        return redirect('list')->with('update','Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register, string $id )
    {
        $data = Register::find($id);
        $data->delete();
        // return redirect()->back(); 
        return redirect('list')->with('delete','Deleted successfully');
    }
}
