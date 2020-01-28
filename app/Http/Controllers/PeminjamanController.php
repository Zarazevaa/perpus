<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman_model;
use Illuminate\Support\Facades\Validator;

class PeminjamanController extends Controller
{
    public function store(Request $req)
    {
      $validator=Validator::make($req->all(),
      [
        'tgl_pinjam'=>"required",
        'id_anggota'=>"required",
        'id_petugas'=>"required",
        'tgl_kembali' =>"required",
        'deadline' =>"required",
        'denda' =>"required",

      ]
    );
    if($validator->fails()){
      return Response()->json($validator->errors());
    }

    $simpan=Peminjaman_model::create([
      'tgl_pinjam'=>$req->tgl_pinjam,
      'id_anggota'=>$req->id_anggota,
      'id_petugas'=>$req->id_petugas,
      'tgl_kembali' =>$req->tgl_kembali,
      'deadline' =>$req->deadline,
      'denda' =>$req->denda,
    ]);
    if($simpan){
      return Response()->json(['status'=>1]);
    } else {
      return Response()->json(['status'=>0]);
    }
    }
}
