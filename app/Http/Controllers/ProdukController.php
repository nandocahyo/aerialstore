<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $this->getRequest($request);
         Produk::create($data);

        return redirect('produk');
    }

    private function getRequest(Request $request)
    {
        $photo          = $request->file('foto');
        if (empty($photo)) return $request->all();
        $filename       = $photo->getClientOriginalName();
        $destination    = base_path() . '/public/uploads';
        $photo->move($destination, $filename);

        $data = $request->all();
        $data['foto'] = $filename;

        return $data;
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
        $produk = Produk::findOrFail($id);
        return view('produk.edit',compact('produk'));
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
        $data = $this->getRequest($request);
        $produk = Produk::find($id);
        $produk->update($data);
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat=Produk::find($id);
        $kat->delete();
        return redirect('produk');
    }

    public function printBarcode(){
        // $produk = Produk::all();
        // return view('produk.barcode',compact('produk'));
        $produk = Produk::limit(12)->get();
        $no = 1;
        $pdf = PDF::loadview('produk.barcode', compact('produk','no'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
        
    }
}
