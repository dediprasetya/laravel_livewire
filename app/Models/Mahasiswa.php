<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model

{

use HasFactory;

public $table="mahasiswa";

protected $primaryKey = "nim"; // custom primary key

public $incrementing=false; // mematikan auto increment

protected $keyType="string"; // custom type primary key (defaultnya autoincrement

public $fillable = ['nim','nama','umur','alamat','kota','kelas','jurusan'];


}


