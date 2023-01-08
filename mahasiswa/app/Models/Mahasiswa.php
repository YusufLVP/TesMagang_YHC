<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mahasiswas';
    protected $fillable = ['nama','prodi','kelas','semester','tahun_angkatan'];

    public function Prodi(){
        return $this->belongsTo(Prodi::class);
    }

    // public function scopeOrderByKelas($query, $filter)
    // {
    //     $query->when($filter['order'] == 1 ?? false, function ($query) {
    //         return $query->orderBy('nama','desc');
    //     });
    // }

}
