<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $active = $request->active; //Untuk Mengambil Parameter Di URL Berupa (url?nama=value)
        //Berfungsi untuk mengirimkan data dari Data Base ke view (html)
        // $datas = Barang::all(); //::all harus disertai dengan nama modal yang sudah dibuat (use App\Models\Barang)
        
        $datas = Barang::where('jenis',$active)->orderBy('nama')->take(100)->get();

        // dd($datas);

        // $flights = Flight::where('active', 1)
        //        ->orderBy('name')
        //        ->take(10)
        //        ->get();

        // ini sebagai nomor pada table
        // karena jika pakai id maka nomornya akan acak
        $nomor = 1;
        

        // dd($active);

        if($active === "menengah"){
            $active = 'menengah';
        }elseif($active === "lanjut"){
            $active = 'lanjut';
        }else{
            $active = 'dasar';
        }

        // if(isset($request->active) === "menengah"){
        //     $active = 'menengah';
        // }elseif(isset($request->active) === "lanjut"){
        //     $active = 'lanjut';
        // }else{
        //     $active = 'dasar';
        // }

        // if(isset($_GET['active']) == "menengah"){
        //     $active = 'menengah';
        // }elseif(isset($_GET['active']) == "lanjut"){
        //     $active = 'lanjut';
        // }else{
        //     $active = 'dasar';
        // }
        
        // $active = '';
        // digunakan untuk mengembalikan nilai ke home.blade.php 
        // dengan memberikan data $datas dan $nomor
        return view('main',compact(
            'datas','nomor','active'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Barang;
        return view('/',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBarangRequest $request)
    {
        // Dilakukan Untuk Menambahkan Data Kedalam Data Base
        $model = new Barang;
        // Ini Adalah Nama Nama Row Didalam Data Base
        // $request mengambil nilai dari form view
        $model->nama = $request->nama;
        $model->jumlah = $request->jumlah;
        $model->keterangan= $request->keterangan;
        $model->jenis = mt_rand(1,3);

        // Ini Perintah Untuk Menyimpan Semua Row Diatas Kedalam Dbase
        $model->save();

        // Dilakukan Untuk Mengembalikan Tampilan ke Root '/' Setelah Selesai
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Barang::find($id);
        return view('/',compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangRequest  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangRequest $request,$id)
    {
        $model = Barang::find($id);
        $model->nama = $request->nama;
        $model->jumlah = $request->jumlah;
        $model->keterangan= $request->keterangan;
        $model->jenis = mt_rand(1,3);
        $model->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Barang::find($id);
        $model->delete();
        return redirect('/');
    }
    public function jenis(Request $request)
    {

        return view('loading',[
            'datas'=>Barang::all(),
            'nomor' => 1,
            'active' => $request->active
        ]);
    }
}
