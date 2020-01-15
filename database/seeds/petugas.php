<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Petugas_model::insert([
        [
          'nama_petugas'=>'Lala',
          'alamat'=>'jalan depan',
          'telp'=>'1234567876543',
          'username'=>'lala',
          'password'=>'123',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'nama_petugas'=>'Lili',
          'alamat'=>'jalan belakang',
          'telp'=>'23456789876543',
          'username'=>'lili',
          'password'=>'123',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'nama_petugas'=>'Lulu',
          'alamat'=>'jalan kanan',
          'telp'=>'345678876543',
          'username'=>'lulu',
          'password'=>'123',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'nama_petugas'=>'Lele',
          'alamat'=>'jalan kiri',
          'telp'=>'12345676543332',
          'username'=>'lele',
          'password'=>'123',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'nama_petugas'=>'Yohan',
          'alamat'=>'jalan x1',
          'telp'=>'02012121212',
          'username'=>'yoyo',
          'password'=>'123',
          'created_at'=> date('Y-m-d H:i:s'),
        ]
      ]);
    }
}
