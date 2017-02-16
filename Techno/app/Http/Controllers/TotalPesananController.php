<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fuel;
use App\Service;
use App\PesananSparepart;
use Illuminate\Support\Facades\DB;
use Auth;
class TotalPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->email;
        $fuels = DB::table('fuel')->where('email',$user)->get();
        $sparepart = DB::table('pesanansparepart')->where('emailPemesan',$user)->get();
        $services = DB::table('service')->where('email',$user)->get();

        return view('pesanan.total' , ['fuels'=>$fuels,'services'=>$services,'spareparts'=>$sparepart]);
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
      $user = $request->email;
      $fuels = DB::table('fuel')->where('email',$user)->get();
      $sparepart = DB::table('pesanansparepart')->where('emailPemesan',$user)->get();
      $services = DB::table('service')->where('email',$user)->get();

      return view('pesanan.total' , ['fuels'=>$fuels,'services'=>$services,'spareparts'=>$sparepart]);
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
        //
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
