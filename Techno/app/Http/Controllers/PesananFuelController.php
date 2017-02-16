<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fuel;
use Illuminate\Support\Facades\DB;

class PesananFuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pesanan.fuel');
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
      $this->validate($request,[
        'jumlah' =>'required',
        'email' => 'required',
        'category' => 'required'
        ]);

        $fuel = new Fuel;
        $fuel->email = $request->email;
        $fuel->jumlah = $request->jumlah;
        $fuel->alamat = $request->alamat;
        $fuel->kategori = $request->category;
        if($fuel->kategori=="Bensin")
        {
          $fuel->totalHarga = $fuel->jumlah*7000;
        }
        if($fuel->kategori=="Solar")
        {
          $fuel->totalHarga = $fuel->jumlah*8000;
        }
        if($fuel->kategori=="Pertalite")
        {
          $fuel->totalHarga = $fuel->jumlah*9000;
        }

        $fuel->save();

          return redirect()->route('fuel.index')->with('alert-success','Pesanan telah ditambahkan!');
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
        $fuel = DB::table('fuel')->where('idPemesanan' , $id)->get();
        return view('pesanan.editpemesananfuel',['fuel'=>$fuel]);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
