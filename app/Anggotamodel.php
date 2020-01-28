<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotamodel extends Model
{
  protected $table="anggota";
  protected $primaryKey="id";
  public $timestamps=false;

  protected $fillable = [
    'nama_anggota','alamat','telp',
  ];

}
