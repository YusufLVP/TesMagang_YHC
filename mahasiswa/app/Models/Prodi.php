<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'prodis';
    protected $fillable = ['nama_prodi','deskripsi'];


    public function ProdiMahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
}
