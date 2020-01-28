<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Anggotamodel;
use Auth;

class Anggotacontroller extends Controller
{
    public function index()
    {
        if(Auth::user()->level=="admin"){
            $dt_anggota=Anggotamodel::get();
            return response()->json($dt_anggota);

    }else{
        return response()->json(['status'=>'anda bukan admin']);
    }
    }
    public function store(Request $req)
    {
        $validator=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
        ]
        );
        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan=Anggotamodel::create([
            'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp,

        ]);
        if($simpan){
            return Response()->json(['status'=>1, 'message'=>"Data Berhasil Ditambahkan!"]);
        } else{
            return Response()->json(['status'=>0]);
        }
    }
    public function tampil_anggota()
    {
        $data_anggota=Anggotamodel::count();
        $data_anggota1=Anggotamodel::all();
        return Response()->json(['count'=> $data_anggota, 'anggota'=> $data_anggota1, 'status'=>1]);
    }

    public function update($id,Request $req)
    {
        $validator=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'telp'=>'required',

        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah=Anggotamodel::where('id',$id)->update([
            'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'telp'=>$req->telp
        ]);
        if($ubah){
            return Response()->json(['status'=>1, 'message'=>"Data Berhasil Diubah!"]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }
    public function destroy($id)
    {
        $hapus=Anggotamodel::where('id',$id)->delete();
        if($hapus){
            return Response()->json(['status'=>1, 'message'=>"Data Berhasil Dihapus!"]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }
}
