<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::get();
        return  view('Seller.index',compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Seller.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $seller = new Seller();
        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $seller->Image = $filename;
        }
     

       $seller->Name = $request->Name;
       $seller->Email = $request->Email;
       $seller->Address = $request->Address;
       $seller->Contact = $request->Contact;
       $seller->save();
            // return "Hello";
        //   return view('Seller.index');
           return redirect()->back()->with('submit','Submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller,$id)
    {
        $seller = Seller::find($id);
        return view('Seller.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller,$id)
    {
        $seller = Seller::find($id);
        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $seller->Image = $filename;
        }
       
        $seller->Name = $request->Name;
        $seller->Email = $request->Email;
        $seller->Address = $request->Address;
        $seller->Contact = $request->Contact;
        $seller->save();
        // return view('Seller.index');
        return redirect('Seller')->with('updated','Updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller,$id)
    {
        $data = Seller::find($id);
        $data->delete();
        return redirect('Seller')->with('deleted','Deleted successfully');
    }
}
