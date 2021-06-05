<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $plat = DB::table('plat')->get();
        return view ('user0055',['plat'=> $plat]);
    }
    public function tambah()
    {
        return view('tambah0055');
    }
    public function edit($id)
    {
        $plat = DB::table('plat')->where('id',$id)->get();
        return view('edit0055',['plat'=>$plat]);
    }
    public function update(Request $request) 
    {
        DB::table('plat')->where('id', $request->id) ->update([ 'no_plat' => $request->no_plat,
        'merk' => $request->merk ]);
        return redirect('/plat');
    }

    public function hapus($id)
    {
        DB::table('plat')->where('id',$id)->delete();
        return redirect('/plat');
    }

    public function store (Request $request) 
    {
    // insert data ke table pasien 
    DB::table('plat')->insert([
    'id' => $request->id,
    'no_plat' => $request->no_plat,
    'merk' => $request->merk,]);
    
    return redirect('/plat');
    }

    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $plat=DB::table('plat')->where('no_plat','like',"%".$cari."%")->paginate();
        return view('user0055',['plat' => $plat]);
    }
}