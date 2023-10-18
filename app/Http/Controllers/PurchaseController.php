<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Purchases = Purchase::get();
        return view('Purchase.index',compact('Purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Purchase.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Purchase = new Purchase();
        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $Purchase->Image = $filename;
        }
     
       

        $Purchase->Name = $request->Name;
        $Purchase->Email = $request->Email;
        $Purchase->Address = $request->Address;
        $Purchase->Contact = $request->Contact;
        $Purchase->Image = $request->Image;
        $Purchase->save();
        // return view('Purchase.index');
        return redirect()->back()->with('submit','Submited successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase,$id)
    {
        $Purchase = Purchase::find($id);
        return view('Purchase.edit',compact('Purchase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase,$id)
    {
        $Purchase = Purchase::find($id);
        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $Purchase->Image = $filename;
        }
     

        $Purchase->Name = $request->Name;
        $Purchase->Email = $request->Email;
        $Purchase->Address = $request->Address;
        $Purchase->Contact = $request->Contact;
        $Purchase->Image = $request->Image;
        $Purchase->save();
        // return view('Purchase.inedx');
        return redirect('Purchase')->with('updated','Updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase,$id)
    {
        $data = Purchase::find($id);
        $data->delete();
        return redirect('Purchase')->with('deleted','Deleted successfully');
    }
}
