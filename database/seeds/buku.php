<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Buku_model::insert([
        [
          'judul'=> 'off the record',
          'penerbit'=>'Gramedia',
          'pengarang'=>'Ria SW',
          'foto'=>'-',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'judul'=> 'Bumi',
          'penerbit'=>'Gramedia',
          'pengarang'=>'Tere Liye',
          'foto'=>'-',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'judul'=> 'Bulan',
          'penerbit'=>'gramedia pustaka',
          'pengarang'=>'Tere',
          'foto'=>'-',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'judul'=> 'matahari',
          'penerbit'=>'Gramed',
          'pengarang'=>'Liye',
          'foto'=>'-',
          'created_at'=> date('Y-m-d H:i:s'),
        ],
        [
          'judul'=> 'Sunshine Becomes You',
          'penerbit'=>'Metropop',
          'pengarang'=>'Ilana Tan',
          'foto'=>'-',
          'created_at'=> date('Y-m-d H:i:s'),
        ]
      ]);
    }
}
