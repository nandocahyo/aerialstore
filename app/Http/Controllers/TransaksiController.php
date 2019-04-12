<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Fpdf;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::where('status','0')->get();
        return view('transaksi.index',compact('transaksi'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'qty'=>'required'
        ]);
        Transaksi::create($request->except('submit'));
        return redirect()->route('transaksi.index');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $transaksi = Transaksi::where('status','0');
        $transaksi->update(['status'=>'1']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        if (!$transaksi) {
            return redirect()->back();
        }
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }

    public function laporan()
    {
        $pdf = new Fpdf("L","cm","A4");
        $pdf::AddPage();
        $pdf::SetFont('Arial', 'B', 18);
        $pdf::Cell(185,7,'Laporan Penjualan Drone',0,1,'C');
        $pdf::SetFont('Arial', '', 12);
        $pdf::Cell(185,5,'AerialStore',0,1,'C');
        $pdf::SetFont('Arial', '', 12);
        $pdf::Cell(185,5,"Jl. Kertosariro No 72, Ketawanggede, Kota Malang",0,1,'C');
        $pdf::Line(10,30,190,30);
        $pdf::Line(10,31,190,31);
        $pdf::Cell(30,10,'',0,1);
        $pdf::SetFont('Arial', 'B', 14);
        $pdf::Cell(185,5,'Penjualan Drone',0,0,'C');
        $pdf::Cell(30,10,'',0,1);
        $pdf::Cell(60,7,'Nama Produk',1,0);
        $pdf::Cell(25,7,'Qty',1,0);
        $pdf::Cell(40,7,'Harga Produk',1,0);
        $pdf::Cell(38,7,'Subtotal',1,0);
        $pdf::Cell(30,7,'Tanggal',1,1);
        $transaksi=Transaksi::where('status','1')->get();
        foreach($transaksi as $item){
            $pdf::Cell(60,7,$item->produk->nama,1,0);
            $pdf::Cell(25,7,$item->qty,1,0);
            $pdf::Cell(40,7,$item->produk->harga,1,0);
            $pdf::Cell(38,7,$item->produk->harga*$item->qty,1,0);
            $pdf::Cell(30,7,\Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %b %Y'),1,1);
       }

        $pdf::Output();
        exit;
    }


}
