<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cus = Customer::all();
        return view('customer.index',compact('cus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi input
        $request->validate([
              'nama'=>'required',
              'telepon'=>'required',
              'alamat'=>'required',
              'email'=>'required',
        ]);
        $cus=Customer::create($request->all());
        return redirect()->route('customer.index')->with('pesan','Data Berhasil Ditambahkan');
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
        $cus = Customer::findOrFail($id);
        return view('customer.edit',compact('cus'));
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
        $cus = Customer::find($id);
        $cus->update($request->all());
        return redirect()->route('customer.index')->with('pesan','Data Kategori Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cus = Customer::find($id);
        //cek data
        if (!$cus) {
            return redirect()->back();
        }
        $cus->delete();
        return redirect()->route('customer.index')->with('pesan','Data Kategori Berhasil di Hapus');
    }
}
