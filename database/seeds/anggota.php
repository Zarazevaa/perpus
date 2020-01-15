<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
          [
          'nama_anggota'=> 'zeva',
          'alamat'=> 'jalan jalan',
          'telp'=> '0812121212112',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
      [
        'nama_anggota'=> 'zara',
        'alamat'=> 'jalan buntu',
        'telp'=> '12312331212',
        'created_at'=> date('Y-m-d H:i:s'),
      ],
      [
        'nama_anggota'=> 'budi',
        'alamat'=> 'jalan saja',
        'telp'=> '087564758887',
        'created_at'=> date('Y-m-d H:i:s'),
      ],
      [
        'nama_anggota'=> 'nana',
        'alamat'=> 'jalan ranau',
        'telp'=> '134567876543',
        'created_at'=> date('Y-m-d H:i:s'),
      ],
      [
        'nama_anggota'=> 'nini',
        'alamat'=> 'jalan danau bratan',
        'telp'=> '123456654',
        'created_at'=> date('Y-m-d H:i:s'),
      ]
    ]);
    }
}
