<?php

namespace App\Http\Controllers;

use App\models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('Suppliers.Suppliers_index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Suppliers.Suppliers_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'contact_name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'required|string|max:20',
        ]);

        Supplier::create([
            'name'=>$request->name,
            'contact_name'=>$request->contact_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        return redirect()->route('suppliers.index')->with('success', 'A new supplier was added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::find($id);

        if(!$supplier){
            return redirect()->route('suppliers.index')->with('Error', 'Supplier not found');
        }

        return view('Suppliers.Suppliers_show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::find($id);
        return view('Suppliers.Suppliers_edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::find($id);
        if(!$supplier){
            return redirect()->route('suppliers.index')->with('Error', 'Not found');
        }

        $request->validate([
            'name'=> 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
        ]);
        
        $supplier->update([
        'name' => $request->name,
        'contact_name' => $request->contact_name,
        'email' => $request->email,
        'phone' => $request->phone,
        ]);

        return redirect()->route('suppliers.show', $supplier->id)->with('Success', 'The supplier was updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Supplier::destroy($id);
        if(!$delete){
            return redirect()->route('suppliers.index')->with('Error', 'Supplier not found');
        }
            return redirect()->route('suppliers.index')->with('Success', 'Supplier removed');
    }
}
